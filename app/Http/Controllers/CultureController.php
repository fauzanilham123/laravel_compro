<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CultureController extends Controller
{
    //
    
    public function index()
    {
        $cultures = Culture::where('flag',1)
                ->paginate(5);
        return view('back/culture.index', compact('cultures'));
    }

    public function create()
    {
        return view('back/culture.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi gambar
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = $image->hashName();

        
        $image->storeAs('public/posts', $imageName);

        
        Culture::create([
            'image' => $imageName,
            'flag' => 1
        ]);

        

        return redirect()->route('admin.cultures.index')->with('success', 'data added successfully.');
    }
}

    public function edit(string $id)
    {
        $cultures = culture::find($id);
        return view('back/culture.edit', compact('cultures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            
        ]);

        //get post by ID
        $cultures = culture::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$cultures->image);

            //update post with new image
            $cultures->update([
                'image'     => $image->hashName(),
                
            ]);

        } 
        //redirect to index
        return redirect()->route('admin.cultures.index')->with(['success' => 'Data Changed Successfully!']);
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $cultures = culture::findOrFail($id);
    
        // Mengubah nilai flag menjadi 0
        $cultures->update(['flag' => 0]);
    
        return redirect()->route('admin.cultures.index')->with(['success' => 'Data deleted successfully!']);
    }
}

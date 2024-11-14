<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = about::where('flag', 1)
        ->latest()
        ->paginate(5);

        return view('back/about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'desc_1' => 'required',
            'desc_2' =>'required',
            'image' => 'required|image',
            'vision' => 'required',
            'misi' => 'required',
            'count_target' => 'required',
            'count_Digital_Campaign' => 'required',
            'count_target_income' => 'required',
            'count_income' => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        about::create([
        'desc_1' => $request->desc_1,
        'desc_2' => $request->desc_2,
        'image' => $image->hashName(),
        'vision' => $request->vision,
        'misi' => $request->misi,
        'count_target' => $request->count_target,
        'count_Digital_Campaign' => $request->count_Digital_Campaign,
        'count_target_income' => $request->count_target_income,
        'count_income' => $request->count_income,
        'flag' => 1,
    ]);
    return redirect()->route('admin.abouts.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $about = about::findOrFail($id);

        return view('back/about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $this->validate($request, [
        'desc' => 'required',
        'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        'vision' => 'required',
        'misi' => 'required',
    ]);

    // Get the setting by ID
    $about = about::findOrFail($id);
     //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$about->image);

            //update about with new image
            $about->update([
            'desc' => $request->desc,
            'desc_about' => $request->desc_about,
            'image'     => $image->hashName(),
            'vision' => $request->vision,
            'misi' => $request->misi,
            ]);
        } else {

        // Update the about with the new image and other fields
        $about->update([
            'desc' => $request->desc,
            'desc_about' => $request->desc_about,
            'vision' => $request->vision,
            'misi' => $request->misi,
        ]);
        }
    

    // Redirect to the edit page
    return redirect('/abouts/1/edit')->with(['success' => 'data changed successfully']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abouts = about::findOrFail($id);
    
        // Mengubah nilai flag menjadi 0
        $abouts->update(['flag' => 0]);
    
        return redirect()->route('admin.abouts.index')->with(['success' => 'Data berhasil dihapus!']);
    }
    
}

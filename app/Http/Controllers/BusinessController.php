<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use App\DataTables\BusinessDataTable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BusinessDataTable $dataTable)
    {
        return $dataTable->render('back/business.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('back/business.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'logo' => 'image|mimes:jpeg,jpg,png|max:2048|required|',
            'title'  => 'required',
            'desc' => 'required',
            'link' => 'required|url'
        ]);

        $logo = $request->file('logo');
        $logo->storeAs('public/posts', $logo->hashName());

        Business::create([
            'logo' => $logo->hashName(),
            'title' => $request->title,
            'desc' => $request->desc,
            'link' => $request->link,
            'flag' => 1
        ]);

        return redirect()->route('admin.business.index')->with(['success' => 'data added successfully.']);
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
        $business = Business::find($id);
        return view('back/business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $this->validate($request, [
            'logo'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required',
            'desc'     => 'required',
            'link'     => 'required|url',
            
        ]);

        //get post by ID
        $business = Business::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('logo')) {

            //upload new image
            $image = $request->file('logo');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$business->image);

            //update post with new image
            $business->update([
                'logo'     => $image->hashName(),
                'title'     => $request->title,
                'desc'     => $request->desc,
                'link'     => $request->link,
                
            ]);

        } else {
            $business->update([
                'title'     => $request->title,
                'desc'     => $request->desc,
                'link'     => $request->link,
                
            ]);
        }
        //redirect to index
        return redirect()->route('admin.business.index')->with(['success' => 'Data Changed Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $business = Business::findOrFail($id);
    
        // Mengubah nilai flag menjadi 0
        $business->update(['flag' => 0]);
    
        return redirect()->route('admin.business.index')->with(['success' => 'Data deleted successfully!']);
    }
}

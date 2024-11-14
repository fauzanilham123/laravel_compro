<?php

namespace App\Http\Controllers;

use App\Models\Career_page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Career_pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        $career_pages = Career_page::findOrFail($id);

        return view('back/career_page.edit', compact('career_pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Get the setting by ID
        $Career_page = Career_page::findOrFail($id);
        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/' . $Career_page->image);

            //update Career_page with new image
            $Career_page->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'image'     => $image->hashName(),
            ]);
        } else {

            // Update the Career_page with the new image and other fields
            $Career_page->update([
                'title' => $request->title,
                'desc' => $request->desc,
            ]);
        }


        // Redirect to the edit page
        return redirect('/career_pages/1/edit')->with(['success' => 'data changed successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

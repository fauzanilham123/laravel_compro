<?php

namespace App\Http\Controllers;


use App\Models\benefits;
use Illuminate\View\View;
use App\DataTables\BenefitsDataTable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BenefitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BenefitsDataTable $dataTable)
    {
        return $dataTable->render('back/benefits.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/benefits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'name' => 'required',
        ]);

             //upload image
             $image = $request->file('icon');
             $image->storeAs('public/posts', $image->hashName());
     
             //create post
             benefits::create([
                 'icon'     => $image->hashName(),
                 'name'     => $request->name,
                 'flag'     => 1,
             ]);
     
             //redirect to index
             return redirect()->route('admin.benefits.index')->with(['success' => 'Data Berhasil Disimpan!']);
         
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
        $benefits = benefits::find($id);

        return view('back/benefits.edit', compact('benefits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'icon' =>'image|mimes:jpeg,jpg,png|max:2048',
            'name' =>'required',
        ]);

        $benefits = benefits::find($id);

        if ($request->hasFile('icon')) {

            //upload new icon
            $icon = $request->file('icon');
            $icon->storeAs('public/posts', $icon->hashName());

            //delete old icon
            Storage::delete('public/posts/'.$benefits->icon);

            //update post with new icon
            $benefits->update([
                'icon'     => $icon->hashName(),
                'name'     => $request->name,
            ]);

        } else {

            //update post without icon
            $benefits->update([
                'name'     => $request->name,
            ]);
        }

        //redirect to index
        return redirect()->route('admin.benefits.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $benefits = benefits::find($id);
        $benefits->update(['flag' => 0]); // Menambahkan pernyataan ini
        
        return redirect()->route('admin.benefits.index')->with(['success' => 'Data Berhasil Dihapus!']);
        
}

}

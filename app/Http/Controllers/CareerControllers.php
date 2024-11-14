<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\career;
use App\Models\category;
use App\DataTables\careersDataTable;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CareerControllers extends Controller
{
    public function index(careersDataTable $dataTable)
    {
        return $dataTable->render('back/careers.index');
    }
    public function create(){
        $categories = Category::where('flag', 1)->get();

        return view('back/careers.create',compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'id_category' => 'required',
            'position' => 'required',
            'location' => 'required',
            'desc' =>'required'
        ]);

        career::create([
            'id_category' => $request->id_category,
            'position' => $request->position,
            'location' => $request->location,
            'desc' => $request->desc,
            'flag' => 1
        ]);

        return redirect()->route('admin.careers.index')->with(['success' => 'data berhasil di simpan']);
}

    public function edit(string $id){
        $careers = career::findOrfail($id);
        $categories = Category::where('flag', 1)->get();

        return view('back/careers.edit', compact('careers', 'categories'));
    }

    public function update(Request $request, string $id){
        $this->validate($request, [
            'id_category' => 'required',
            'position' => 'required',
            'location' => 'required',
            'desc' =>'required'
        ]);

        $careers = career::findOrfail($id);

        $careers->update([
            'id_category' => $request->id_category,
            'position' => $request->position,
            'location' => $request->location,
            'desc' => $request->desc,
            'flag' => 1
        ]);

        return redirect()->route('admin.careers.index')->with(['success' => 'data berhasil di Ubah']);
}

    public function destroy(string $id){    
        $careers = career::find($id);
        $careers->update(['flag' => 0]); // Menambahkan pernyataan ini
        
        return redirect()->route('admin.careers.index')->with(['success' => 'Data Berhasil Dihapus!']);
}

}
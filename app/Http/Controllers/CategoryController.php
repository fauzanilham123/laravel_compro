<?php

namespace App\Http\Controllers;

use App\DataTables\CategorysDataTable;
use App\Models\category;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategorysDataTable $dataTable)
    {
        return $dataTable->render('back.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);

        category::create([
            'name' => $request->name,
            'flag' => 1
        ]);

        return redirect()->route('admin.categorys.index')->with(['success' => 'data successfully saved!']);    }

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
        $categorys = category::find($id);
        return view('back/category.edit', compact('categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        $categorys = category::find($id);

        $categorys->update([
            'name' => $request->name,
            'flag' => 1
        ]);
        return redirect()->route('admin.categorys.index')->with(['success' => 'data successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorys = category::find($id);
        $categorys->update(['flag' => 0]); // Menambahkan pernyataan ini

        return redirect()->route('admin.categorys.index')->with(['success' => 'data successfully deleted!']);
    }
}

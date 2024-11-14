<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\evolution;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\DataTables\EvolutionsDataTable;


class EvolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(EvolutionsDataTable $dataTable)
{
        return $dataTable->render('back.evolution.index');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/evolution.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'years_record' => 'required',
            'desc' => 'required',
        ]);

        evolution::create([
            'years_record' => $request->years_record,
            'desc' => $request->desc,
            'flag' => 1
        ]);

        return redirect()->route('admin.evolutions.index')->with(['success' => 'data added successfully.']);

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
        $evolutions = evolution::findOrFail($id);

        return view('back/evolution.edit', compact('evolutions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'years_record' => 'required',
            'desc' => 'required',
        ]);

        $evolutions = evolution::findOrFail($id);


        $evolutions->update([
            'years_record' => $request->years_record,
            'desc' => $request->desc,
            
        ]);

        return redirect()->route('admin.evolutions.index')->with(['success' => 'data changed successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evolutions = evolution::findOrFail($id);
    
        // Mengubah nilai flag menjadi 0
        $evolutions->delete(['flag' => 0]);
    
        return redirect()->route('admin.evolutions.index')->with(['success' => 'Data deleted successfully!']);
    }
}

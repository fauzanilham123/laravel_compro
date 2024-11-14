<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\company_goals;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompanyGoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company_goals = company_goals::where('flag', 1)
        ->latest()
        ->paginate(5);

return view('back/company_goals.index', compact('company_goals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/company_goals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'target'  => 'required',
            'desc_icon' => 'required'
        ]);
        
        $icon = $request->file('icon');
        $icon->storeAs('public/posts', $icon->hashName());

        company_goals::create([
            'icon' => $icon->hashName(),
            'target' => $request->target,
            'desc_icon' => $request->desc_icon,
            'flag' => 1
        ]);

        return redirect()->route('company_goals.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $company_goals = company_goals::findOrFail($id);
        return view('back/company_goals.edit', compact('company_goals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'icon' => '',
            'target'  => '',
            'desc_icon' => ''
        ]);
        //get post by ID
        $company_goals = company_goals::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('icon')) {

            //upload new image
            $icon = $request->file('icon');
            $icon->storeAs('public/posts', $icon->hashName());

            //delete old image
            Storage::delete('public/posts/'.$company_goals->icon);

            //update post with new image
            $company_goals->update([
                'icon' => $icon->hashName(),
                'target' => $request->target,
                'desc_icon' => $request->desc_icon,
            ]);

        } else {

            //update post without image
            $company_goals->update([
                'target' => $request->target,
                'desc_icon' => $request->desc_icon,
            ]);
        }

        //redirect to index
        return redirect()->route('company_goals.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $company_goals = company_goals::findOrFail($id);

    // Mengubah nilai flag menjadi 0
    $company_goals->update(['flag' => 0]);

    return redirect()->route('company_goals.index')->with(['success' => 'Data berhasil dihapus!']);
}
}

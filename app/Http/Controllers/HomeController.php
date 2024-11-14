<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //

    public function edit(string $id)
    {
        $homes = home::findOrFail($id);

        return view('back/home.edit', compact('homes'));
    }

    public function update(Request $request, string $id)
{
    $this->validate($request, [
        'desc_section_1' => 'required',
        'count_bussines' => 'required',
        'count_member' => 'required',
        'count_client' => 'required',
        'count_project' => 'required' 
    ]);

    // Get data by ID
    $homes = home::findOrFail($id);

        
        $homes->update([
            'desc_section_1' => $request->desc_section_1,
            'count_bussines' => $request->count_bussines,
            'count_member' => $request->count_member,
            'count_client' => $request->count_client,
            'count_project' => $request->count_project,
        ]);
        
    // Redirect to index or appropriate URL
    return redirect('/homes/1/edit')->with(['success' => 'data changed successfully']);
}

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $teams = Team::where('flag', 1)
                ->latest()
                ->paginate(5);

    return view('back/team.index', compact('teams'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'name'  => '',
            'position' => ''
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        team::create([
            'image' => $image->hashName(),
            'name' => $request->name,
            'position' => $request->position,
            'flag' => 1
        ]);

        return redirect()->route('admin.teams.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $teams = team::findOrFail($id);

        return view('back/team.edit', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'name'     => 'required|min:5',
            'position'   => 'required|min:10'
        ]);

        //get post by ID
        $teams = team::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$teams->image);

            //update post with new image
            $teams->update([
                'image'     => $image->hashName(),
                'name'     => $request->name,
                'position'   => $request->position
            ]);

        } else {

            //update post without image
            $teams->update([
                'name'     => $request->name,
                'position'   => $request->position
            ]);
        }

        //redirect to index
        return redirect()->route('admin.teams.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $team = Team::findOrFail($id);

    // Mengubah nilai flag menjadi 0
    $team->update(['flag' => 0]);

    return redirect()->route('admin.teams.index')->with(['success' => 'Data berhasil dihapus!']);
}

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client_page;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Client_pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients_pages = client_page::where('flag', 1)
        ->latest()
        ->paginate(5);

return view('back/Client_page.index', compact('client_pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/Client_page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required',
            'desc' =>'required',
        ]);

        client_page::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'flag' => 1,
        ]);

        return redirect()->route('admin.client_page.index')
        ->with('success', 'Client page created successfully.');
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
        $clients_pages = client_page::findOrFail($id);

        return view('back/Client_page.edit', compact('clients_pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
        ]);

        $clients_pages = client_page::findOrFail($id);

        $clients_pages->update([
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        return redirect('/client_page/1/edit')->with('success', 'data changed successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients_pages = client_page::findOrFail($id);

        // Mengubah nilai flag menjadi 0
        $clients_pages->update(['flag' => 0]);

        return redirect()->route('admin.client_page.index')
        ->with('success', 'Client page deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\contactsDataTable;
use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(contactsDataTable $dataTable)
{
        return $dataTable->render('back/contact.index');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'company' => 'required',
            'message' => 'required'
        ]);

        contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'company' => $request->company,
            'message' => $request->message,
            'flag' =>  1
        ]);

        return redirect()->route('contacts.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $contacts = contact::findOrFail($id);

        return view('back/contact.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => '',
            'email' => '',
            'telephone' => '',
            'company' => '',
            'message' => ''
        ]);

        $contacts = contact::findOrFail($id);

        $contacts->update([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'company' => $request->company,
            'message' => $request->message,
            'flag' =>  1
        ]);

        return redirect()->route('admin.contacts.index')->with(['success' => 'Data Berhasil Di ubah!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
    
        // Mengubah nilai flag menjadi 0
        $contact->update(['flag' => 0]);
    
        return redirect()->route('admin.contacts.index')->with(['success' => 'Data deleted successfully!']);
    }
    
}

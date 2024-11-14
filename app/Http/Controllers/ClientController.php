<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\DataTables\ClientsDataTable;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render('back.client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi gambar
    ]);

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $imageName = $logo->hashName();

        // Simpan berkas gambar ke direktori yang diinginkan
        $logo->storeAs('public/posts', $imageName);

        // Selanjutnya, Anda dapat menggunakan $imageName saat Anda membuat entri di database
        Client::create([
            'logo' => $imageName,
            'flag' => 1
        ]);

        // ... kode lainnya ...

        return redirect()->route('admin.clients.index')->with('success', 'data added successfully.');
    }
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
        $clients = client::find($id);
        return view('back/client.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //validate form
        $this->validate($request, [
            'logo'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            
        ]);

        //get post by ID
        $clients = client::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('logo')) {

            //upload new image
            $image = $request->file('logo');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$clients->image);

            //update post with new image
            $clients->update([
                'logo'     => $image->hashName(),
                
            ]);

        } 
        //redirect to index
        return redirect()->route('admin.clients.index')->with(['success' => 'Data Changed Successfully!']);
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $cliets = client::findOrFail($id);
    
        // Mengubah nilai flag menjadi 0
        $cliets->update(['flag' => 0]);
    
        return redirect()->route('admin.clients.index')->with(['success' => 'Data deleted successfully!']);
    }

}

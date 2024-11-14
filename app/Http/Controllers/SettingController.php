<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = setting::where('flag', 1)
                ->paginate(5);

    return view('back/setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back/setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'logo' => 'required|image',
        'no_telephone' => 'required',
        'email' =>'required',
        'address' => 'required',
        'working_hours' => 'required',
        'maps' => 'required',
        'no_wa' => 'required',
        
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $image->storeAs('public/posts', $image->hashName());
            // Lanjutkan dengan menyimpan data pengaturan atau pembaruan data.
        }

        setting::create([
            'logo' => $image->hashName(),
            'no_telephone' => $request->no_telephone,
            'email' => $request->email,
            'address' => $request->address,
            'working_hours' => $request->working_hours,
            'maps' => $request->maps,
            'no_whatsapp' => $request->no_whatsapp,
            'flag' => 1
        ]);

        return redirect()->route('admin.settings.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $settings = setting::findOrFail($id);

        return view('back/setting.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'logo' => 'image|mimes:jpeg,jpg,png|max:2048',
            'no_telephone' => 'required',
            'email' =>'required',
            'address' => 'required',
            'working_hours' => 'required',
            'maps' => 'required',
            'no_wa' => 'required',
            'link_fb' => 'required|url',
            'link_ig' => 'required|url',
            'link_twitter' => 'required|url',   
            ]); 

        //get post by ID
        $settings = setting::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('logo')) {

            //upload new image
            $logo = $request->file('logo');
            $logo->storeAs('public/posts', $logo->hashName());

            //delete old image 
            Storage::delete('public/posts'.$settings->logo);

            //update post with new image
            $settings->update([
                'logo' => $logo->hashName(),
                'no_telephone' => $request->no_telephone,
                'email' => $request->email,
                'address' => $request->address,
                'working_hours' => $request->working_hours,
                'maps' => $request->maps,
                'no_wa' => $request->no_wa,
                'link_fb' => $request->link_fb,
                'link_ig' => $request->link_ig,
                'link_twitter' => $request->link_twitter
            ]);

        } else {

            //update post without image
            $settings->update([
                'no_telephone' => $request->no_telephone,
                'email' => $request->email,
                'address' => $request->address,
                'working_hours' => $request->working_hours,
                'maps' => $request->maps,
                'no_wa' => $request->no_wa,
                'link_fb' => $request->link_fb,
                'link_ig' => $request->link_ig,
                'link_twitter' => $request->link_twitter
            ]);
        }

        //redirect to index
        return redirect('/settings/1/edit')->with(['success' => 'data changed successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $settings = setting::findOrFail($id);

        // Mengubah nilai flag menjadi 0
        $settings->update(['flag' => 0]);
    
        return redirect()->route('admin.settings.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}

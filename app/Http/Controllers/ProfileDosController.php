<?php

namespace App\Http\Controllers;

use App\Models\ProfileDos;
use Illuminate\Http\Request;

class ProfileDosController extends Controller
{
    // public function index()
    // {
    //     $profiles = ProfileDos::all();
    //     return view('profileDos.index', compact('profiles'));
    // }

    public function index()
    {
        $profiles = ProfileDos::all();
        return view('dashboard', compact('profiles'));
    }


    public function create()
    {
        return view('profileDos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        ProfileDos::create($request->only('message'));
        return redirect()->route('profileDos.index');
    }

    public function show(ProfileDos $profileDos)
    {
        return view('profileDos.show', compact('profileDos'));
    }

    public function edit(ProfileDos $profileDos)
    {
        return view('profileDos.edit', compact('profileDos'));
    }

    public function update(Request $request, ProfileDos $profileDos)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $profileDos->update($request->only('message'));
        return redirect()->route('profileDos.index');
    }

    public function destroy(ProfileDos $profileDos)
    {
        $profileDos->delete();
        return redirect()->route('profileDos.index');
    }
}

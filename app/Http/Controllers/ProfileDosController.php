<?php

namespace App\Http\Controllers;

use App\Models\ProfileDos;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;


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

    public function downloadPdf(ProfileDos $profileDos)
    {
        // if ($profileDos->user_id !== Auth::id()) {
        //     abort(403, 'No tienes permiso para descargar el PDF de este CV.');
        // }

        // $pdf = Pdf::loadView('profileDos.pdf', compact('profileDos'));
        // return $pdf->download('pdf' . Str::slug($profileDos->full_name) . '.pdf');

        // Cargar la vista que se convertirá en PDF
        $pdf = Pdf::loadView('profileDos.print.pdf', compact('profileDos'));

        // Generar el nombre del archivo PDF utilizando el nombre completo del perfil
        // y convertirlo a una forma apta para URLs
        $filename = 'cv_' . Str::slug($profileDos->full_name) . '.pdf';

        // Devolver el PDF al navegador para su descarga
        return $pdf->download($filename);
    }
}

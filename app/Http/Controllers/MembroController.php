<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class MembroController extends Controller
{
    public function index(): View
    {
        $membros = Membro::latest()->paginate(5);
        
        return view('membros.index',compact('membros'));
    }

    public function create(): View
    {
        return view('membros.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'cargo' => 'required|min:5|max:100',
            'biografia' => 'required|min:10',
            'link' => 'nullable|array',
            'link.*' => 'nullable|url',
            'alt' => 'required|min:5|max:255',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $entrada = $request->except('link');

        if ($imagem = $request->file('imagem')) {
            $destinationPath = 'imagens/';
            $profileImage = date('YmdHis') . "." . $imagem->getClientOriginalExtension();
            $imagem->move($destinationPath, $profileImage);
            $entrada['imagem'] = "$profileImage";
        }

        $membro = Membro::create($entrada);

        if ($request->has('link')) {
            foreach ($request->link as $link) {
                if ($link) {
                    $membro->links()->create(['link' => $link]);
                }
            }
        }

        return redirect()->route("membros.index")
            ->with("success", "Membro criado com sucesso.");
    }


    public function show(Membro $membro): View
    {
        return view("membros.show", compact("membro"));
    }

    public function edit(Membro $membro): View
    {
        return view("membros.edit", compact("membro"));
    }

    public function update(Request $request, Membro $membro): RedirectResponse
    {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'cargo' => 'required|min:5|max:100',
            'biografia' => 'required|min:10',
            'link' => 'nullable|array',
            'link.*' => 'nullable|url',
            'alt' => 'required|min:5|max:255',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $entrada = $request->except('link');

        if ($imagem = $request->file('imagem')) {
            $destinationPath = 'imagens/';
            $profileImage = date('YmdHis') . "." . $imagem->getClientOriginalExtension();
            $imagem->move($destinationPath, $profileImage);
            $entrada['imagem'] = "$profileImage";
        }

        $membro->update($entrada);

        // Atualiza os links
        $membro->links()->delete(); // Remove links antigos

        if ($request->has('link')) {
            foreach ($request->link as $link) {
                if ($link) {
                    $membro->links()->create(['link' => $link]);
                }
            }
        }

        return redirect()->route("membros.index")
            ->with("success", "Membro atualizado com sucesso.");
    }
    
    public function destroy(Membro $membro): RedirectResponse
    {
        $membro->delete();

        return redirect()->route('membros.index')
                         ->with('success', 'Membro deletado.');
    }
}

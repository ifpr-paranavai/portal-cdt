<?php
// app/Http/Controllers/ProjetoController.php
namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProjetoController extends Controller
{

    public function index(): View
    {
        $projetos = Projeto::paginate(10);
        return view('projetos.index', compact('projetos'));
    }

    public function create(): View
    {
        return view('projetos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'descricao' => 'required|min:5',
        ],[
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.min' => 'O campo descrição deve ter no mínimo 5 caracteres.',
        ]);

        $status = $request->has('status') ? 'concluido' : 'em aberto';

        $projeto = Projeto::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'status' => $status,
        ]);

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto criado com sucesso.');
    }
    
    public function show(Projeto $projeto): View
    {
        return view('projetos.show', compact('projeto'));
    }
    
    public function edit(Projeto $projeto): View
    {
        return view('projetos.edit', compact('projeto'));
    }

    public function update(Request $request, Projeto $projeto): RedirectResponse
    {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'descricao' => 'required|min:5',
        ],[
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.min' => 'O campo descrição deve ter no mínimo 5 caracteres.',
        ]);

        $status = $request->has('status') ? 'concluido' : 'em aberto';

        $projeto->update([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'status' => $status,
        ]);

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto atualizado com sucesso.');
    }

    public function destroy(Projeto $projeto): RedirectResponse
    {
        $projeto->delete();
        return redirect()->route('projetos.index')
            ->with('success', 'Projeto deletado.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Models\Servico;
use Illuminate\Http\Request;
use App\Models\LancamentoServico;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Log;

class LancamentoServicoController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:Visualizar Lançamento', only: ['index', 'show']),
            new Middleware('permission:Criar Lançamento', only: ['create', 'store']),
            new Middleware('permission:Editar Lançamento', only: ['edit', 'update']),
            new Middleware('permission:Deletar Lançamento', only: ['destroy']),
        ];
        
    }
    public function index(Request $request)
    {
        $order = $request->get('order', 'created_at');
        $direction = $request->get('direction', 'desc');

        $lancamentos = LancamentoServico::orderBy($order, $direction)->paginate(10);
        return view('lancamentos.index', compact('lancamentos', 'order', 'direction'));
    }

    public function create()
    {
        $projetos = Projeto::all();
        $servicos = Servico::all();
        return view('lancamentos.create', compact('projetos', 'servicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'projeto_id' => 'required|integer',
            'servico_id' => 'required|integer',
            'data_inicio' => 'required|date',
            'data_final' => 'required|date|after_or_equal:data_inicio',
            'horas_trabalhadas' => 'required|numeric',
            'link' => 'required|url|regex:/^https?:\/\/(www\.)?github\.com\/.+$/',
        ],[
            'projeto_id.required' => 'O campo projeto é obrigatório.',
            'servico_id.required' => 'O campo serviço é obrigatório.',
            'data_inicio.required' => 'O campo data de início é obrigatório.',
            'data_final.required' => 'O campo data final é obrigatório.',
            'data_final.after_or_equal' => 'A data final deve ser igual ou posterior à data de início.',
            'horas_trabalhadas.required' => 'O campo horas trabalhadas é obrigatório.',
            'horas_trabalhadas.numeric' => 'O campo horas trabalhadas deve ser um número.',
            'link.url' => 'O campo link deve ser uma URL válida.',
            'link.regex' => 'O campo link deve ser um link de um commit do GitHub.',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id(); // Adiciona o user_id do usuário autenticado

        Log::info('Dados recebidos para criação de lançamento:', $data);

        LancamentoServico::create($data);

        return redirect()->route('lancamentos.index')
                         ->with('success', 'Lançamento criado com sucesso.');
    }

    public function show(LancamentoServico $lancamento)
    {
        return view('lancamentos.show', compact('lancamento'));
    }

    public function edit(LancamentoServico $lancamento)
    {
        $projetos = Projeto::all();
        $servicos = Servico::all();
        return view('lancamentos.edit', compact('lancamento', 'projetos', 'servicos'));
    }

    public function update(Request $request, LancamentoServico $lancamento)
    {
        $request->validate([
            'projeto_id' => 'required|integer',
            'servico_id' => 'required|integer',
            'data_inicio' => 'required|date',
            'data_final' => 'required|date|after_or_equal:data_inicio',
            'horas_trabalhadas' => 'required|numeric',
            'link' => 'required|url|regex:/^https?:\/\/(www\.)?github\.com\/.+$/',
        ],[
            'projeto_id.required' => 'O campo projeto é obrigatório.',
            'servico_id.required' => 'O campo serviço é obrigatório.',
            'data_inicio.required' => 'O campo data de início é obrigatório.',
            'data_final.required' => 'O campo data final é obrigatório.',
            'data_final.after_or_equal' => 'A data final deve ser igual ou posterior à data de início.',
            'horas_trabalhadas.required' => 'O campo horas trabalhadas é obrigatório.',
            'horas_trabalhadas.numeric' => 'O campo horas trabalhadas deve ser um número.',
            'link.url' => 'O campo link deve ser uma URL válida.',
            'link.regex' => 'O campo link deve ser um link de um commit do GitHub.',
        ]);

        $lancamento->update($request->all());

        return redirect()->route('lancamentos.index')
                         ->with('success', 'Lançamento atualizado com sucesso.');
    }

    public function destroy(LancamentoServico $lancamento)
    {
        $lancamento->delete();

        return redirect()->route('lancamentos.index')
                         ->with('success', 'Lançamento deletado com sucesso.');
    }
    public function generateCertificates(Request $request)
    {
        $lancamentoIds = $request->input('lancamentos', []);
        $certificadosData = [];
        $lancamentosGroupedByUser = [];
    
        // Agrupar lançamentos por user_id
        foreach ($lancamentoIds as $id) {
            $lancamento = LancamentoServico::find($id);
            if ($lancamento) {
                $userId = $lancamento->user_id;
                if (!isset($lancamentosGroupedByUser[$userId])) {
                    $lancamentosGroupedByUser[$userId] = [
                        'user_id' => $userId,
                        'horas' => 0,
                        'descricao' => '',
                        'data' => now()->format('Y-m-d'),
                        'servico_id' => $lancamento->servico_id
                    ];
                }
                $lancamentosGroupedByUser[$userId]['horas'] += $lancamento->horas_trabalhadas;
                $lancamentosGroupedByUser[$userId]['descricao'] .= $lancamento->servico->descricao . ', ';
            }
        }
    
        // Preparar dados para certificados
        foreach ($lancamentosGroupedByUser as $data) {
            // Remover a última vírgula e espaço da descrição
            $data['descricao'] = rtrim($data['descricao'], ', ');
            $certificadosData[] = $data;
        }
    
        return redirect()->route('certificados.create', ['data' => json_encode($certificadosData)]);
    }
}
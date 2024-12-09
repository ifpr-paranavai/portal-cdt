
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="col-4">Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @forelse($servicos as $servico)
            <tr>
                <td>{{ $servico->descricao ?? 'Sem descrição' }}</td>
                <td>
                    <div class="dropdown text-center"></div>
                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-cog"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                @can('Editar Serviço')
                                <a class="dropdown-item" href="{{ route('servicos.edit', $servico->id) }}"><i class="fa-solid fa-pen-to-square"></i> Editar</a></li>
                                @endcan
                            <li>
                                <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    @can('Deletar Serviço')
                                    <button type="submit" class="dropdown-item btn-delete"
                                        data-url="{{ route('servicos.destroy', $servico->id) }}"
                                        data-descricao="{{ $servico->descricao }}">
                                        <i class="fa-solid fa-trash"></i> Deletar
                                    </button>
                                    @endcan
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2" class="text-center">Não há serviços 😢</td>
            </tr>
        @endforelse
    </tbody>
</table>

{!! $servicos->withQueryString()->links('pagination::bootstrap-5') !!}
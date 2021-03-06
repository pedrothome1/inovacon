@extends('dashboard.layout')

@section('title', 'Detalhes da Aula')

@section('content')
    <div>
        <h4 class="font-weight-600 text-gray-dark mb-3">Detalhes da Aula</h4>

        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between mb-4">
            <a href="{{ route('dashboard.courses.lessons.index', $team) }}"
               class="btn btn-outline-primary align-self-start mb-3 mb-sm-0">Voltar</a>

            <div class="d-flex align-self-start align-items-center">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown">
                        <i class="fas fa-cog"></i> Opções
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('dashboard.courses.lessons.edit', [$team, $lesson]) }}">
                            <i class="fas fa-pencil-alt fa-fw"></i> Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="card">
            <div class="card-body">
                @include('dashboard.lessons._details')
            </div>
        </div>
    </div>
@endsection

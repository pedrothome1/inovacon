@extends('dashboard.layout')

@section('title', 'Cadastrar Colaborador')

@section('content')
    <div>
        <h3 class="font-weight-bold text-dark">Cadastrar Colaborador</h3>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-5 px-sm-4 pb-sm-2">
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.collaborators.store') }}">
                        @include('dashboard.collaborators._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
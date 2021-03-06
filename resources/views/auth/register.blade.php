@extends('layouts.app')

@section('title', 'Cadastre-se | Inovacon')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-primary">
          <h6 class="font-weight-600 text-white mb-0">
          CADASTRE SEUS DADOS
          </h6>
        </div>
        
        <hr class="mt-0">

        <div class="card-body px-3">
          <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a  class="nav-link {{ ! old('has_cnpj') ? 'active' : '' }}"
                  id="pills-physical-person-tab"
                  data-toggle="pill"
                  href="#pills-physical-person"
                  role="tab"
                  aria-controls="pills-physical-person"
                  aria-selected="true"><i class="fas fa-portrait  mr-1"></i> Pessoa física</a>
            </li>

            <li class="nav-item">
              <a  class="nav-link {{ old('has_cnpj') ? 'active' : '' }}"
                  id="pills-legal-person-tab"
                  data-toggle="pill"
                  href="#pills-legal-person"
                  role="tab"
                  aria-controls="pills-legal-person"
                  aria-selected="false"><i class="fas fa-building  mr-1"></i> Pessoa jurídica</a>
            </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade  {{ ! old('has_cnpj') ? 'show active' : '' }}" id="pills-physical-person" role="tabpanel" aria-labelledby="pills-physical-person-tab">
              @include('auth._physical-person-form')
            </div>

            <div class="tab-pane fade {{ old('has_cnpj') ? 'show active' : '' }}" id="pills-legal-person" role="tabpanel" aria-labelledby="pills-legal-person-tab">
              @include('auth._legal-person-form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
   <script>

        // Cleave js masks
        $('.birth-date').each(function() {
            new Cleave(this, {
                date: true,
                datePattern: ['d', 'm', 'Y']
            });
        });

        $('.phone').each(function() {
            new Cleave(this, {
                delimiters: [' ', '-'],
                blocks: [2, 5, 4],
                numericOnly: true
            });
        });

        $('.cpf').each(function() {
            new Cleave(this, {
                delimiters: ['.', '.', '-'],
                blocks: [3, 3, 3, 2],
                numericOnly: true
            });
        });

        $('.cnpj').each(function() {
            new Cleave('.cnpj', {
                delimiters: ['.', '.', '/', '-'],
                blocks: [2, 3, 3, 4, 2],
                numericOnly: true
            });
        });
        </script>
@endpush
@endsection
@extends('layouts.app')

@section('template_title')
    {{ $fase->name ?? 'Show Fase' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Fase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fases.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $fase->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Representante Legal:</strong>
                            {{ $fase->representante }}
                        </div>
                        <div class="form-group">
                            <strong>Semestre:</strong>
                            {{ $fase->semestre }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $fase->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Documento2:</strong>
                            {{ $fase->documento2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

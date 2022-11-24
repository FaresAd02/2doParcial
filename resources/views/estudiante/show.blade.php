@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Show Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $estudiante->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $estudiante->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $estudiante->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Carrera:</strong>
                            {{ $estudiante->id_carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $estudiante->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civil:</strong>
                            {{ $estudiante->estado_civil }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $estudiante->status }}
                        </div>
                        <div class="form-group">
                            <strong>Id Campus:</strong>
                            {{ $estudiante->id_campus }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pais:</strong>
                            {{ $estudiante->id_pais }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $estudiante->fecha_ingreso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

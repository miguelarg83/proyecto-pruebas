@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-2">
                <legend>Inicio</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inicio" id="si">
                    <label class="form-check-label" for="si">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inicio" id="no" checked>
                    <label class="form-check-label" for="no">
                        No
                    </label>
                </div>
            </div>

            <div class="col-2 offset-2">
                {{-- crea un margen a la izquierda de la columna como si hubiera un div de tres columnas --}}
                <legend>Subscripción</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="suscripcion" id="si">
                    <label class="form-check-label" for="si">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="suscripcion" id="no" checked>
                    <label class="form-check-label" for="no">
                        No
                    </label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 mt-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
</div>

@endsection

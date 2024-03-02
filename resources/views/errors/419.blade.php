@extends('layouts.error')
@section('content')
    <div class="main-wrapper">
        <div class="error-box">
            <h1>419</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-triangle"></i> Error de caducidad</h3>
            <p class="h4 font-weight-normal">La página solicitada no se ha encontrado.</p>
            <a href="{{route('home')}}" class="btn btn-primary">Volver a Inicio</a>
        </div>
    </div>
@endsection

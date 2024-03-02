
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Bienvenido: {{ Session::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Alumnos UTC</h6>
                                <h3>10,055</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Carreras UTC</h6>
                                <h3>13</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/libro-abierto.png" alt="Dashboard Icon" width="50px" height="50px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Edificios UTC</h6>
                                <h3>5+</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Egresados</h6>
                                <h3>+53,030</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/graduado.png" alt="Dashboard Icon" width="50px" height="50px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill fb sm-box">
                    <div class="social-likes">
                        <p>Materia UTC</p>
                        <h6>Arquitecturas de Software</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/desarrollo-movil.png" width="30px" height="30px">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill twitter sm-box">
                    <div class="social-likes">
                        <p>Materia UTC</p>
                        <h6>Bases de Datos</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/db.png" width="30px" height="30px">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill insta sm-box">
                    <div class="social-likes">
                        <p>Materia UTC</p>
                        <h6>Introducción a Electronica</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/circuito-electronico.png" width="30px" height="30px">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill linkedin sm-box">
                    <div class="social-likes">
                        <p>Materia UTC</p>
                        <h6>Logística en Negocios</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/logistica.png" width="30px" height="30px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('utilisateur.layouts.main')
@section('content')
@include('utilisateur.components.header')
@include('utilisateur.components.horizontalBar')

<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('dashboard/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('dashboard/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('dashboard/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('dashboard/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('dashboard/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/themes/semi-dark-layout.css')}}">
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Employé</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Liste</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('user.show', $users->id) }}">{{$users->firstname . ' ' . $users->lastname}}</a>
                                </li>
                                <li class="breadcrumb-item active">Détails
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="offset-3 col-md-6">
            <div class="card">
                <div class="card-body">

                    <div>
                        <div class="row">
                            <div class="col-12 mb-2 d-flex justify-content-between">
                                <div class="mt-1 p-1 border rounded text-center" style="width: fit-content;">
                                    <p class="small">Photo de profile</p>
                                    @if (($users->profile == null))
                                    <img src="{{ asset('assets/employee/avatar.png') }}" class="mx-auto"
                                        height="90" width="100" alt="{{ $users->firstname }}">
                                    @else
                                    <img src="{{ asset('image/' . $users->profile) }}"
                                        class="mx-auto" height="100" width="100" alt="{{ $users->firstname }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <h4>Utilisateur - {{ strtoupper($users->firstname) }}</h4>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <small class="small">Nom</small><br>
                                    <p class="p-1 bg-light border rounded text-italic">{{ $users->firstname }}</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <small class="small">Prénom</small><br>
                                    <p class="p-1 bg-light border rounded text-italic">{{ $users->lastname }}</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <small class="small">Adresse email</small><br>
                                    <p class="p-1 bg-light border rounded text-italic">{{ $users->email }}</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <small class="small">Numéro de téléphone</small><br>
                                    <p class="p-1 bg-light border rounded text-italic">{{$users->phone }}</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <small class="small">Localisation</small><br>
                                    <p class="p-1 bg-light border rounded text-italic">{{$users->localization }}</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection
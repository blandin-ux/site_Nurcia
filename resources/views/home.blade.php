@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Boutton de Vue des Régions
                </div>
                <div class="card-body">
                    <a href="/regions" class="btn btn-outline-success btn-lg">Vue des Régions</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Boutton de Vue des Paniers
                </div>
                <div class="card-body">
                    <a href="/paniers" class="btn btn-outline-primary btn-lg">Vue des Paniers</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Boutton de Vue des Tarifs
                </div>
                <div class="card-body">
                    <a href="/tarifs" class="btn btn-outline-danger btn-lg">Vue des Tarifs</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

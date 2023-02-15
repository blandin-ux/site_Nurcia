@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="/paniers" class="btn btn-danger">retour</a>
        </div>
        <div class="card-body">
            <form action="/paniers/update/save" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$panier->id}}">
                <label for="">Changer la désignation</label>
                <input type="text" class="form-control" value="{{$panier->designation}}" >
                <button class="btn btn-success mt-2">Enregistere</button>
            </form>
        </div>
    </div>
</div>
@endsection

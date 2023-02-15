@extends('layouts.app')
@section('content')

<div class="container mt-3">
    <a href="/home" class="btn btn-danger mb-2">Retour</a>
    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <h3>Liste des Paniers</h3>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                AJOUTER
            </button>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Date Création</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($paniers as $panier)
                    <tr>
                        <td> {{ $panier->designation }} </td>
                        <td> {{ $panier->created_at }} </td>
                        <td> <a href="/paniers/update/{{$panier->id}}" class="btn btn-warning">Modifier</a> </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajout d'un nouveau Panier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/paniers/store" method="post">
            @csrf
            <div class="modal-body">
                <label for="">Désignation</label>
                <input type="text" name="designation" class="form-control" placeholder="Saisir la désignation du panier ici...!!!" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection

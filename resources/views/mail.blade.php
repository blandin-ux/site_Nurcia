@extends('layouts.app')
<div class="container m-5 p-5">
    # Salut {{ $user->name }} !!!

    Votre compte a bien été créé... <br>
    Maintenant allez dans votre boite mail pour confirmer votre inscription, Merci !!!

    <a href="https://mail.google.com" class="btn btn-danger">Ouvrir</a>
    
</div>




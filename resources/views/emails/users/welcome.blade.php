@php
    $user = App\User::orderBy('id','desc')->first();
@endphp

@component('mail::message')
# Introduction

Notification reçu avec succès
{{--
@component('mail::button', ['url' => ''])
Ouvrir
@endcomponent --}}
<a href="{{URL::route('confirm',['token' => $user->token])}}">Confirmer l'ouverture de votre compte</a>

Merci,<br>
...
@endcomponent

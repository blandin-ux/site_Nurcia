
@component('mail::message')

# Salut!!!
<span> Token :  </span>
{{-- @component('mail::button', ['url' => 'http://127.0.0.1:8000/entreprise-confirm']) --}}
<a href="{{URL::route('confirm',['token' => 1])}}">Confirmer l'ouverture de votre compte</a>

@endcomponent

Merci,<br>
...
@endcomponent

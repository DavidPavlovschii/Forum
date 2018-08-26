@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Bienvenu sur {{$title}} ! </h1>
    <p>Ceci est un forum spécial Gopniks, vous y trouverez tous le necessaire pour devenir un parfait petit blyat</p>
    <p>Veuillez vous authentifier :</p>
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Connexion</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">Inscription</a>
    </p>
</div>
@endsection
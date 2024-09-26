@extends('layouts.app')

@section('content')
    <style>
        html, body {
            height: 100%; /* Assure que le corps prend 100% de la hauteur de la fenêtre */
            margin: 0; /* Supprime les marges par défaut */
        }

        body {
            background-image: url('https://i.pinimg.com/originals/3a/e4/64/3ae4645e2a954f62f317eb7e96eb1c9a.jpg');
            background-size: cover; /* L'image couvre toute la zone */
            background-position: center; /* Centre l'image */
            background-repeat: no-repeat; /* Ne répète pas l'image */
            color: white; /* Change la couleur du texte pour plus de lisibilité */
        }

        .content-container {
            background-color: rgba(0, 0, 0, 0.7); /* Fond semi-transparent pour le contenu */
            padding: 20px;
            border-radius: 10px;
            max-width: 600px; /* Limite la largeur du contenu */
            margin: auto; /* Centre le contenu horizontalement */
            margin-top: 100px; /* Espace au-dessus du contenu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ajoute une ombre pour plus de profondeur */
        }
    </style>

    <div class="content-container">
        <h1>{{ $diamond->name }}</h1>
        <p>Price: {{ $diamond->price }}$</p>
        <p>Description: {{ $diamond->desc }}</p>
        <p>Purchase Date: {{ $diamond->purchase_date }}</p>

        <a href="{{ route('diamonds.edit', $diamond->id) }}" class="btn btn-warning">Edit</a>
    </div>
@endsection

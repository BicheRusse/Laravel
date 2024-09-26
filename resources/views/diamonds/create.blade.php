@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url('https://i.imgur.com/kNIkSAi.jpeg');
            background-size: cover; /* Couvre toute la zone */
            background-position: center; /* Centre l'image */
            background-repeat: no-repeat; /* Ne répète pas l'image */
            height: 100vh; /* Prend toute la hauteur de la fenêtre */
            color: white; /* Change la couleur du texte pour plus de lisibilité */
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.7); /* Fond semi-transparent pour le formulaire */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px; /* Limite la largeur du formulaire */
            margin: auto; /* Centre le formulaire horizontalement */
            margin-top: 100px; /* Espace au-dessus du formulaire */
        }
    </style>

    <div class="form-container">
        <h1>Create Diamond</h1>
        <form action="{{ route('diamonds.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="price" placeholder="Price" required>
            <input type="text" name="desc" placeholder="Description" required>
            <input type="date" name="purchase_date" required>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            background-image: url('https://i.pinimg.com/originals/3a/e4/64/3ae4645e2a954f62f317eb7e96eb1c9a.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
        }

        .content-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            margin-top: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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

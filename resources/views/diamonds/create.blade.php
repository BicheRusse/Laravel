@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url('https://i.imgur.com/kNIkSAi.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: cyan;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
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

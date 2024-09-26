@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url('https://images4.alphacoders.com/964/964374.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: black;
        }

        .content {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
    </style>

    <h1>Edit Diamond</h1>
        <form action="{{ route('diamonds.update', $diamond->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $diamond->name }}" required>
            <input type="number" name="price" value="{{ $diamond->price }}" required>
            <input type="text" name="desc" value="{{ $diamond->desc }}" required>
            <input type="date" name="purchase_date" value="{{ $diamond->purchase_date }}" required>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection

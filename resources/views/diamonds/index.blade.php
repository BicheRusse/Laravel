<!-- resources/views/diamonds/index.blade.php -->
@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url('https://images6.alphacoders.com/962/962676.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: white;
        }

        .content {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
    </style>

    <div class="content">
        <h1>List of Diamonds</h1>
        <a href="{{ route('diamonds.create') }}" class="btn btn-primary">Add New Diamond</a>
        <ul>
            @foreach ($diamonds as $diamond)
                <li>
                    {{ $diamond->name }} - {{ $diamond->price }}$
                    <a href="{{ route('diamonds.show', $diamond->id) }}">View</a>
                    <a href="{{ route('diamonds.edit', $diamond->id) }}">Edit</a>
                    <form action="{{ route('diamonds.destroy', $diamond->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

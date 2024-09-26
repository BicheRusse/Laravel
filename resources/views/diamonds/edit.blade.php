@extends('layouts.app')

@section('content')
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
@endsection

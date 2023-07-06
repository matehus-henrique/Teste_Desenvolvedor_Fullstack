@extends('layouts.basico')
@section('conteudo')

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="description">Description:</label>
    <textarea name="description" required></textarea>
    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" required>
    <label for="brand">Brand:</label>
    <select name="brand" required>
        @foreach ($brands as $brand)
            <option value="{{ $brand }}">{{ $brand }}</option>
        @endforeach
    </select>
    <button type="submit">Create Product</button>
</form>

@endsection

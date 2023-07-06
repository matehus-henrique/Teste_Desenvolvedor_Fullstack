@extends('layouts.basico')
@section('conteudo')

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <label for="description">Description:</label>
    <textarea name="description" required>{{ $product->description }}</textarea>
    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
    <label for="brand">Brand:</label>
    <select name="brand" required>
        @foreach ($brands as $brand)
            <option value="{{ $brand }}" {{ $product->brand == $brand ? 'selected' : '' }}>{{ $brand }}</option>
        @endforeach
    </select>
    <button type="submit">Update Product</button>
</form>

@endsection

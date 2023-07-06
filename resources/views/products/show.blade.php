
@extends('layouts.basico')

@section('conteudo')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div>
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Brand: {{ $product->brand }}</p>
    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Delete</button>
    </form>
  </div>
</div>
@endsection
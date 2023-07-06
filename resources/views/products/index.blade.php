@extends('layouts.basico')

@section('conteudo')

<div class="container">
  <div class="row">
    @foreach ($products as $product)
      <div class="col">
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Brand: {{ $product->brand }}</p>
        <a href="{{ route('products.show', $product) }}">View Details</a>
        <a href="{{ route('products.edit', $product) }}">Edit</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
      </div>
      @if ($loop->iteration % 3 == 0)
        </div><div class="row"> 
      @endif
    @endforeach
  </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Funções</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
                <tr>
                  <th scope="row">{{ $product->id }}</th>
                  <td>{{ $product->name }}</td>
                  <td>
                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-primary">Visualizar</a>
                    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('products.destroy', ['product' => $product->id]) }}" class="btn btn-danger">Apagar</a>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection

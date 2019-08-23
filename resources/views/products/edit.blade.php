@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <form action="{{ route('products.update', ['id' => $product->id]) }}" class="form-horizontal" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group">
                    <label for="">Nome</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name', $product->name) }}"/>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="">Quantidade</label>
                    <input class="form-control" type="number" name="amount" value="{{ old('amount', $product->amount) }}"/>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Atualizar produto</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

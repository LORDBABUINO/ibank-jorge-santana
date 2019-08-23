@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <form action="{{ route('products.store') }}" class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label for="">Nome</label>
                    <input class="form-control" type="text" name="name"/>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="">Quantidade</label>
                    <input class="form-control" type="number" name="amount"/>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Cadastrar produto</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

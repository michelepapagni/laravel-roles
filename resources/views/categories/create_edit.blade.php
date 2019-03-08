@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $h1 }}</h1>
                <form class="form-group" action="{{ $action }}" method="post">
                    @method($method)
                    @csrf

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" placeholder="Inserisci il nome" class="form-control" value="{{ (!empty($category)) ? $category->name : null }}">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Salva">
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

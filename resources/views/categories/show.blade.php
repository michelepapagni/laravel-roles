@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Categoria: {{ $category->name }}</h1>

                <img src="{{ asset('storage/' . $category->poster) }}" alt="">

                <ul>
                    <li>Id: {{ $category->id }}</li>
                    <li>Name: {{ $category->name }}</li>
                    <li>Slug: {{ $category->slug }}</li>
                    <li>Creato il: {{ $category->created_at }}</li>
                    <li>Aggiornato il: {{ $category->updated_at }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection

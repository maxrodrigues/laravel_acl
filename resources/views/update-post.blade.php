@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-primary mb-3" href="{{ route('home') }}">Voltar</a>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h1 class="">{{ $post->title }}</h1>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-justify px-2">{{ $post->description }}</p>
                    <br>
                    <p class="mx-2">Autor: <b>{{ $post->User->name }}</b></p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

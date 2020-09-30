@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @forelse ($posts as $post)
                        <div class="row">
                            <h1 class="text-uppercase">{{ $post->title }}</h1>
                            <p class="text-justify px-2">{{ $post->description }}</p>
                            <br>
                            <p class="mx-2">Autor: <b>{{ $post->User->name }}</b></p>
                            @can('updatePost', $post)
                                <a href="{{ route('post.update', ['id' => $post->id]) }}">Editar</a>
                            @endcan
                        </div>
                        <hr>
                    @empty
                        <h1>Sem posts cadastrados</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

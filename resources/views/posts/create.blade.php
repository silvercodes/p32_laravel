@extends('layouts.app')

@section('title', 'Создать пост')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Создать пост</h1>
                <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Назад</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf


            </form>
        </div>
    </div>


@endsection




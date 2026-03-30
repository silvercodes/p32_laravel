@extends('layouts.app')

@php
    $pageTitle = 'Все посты';
@endphp

@section('title', $pageTitle)

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>{{ $pageTitle }}</h1>
                <a href="#" class="btn btn-primary">Создать пост</a>
            </div>
        </div>
    </div>



@endsection

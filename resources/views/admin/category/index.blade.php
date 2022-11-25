@extends('admin.app')
@section('content')
@include('admin.layout.header')

<div class="container">
    <div class="row mt-4">

        @include('admin.layout.navi')

        <div class="col-9 mt-4">
            <div class="row">
                <div class="col-4">
                    <h2>Категории</h2>
                </div>
                <div class="col-8" style="text-align: right;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('category.create') }}" type="button" class="btn btn-success">Добавить</a>
                    </div>
                </div>
            </div>

            <div class="row">
                @if (session('status'))
                <div class="alert alert-{{ session('color') }} alert-dismissible mt-2" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>

            @foreach ($categories as $category)
            <div class="card mb-4 mt-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset( 'storage/'.$category->img)}}" alt="img: {{ $category -> name}}" width="300" height="300">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="min-height: 200px;">
                            <a href="{{ route('category.show', ['category' => $category->id]) }}" style="text-decoration:none;">
                                <h4 class="card-title">{{ $category -> name}}</h4>
                            </a>
                            <p class="card-text" style="min-height: 150px;">{{ $category -> description}}</p>
                            <p class="card-text"><small class="text-muted">Создание: {{ $category -> created_at }}</small></p>
                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post">
                                <a href="{{ route('category.edit', ['category' => $category->id]) }}" type="button" class="btn btn-warning">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" type="button" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
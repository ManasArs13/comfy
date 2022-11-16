@extends('admin.app')

@section('content')

<div class="container-fluid">
    <div class='row'>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="col-2">
                    <a class="navbar-brand" href="{{ route('admin_home')}}">
                        <img src="{{asset('img/logo-dark.png')}}" width="200" alt="" loading="lazy">
                    </a>
                </div>
                <div class="col-6">
                    <h3 style="color:white;text-align: right;">Здравстуйте, администратор</h3>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row mt-4">

        <div class="col-3">
            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color:black">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.index') }}" style="color:black">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:black">Продукты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:black">Настройки</a>
                </li>
            </ul>
        </div>

        <div class="col-9 mt-4">
            <div class="row">
                <div class="col-4">
                    <h2>Продукты</h2>
                </div>
                <div class="col-8" style="text-align: right;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('category.create') }}" type="button" class="btn btn-success">Добавить</a>
                    </div>
                </div>
            </div>

            @foreach ($products as $product)
            
            <div class="card mb-4 mt-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="min-height: 200px;">
                        <a href="{{ route('product.show', ['product' => $product->id]) }}" style="text-decoration:none;">
                            <h4 class="card-title">{{ $product -> name}}</h4>
                        </a>
                            <p class="card-text" style="min-height: 150px;">{{ $product -> description}}</p>
                            <h5>Цена: {{ $product -> price }} р.</h5>
                            <p class="card-text"><small class="text-muted">Создание: {{$product -> created_at }}</small></p>
                        
                                <a type="button" class="btn btn-warning">Редактировать</a>
                                <a type="button" class="btn btn-danger">Удалить</a>

                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach

        </div>
    </div>
</div>

@endsection
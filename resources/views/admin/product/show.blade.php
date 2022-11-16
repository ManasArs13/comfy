@extends('admin.app')

@section('content')

<div class="container-fluid">
    <div class='row'>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="col-2">
                    <a class="navbar-brand" href="#">
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
                    <a class="nav-link" href="{{ route('product.index') }}" style="color:black">Продукты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:black">Настройки</a>
                </li>
            </ul>
        </div>

        <div class="col-9 mt-4">

            <div class="row mb-4">
                <div class="col-10">
                    <h2>{{ $product -> name}}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mt-3" style="border: none;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset( 'storage/' . $product-> avatar)}}" alt="img: {{ $product -> avatar}}" width="300" height="300">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="min-height: 200px;">

                                    <p class="card-text" style="min-height: 150px;">{{ $product -> description}}</p>
                                    <h5>Цена: {{ $product -> price }} р.</h5>

                                    @if ($product->img1)
                                    <img src="{{asset( 'storage/'.$product->img1)}}" alt="{{ $product->img1 }}" width="100" height="100">
                                    @endif
                                    
                                    @if ($product->img2)
                                    <img src="{{asset( 'storage/'.$product->img2)}}" alt="{{ $product->img2 }}" width="100" height="100">
                                    @endif

                                    @if ($product->img1)
                                    <img src="{{asset( 'storage/'.$product->img3)}}" alt="{{ $product->img3 }}" width="100" height="100">
                                    @endif

                                    <p class="card-text mt-5">Категория: {{ $category->name }}</p>
                                    <p class="card-text"><small class="text-muted">Создание: {{ $product -> created_at }}</small></p>

                                    <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="post">
                                    <a href="{{ route('product.edit', ['product' => $product->id]) }}" type="button" class="btn btn-warning">Редактировать</a>

                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" type="button" class="btn btn-danger" value="Удалить">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

           

        </div>
    </div>
</div>

@endsection
@extends('admin.app')

@section('content')

<div class="container-fluid">
    <div class='row b'>
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
                    <a class="nav-link active" aria-current="page" href="{{ route('admin_home') }}" style="color:black">Главная</a>
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
            <h2>Главная</h2>



        </div>
    </div>
</div>

@endsection
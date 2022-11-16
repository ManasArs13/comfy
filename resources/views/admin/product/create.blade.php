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

            <div class="row mb-4">
                <div class="col-10 offset-2">
                    <h2>СОЗДАТЬ КАТЕГОРИЮ</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                <form action="{{ route('category.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf

                <div class="row mb-3">
                  <label for="inputName" class="col-sm-2 col-form-label">Название</label>
                  <div class="col-sm-10">
                    <input type="text" id="inputName" class="form-control" name="name" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
                  <div class="col-sm-10">
                    <input style="min-height:150px" type="text" class="form-control" name="description">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputDescription" class="col-sm-2 col-form-label">Изображение</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="img">
                  </div>
                </div>

                <div class="row mb-3">
                    <div class="col-10 offset-2">
                        <button   style="width:100%;" type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                
                </div>

                </form>
                </div>


            </div>

        </div>
    </div>
</div>

@endsection
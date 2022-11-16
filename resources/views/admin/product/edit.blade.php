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
                    <a class="nav-link" href="{{ route('product.index') }}" style="color:black">Продукты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:black">Настройки</a>
                </li>
            </ul>
        </div>

        <div class="col-9 mt-4">

            <div class="row mb-4">
                <div class="col-10 offset-2">
                    <h2>РЕДАКТИРОВАТЬ КАТЕГОРИЮ</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                <form action="{{ route('product.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf

                <div class="row mb-3">
                  <label for="inputName" class="col-sm-2 col-form-label">Название</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $product->name }}" id="inputName" class="form-control" name="name" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
                  <div class="col-sm-10">
                    <input style="min-height:150px" value="{{ $product->description }}" type="text" class="form-control" name="description">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDescription" class="col-sm-2 col-form-label">Цена</label>
                  <div class="col-sm-10">
                    <input value="{{ $product->price }}" type="text" class="form-control" name="price">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDescription" class="col-sm-2 col-form-label">Категория</label>
                  <div class="col-sm-10">
                  <select name="category_id" class="form-select" aria-label="Default select example">
                        <option selected>Выберите...</option>
                        @foreach ($categories as $category)
                        <option value='{{ $category->id }}'>{{ $category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputDescription" class="col-sm-2 col-form-label">Аватар</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="avatar">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputDescription" class="col-sm-2 col-form-label">Изображение 1</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="img1">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputDescription" class="col-sm-2 col-form-label">Изображение 2</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="img2">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputDescription" class="col-sm-2 col-form-label">Изображение 3</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="img3">
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
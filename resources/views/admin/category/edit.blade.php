@extends('admin.app')
@section('content')
@include('admin.layout.header')

<div class="container">
    <div class="row mt-4">
        @include('admin.layout.navi')
        <div class="col-9 mt-4">
            <div class="row mb-4">
                <div class="col-10 offset-2">
                    <h2>РЕДАКТИРОВАТЬ КАТЕГОРИЮ</h2>
                </div>
            </div>

            <div class="row">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="{{ route('category.update', ['category' => $category->id] ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-2 col-form-label">Название</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $category -> name }}" id="inputName" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
                            <div class="col-sm-10">
                                <input style="min-height:150px" type="text" value="{{ $category -> description }}" class="form-control" name="description">
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
                                <button style="width:100%;" type="submit" class="btn btn-warning">Обновить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
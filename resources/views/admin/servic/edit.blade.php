@extends('admin.app')

@section('content')

@include('admin.layout.header')

<div class="container">
  <div class="row mt-4">

    @include('admin.layout.navi')

    <div class="col-9 mt-4">

      <div class="row mb-2">
        <div class="col-10 offset-2">
          <h2>Изменить настройки</h2>
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

        <form action="{{ route('servic.update', ['servic' => 1]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
              <label for="inputName" class="col-sm-2 col-form-label">Адрес</label>
              <div class="col-sm-10">
                <input type="text" value="{{ $servic->adres }}" id="inputName" class="form-control" name="adres" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputName" class="col-sm-2 col-form-label">Номер</label>
              <div class="col-sm-10">
                <input type="text" value="{{ $servic->phone }}" id="inputName" class="form-control" name="phone" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDescription" class="col-sm-2 col-form-label">Баннер 1</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="img1">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDescription" class="col-sm-2 col-form-label">Баннер 2</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="img2">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDescription" class="col-sm-2 col-form-label">Баннер 3</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="img3">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-10 offset-2">
                <button style="width:100%;" type="submit" class="btn btn-success">Сохранить</button>
              </div>

            </div>


        </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('admin.app')

@section('content')

@include('admin.layout.header')

<div class="container">
  <div class="row mt-4">

    @include('admin.layout.navi')

    <div class="col-9 mt-4">

      <div class="row mb-2">
        <div class="col-10 offset-2">
          <h2>Настройки</h2>
        </div>
      </div>

      <!-- <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </div> -->




      <div class="row">
        <div class="col-12">

          <div class="card mb-4 mt-3">
            <div class="row g-0">

              <div class="col-md-12">
                <div class="card-body" style="min-height: 250px;">
                  <h5 class="card-title mt-3">адрес: {{ $servic -> adres}}</h4>
                    <h5 class="card-title mt-3">телефон: {{ $servic -> phone}}</h4>


                      <div class="row mt-3">
                        @if ($servic->img1)
                        <div class="col-12 m-2">
                          <img src="{{asset( 'storage/'.$servic->img1)}}" alt="{{ $servic->img1 }}" style="width:100%;">
                        </div>
                        @endif

                        @if ($servic->img2)
                        <div class="col-12 m-2">
                          <img src="{{asset( 'storage/'.$servic->img2)}}" alt="{{ $servic->img2 }}" style="width:100%;">
                        </div>
                        @endif

                        @if ($servic->img1)
                        <div class="col-12 m-2">
                          <img src="{{asset( 'storage/'.$servic->img3)}}" alt="{{ $servic->img3 }}" style="width:100%;">
                        </div>
                        @endif
                      </div>

                      <div class="row mt-3">
                        <div class="col-3">
                          <a href="{{ route('servic.edit', ['servic' => 1]) }}" type="button" class="btn btn-warning">Редактировать</a>
                        </div>
                      </div>

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
@extends('admin.app')

@section('content')

@include('admin.layout.header')

<div class="container">
    <div class="row mt-4">

        @include('admin.layout.navi')



        <div class="col-9 mt-4">
            <h2 class="mb-4 offset-4">Заказы</h2>

            <div class="row">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible mt-2" role="alert">
          {{ session('status') }}
        </div>
        @endif
      </div>
            @if (count($orders) > 0 )
            <h4>Открытые</h4>
            @endif

            @foreach ($orders as $order)

            <div class="card mb-4 mt-4">
                <div class="row g-0">
                    <div class="col-md-3 p-4">
                        <img src="{{asset( 'storage/'.$order->product->avatar)}}" alt="img: {{ $order->product->avatar }}" width="150" height="150">
                    </div>
                    <div class="col-md-9">

                        <div class="card-body">
                            <a href="{{ route('product.show', ['product' => $order->product->id]) }}" style="text-decoration:none;">
                                <h5 class="card-title">Товар: {{ $order -> product -> name}}</h5>
                            </a>
                            <p class="card-text mb-1">Цена: {{ $order -> product -> name }}</p>
                            <p class="card-text mb-1">Заказчик: {{ $order -> name}}</p>
                            <p class="card-text mb-1">Номер: {{ $order -> phone}}</p>

                            @if ( $order -> adres)
                            <p class="card-text mb-2">Адрес: {{ $order -> adres}}</p>
                            @endif

                            <p class="card-text"><small class="text-muted">Создание: {{ $order -> created_at }}</small></p>


                            </form>

                        </div>

                    </div>


                </div>


                <div class="btn-group m-1" role="group" aria-label="Basic example">
                <a href="{{ route('complete', ['id' => $order->id]) }}" type="button" class="btn btn-success">выполнено!</a>
                </div>
            </div>

            @endforeach



            @if ( count($completed) > 0)
            <h4>Завершенные</h4>
            @endif

            @foreach ($completed as $complete)

            <div class="card mb-4 mt-4">
                <div class="row g-0">
                    <div class="col-md-3 p-4">
                        <img src="{{asset( 'storage/'.$complete->product->avatar)}}" alt="img: {{ $complete->product->avatar }}" width="150" height="150">
                    </div>
                    <div class="col-md-9">

                        <div class="card-body">
                            <a href="{{ route('product.show', ['product' => $complete->product->id]) }}" style="text-decoration:none;">
                                <h5 class="card-title">Товар: {{ $complete -> product -> name}}</h5>
                            </a>
                            <p class="card-text mb-1">Цена: {{ $complete -> product -> name }}</p>
                            <p class="card-text mb-1">Заказчик: {{ $complete -> name}}</p>
                            <p class="card-text mb-1">Номер: {{ $complete -> phone}}</p>

                            @if ( $complete -> adres)
                            <p class="card-text mb-2">Адрес: {{ $complete -> adres}}</p>
                            @endif

                            <p class="card-text"><small class="text-muted">Создание: {{ $complete -> created_at }}</small></p>


                            </form>

                        </div>

                    </div>


                </div>
                <div class="btn-group m-1" role="group" aria-label="Basic example">
                <a href="{{ route('return', ['id' => $complete->id]) }}" type="button" class="btn btn-warning">отменить</a>
                </div>
            </div>

            @endforeach















        </div>
    </div>
</div>

@endsection
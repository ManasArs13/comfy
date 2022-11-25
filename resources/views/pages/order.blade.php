@extends('app')

@section('content')

@include('layouts.top')
@include('layouts.header')
@include('layouts.navs')


@include('components.error')



<div class="container mb-5">
    <div class="py-4 text-center">
        <h1 class="h2">Форма для заявки</h1>
        <p class="lead">Оставьте свои данные и наш специалист свяжется с вами в ближайшее время для уточнения информации.</p>
    </div>

    <div class="row g-3 mt-3">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Выбранный продукт</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-2">{{ $product -> name }}</h6>
                        <small class="text-muted">{{ $product -> description}}</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <img src="{{asset( 'storage/'.$product->avatar)}}" class="w-100" alt="{{ $product -> name }}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Цена</span>
                    <strong>{{ $product->price}} р.</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3"> <span class="text-muted">Ваши данные</span></h4>

            <form class="needs-validation" action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    <div class="col-12">
                        <label for="firstName" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name" placeholder="Как к вам обращаться?" required>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Пожалуйста, введите действующий email." required>
                    </div>
                    <div class="col-12">
                        <label for="address2" class="form-label">Номер телефона</label>
                        <input type="text" class="form-control" name="phone" placeholder="Ваш номер телефона для связи" required>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Адрес <span class="text-muted">(необязательно)</span></label>
                        <input type="text" class="form-control" name="adres" placeholder="Пожалуйста, введите свой адрес.">
                    </div>
                </div>

                <input type="number" style="display:none;" name="product_id" value="{{ $product->id }}" required>

                <div class="col-12 mt-5">
                    <button class="btn btn-warning btn-block btn-lg w-100" type="submit">Заказать обратный звонок</button>
                </div>

            </form>
        </div>
    </div>

</div>

@include('layouts.footer')

@endsection
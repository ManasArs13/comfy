@extends('admin.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <form class="form-signin my-5" method="POST" action="{{ route('login') }}">
            @csrf
                <a class="navbar-brand " href="{{ route('home') }}" style="font-size:2.3rem;">
                    <img src="{{asset('img/logo.png')}}" width="200" class="d-inline-block align-top mt-3" alt="logo" loading="lazy">
                </a>
                <h3 class="my-5 font-weight-normal">Пожалуйста войдите</h3>
                <label for="inputEmail" class="my-2">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus="">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <label for="inputPassword" class="my-2">Пароль</label>
                <input type="password" name="password" class="form-control" placeholder="Пароль" required="">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <div class="checkbox my-3">
                    <label>
                        <input name="remember" type="checkbox" value="remember-me"> Запомнить меня
                    </label>
                </div>
                <button class="btn btn-warning w-50 btn-block" type="submit">Войти</button>
                <p class="my-5 text-muted">© 2017-2020</p>
            </form>
        </div>
    </div>
</div>
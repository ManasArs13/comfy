@extends('app')

@section('content')

    @include('layouts.top')
    @include('layouts.header')

    @include('components.status')

    @include('layouts.banner')
    @include('layouts.categories')
    @include('layouts.about')
    @include('layouts.footer')
    
@endsection
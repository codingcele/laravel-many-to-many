@extends('layouts.main-layout')
@section('content')
    <div class="container">
        <h1>
            PRODUCTS:
        </h1>
        <a href="{{ route('product.create') }}">ADD NEW PRODUCT</a>
        @foreach ($products as $product)
            @include('components.product')
        @endforeach

    </div>
@endsection
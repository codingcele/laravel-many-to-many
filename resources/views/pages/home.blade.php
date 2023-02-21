@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>
            PRODUCTS:
        </h1>
        <a href="{{ route('product.create') }}">ADD NEW PRODUCT</a>
        @foreach ($categories as $category)
            <h4>
                {{ $category -> name }}
            </h4>
            <ul>
                @foreach ($category -> products as $product)
                    @include('components.product')
                @endforeach
            </ul>
        @endforeach

    </div>
@endsection
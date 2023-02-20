@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>
            PRODUCTS
        </h1>
        <a href="{{ route('product.create') }}">ADD NEW PRODUCT</a>
        @foreach ($categories as $category)
            <h3>
                {{ $category -> name }}
            </h3>
            <ul>
                @foreach ($category -> products as $product)
                    <li>
                        {{ $product -> code }} - {{ $product -> name }} <br>
                        {{ $product -> typology -> name }} <br>
                        DIGITAL: {{ $product -> typology -> digital ? "Yes" : "No" }}
                    </li>
                @endforeach
            </ul>
        @endforeach

    </div>
@endsection
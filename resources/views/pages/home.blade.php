@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>
            PRODUCTS
        </h1>
            @foreach ($categories as $category)
                <h3>
                    {{ $category -> name }}
                </h3>
                <ul>
                    @foreach ($category -> products as $product)
                        <li>
                            {{ $product -> code }} - {{ $product -> name }}
                        </li>
                    @endforeach
                </ul>
            @endforeach

    </div>
@endsection
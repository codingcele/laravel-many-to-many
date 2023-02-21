@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>MODIFY PRODUCT: {{ $product -> code }}</h1>
        <form action="{{ route('product.update', $product) }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $product -> name }}">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $product -> description }}">
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" value="{{ $product -> price }}">
            <br>
            <label for="weight">Weight</label>
            <input type="number" name="weight" value="{{ $product -> weight }}">
            <br>
            <label for="typology">Typology</label>
            <select name="typology_id">
                @foreach ($typologies as $typology)
                    <option value="{{ $typology -> id }}"
                        @if ($product -> typology_id == $typology -> id)
                            selected
                        @endif>{{ $typology -> name }}</option>    
                @endforeach
            </select>
            <br>
            <h3>Categories</h3>
            <div class="d-flex justify-content-between flex-wrap">
                @foreach ($categories as $category)
                    <div class="d-flex">
                        <input class="me-2" type="checkbox" name="categories[]" value="{{ $category -> id }}"
                            @foreach ($product -> categories as $productCategory)
                                @if ($productCategory -> id == $category -> id)
                                    checked
                                @endif
                            @endforeach>
                        <label class="me-3" for="categories">{{ $category -> name }}</label>
                    </div>         
                @endforeach
            </div>        
            <input type="submit" value="UPDATE PRODUCT">
        </form> 
    </div>
@endsection
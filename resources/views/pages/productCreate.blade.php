@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>ADD NEW PRODUCT</h1>
    </div>
    <div class="container">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description">
            <br>
            <label for="price">Price</label>
            <input type="number" name="price">
            <br>
            <label for="weight">Weight</label>
            <input type="number" name="weight">
            <br>
            <label for="typology">Typology</label>
            <select name="typology_id">
                @foreach ($typologies as $typology)
                    <option value="{{ $typology -> id }}">{{ $typology -> name }}</option>    
                @endforeach
            </select>
            <br>
            <h3>Categories</h3>
            <div class="d-flex justify-content-between flex-wrap">
                @foreach ($categories as $category)
                    <div class="d-flex">
                        <input class="me-2" type="checkbox" name="categories[]" value="{{ $category -> id }}">
                        <label class="me-3" for="categories">{{ $category -> name }}</label>
                    </div>         
                @endforeach
            </div>        
            <input type="submit" value="CREATE NEW PRODUCT">
        </form>
    </div>
    
@endsection
@extends('layouts.main')

@section('main-content')
    <section>
        <div class="container">
            <h1>{{ $product['title'] }}</h1>
            <div>{{ $product['price'] }}</div>
            <p> {{ $product['description'] }} </p>
        </div>
    </section>
@endsection

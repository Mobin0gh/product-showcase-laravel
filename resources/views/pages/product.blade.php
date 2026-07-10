@extends('layouts.layout')

@section('content')

    <div class="product-container">

        <div class="product-image">

            <img
                src="{{ $product->image_url }}"
                alt="{{ $product->title }}"
            >

        </div>

        <div class="product-info">

        <span class="category">
            {{ $product->category->name }}
        </span>

            <h1>{{ $product->title }}</h1>

            <p>
                {{ $product->description }}
            </p>

            <a href="{{ route('home') }}" class="back-btn">
                بازگشت
            </a>

        </div>

    </div>

@endsection

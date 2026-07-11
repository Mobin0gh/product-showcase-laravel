@extends('layouts.layout')

@section('page-title','home')

@section('content')
    <form action="{{ route('home') }}" method="GET" class="search-form">

        <input
            type="text"
            name="search"
            placeholder="جستجوی محصول..."
            value="{{ request('search') }}"
        >

        <select name="category">

            <option value="">همه دسته‌بندی‌ها</option>

            @foreach($categories as $category)

                <option
                    value="{{ $category->id }}"
                    @selected(request('category') == $category->id)
                >
                    {{ $category->name }}
                </option>

            @endforeach

        </select>
        <select name="sort">

            <option value="">جدیدترین</option>

            <option value="title_asc"
                @selected(request('sort') == 'title_asc')>
                نام (A-Z)
            </option>

            <option value="title_desc"
                @selected(request('sort') == 'title_desc')>
                نام (Z-A)
            </option>

            <option value="oldest"
                @selected(request('sort') == 'oldest')>
                قدیمی‌ترین
            </option>

        </select>

        <button type="submit">
            جستجو
        </button>

    </form>
    <section class="products">
        @foreach($products as $product)
            <div class="card">
                <img
                    src="{{ $product->image_url }}"
                    alt="{{ $product->title }}"
                >
                <h3>{{$product['title']}}</h3>
                <p>{{ $product['description'] }}</p>
                <a href="{{ route('products.show', $product) }}" class="btn">
                    مشاهده محصول
                </a>
            </div>
        @endforeach
            <div class="pagination">
                {{ $products->links() }}
            </div>
    </section>
@endsection





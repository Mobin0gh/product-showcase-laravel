@extends('layouts.layout')

@section('content')

    <div class="admin-container">

        <h1>ویرایش محصول</h1>

        @if($errors->any())

            <div class="error-box">

                <ul>

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('admin.products.update', $product) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label>عنوان</label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $product->title) }}"
                >

            </div>

            <div class="form-group">

                <label>دسته‌بندی</label>

                <select name="category_id">

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->id }}"
                            @selected(old('category_id', $product->category_id) == $category->id)
                        >

                            {{ $category->name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label>توضیحات</label>

                <textarea
                    name="description"
                    rows="6"
                >{{ old('description', $product->description) }}</textarea>

            </div>

            <div class="form-group">

                <label>تصویر جدید</label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                >

            </div>

            <button class="btn">

                ذخیره تغییرات

            </button>

        </form>

    </div>

@endsection

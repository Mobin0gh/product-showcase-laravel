@extends('layouts.layout')

@section('content')

    <div class="admin-container">

        <h1>افزودن محصول</h1>
        @if($errors->any())

            <div class="error-box">

                <ul>

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>عنوان محصول</label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                >
            </div>

            <div class="form-group">
                <label>دسته‌بندی</label>

                <select name="category_id">

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}">
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
                >{{ old('description') }}</textarea>
            </div>

            <div class="form-group">

                <label>تصویر محصول</label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                >

            </div>

            <button class="btn">
                ثبت محصول
            </button>

        </form>

    </div>

@endsection

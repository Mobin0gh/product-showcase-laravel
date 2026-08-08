@extends('layouts.layout')

@section('content')

    <div class="admin-container">

        <h1>ویرایش دسته‌بندی</h1>

        @if($errors->any())
            <div class="error-box">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.categories.update', $category) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>نام دسته‌بندی</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $category->name) }}"
                >
            </div>

            <div class="form-group">
                <label>Slug</label>
                <input
                    type="text"
                    name="slug"
                    value="{{ old('slug', $category->slug) }}"
                >
            </div>

            <button class="btn">
                ذخیره تغییرات
            </button>

        </form>

    </div>

@endsection

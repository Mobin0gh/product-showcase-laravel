@extends('layouts.layout')

@section('content')

    <div class="admin-container">

        <h1>افزودن دسته‌بندی</h1>

        @if($errors->any())
            <div class="error-box">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.categories.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>نام دسته‌بندی</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                >
            </div>

            <div class="form-group">
                <label>Slug</label>
                <input
                    type="text"
                    name="slug"
                    value="{{ old('slug') }}"
                >
            </div>

            <button class="btn">
                ثبت دسته‌بندی
            </button>

        </form>

    </div>

@endsection

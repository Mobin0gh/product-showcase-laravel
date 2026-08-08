@extends('layouts.layout')

@section('content')

    <div class="admin-container">

        <div class="admin-header">
            <h1>مدیریت دسته‌بندی‌ها</h1>

            <a href="{{ route('admin.categories.create') }}" class="btn">
                افزودن دسته‌بندی
            </a>
        </div>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="error-box">
                {{ session('error') }}
            </div>
        @endif

        <table class="admin-table">

            <thead>
            <tr>
                <th>ID</th>
                <th>نام</th>
                <th>Slug</th>
                <th>تعداد محصولات</th>
                <th>عملیات</th>
            </tr>
            </thead>

            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->products()->count() }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category) }}">
                            ویرایش
                        </a>
                        |
                        <form
                            action="{{ route('admin.categories.destroy', $category) }}"
                            method="POST"
                            onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')"
                            style="display:inline"
                        >
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">حذف</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">دسته‌بندی‌ای وجود ندارد.</td>
                </tr>
            @endforelse
            </tbody>

        </table>

        {{ $categories->links() }}

    </div>

@endsection

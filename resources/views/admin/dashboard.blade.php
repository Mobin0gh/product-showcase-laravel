@extends('layouts.layout')

@section('content')

    <div class="admin-container">

        <div class="admin-header">
            <h1>داشبورد ادمین</h1>
        </div>

        <div class="dashboard-stats">

            <div class="stat-box">
                <span class="stat-number">{{ $totalProducts }}</span>
                <span class="stat-label">تعداد محصولات</span>
            </div>

            <div class="stat-box">
                <span class="stat-number">{{ $totalCategories }}</span>
                <span class="stat-label">تعداد دسته‌بندی‌ها</span>
            </div>

        </div>

        <a href="{{ route('admin.products.index') }}" class="btn">
            مدیریت محصولات
        </a>
        <a href="{{ route('admin.categories.index') }}" class="btn">
            مدیریت دسته‌بندی‌ها
        </a>

        <h2 class="section-title">آخرین محصولات اضافه‌شده</h2>

        <table class="admin-table">

            <thead>
            <tr>
                <th>عنوان</th>
                <th>دسته‌بندی</th>
                <th>عملیات</th>
            </tr>
            </thead>

            <tbody>
            @forelse($latestProducts as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product) }}">
                            ویرایش
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">هنوز محصولی اضافه نشده.</td>
                </tr>
            @endforelse
            </tbody>

        </table>

    </div>

@endsection


@extends('layouts.layout')

@section('content')

    <div class="admin-container">

        <div class="admin-header">
            <h1>مدیریت محصولات</h1>

            <a href="{{ route('admin.products.create') }}" class="btn">
                افزودن محصول
            </a>
        </div>
        @if(session('success'))

            <div class="success-message">

                {{ session('success') }}

            </div>

        @endif
        <table class="admin-table">

            <thead>

            <tr>

                <th>ID</th>

                <th>تصویر</th>

                <th>عنوان</th>

                <th>دسته‌بندی</th>

                <th>عملیات</th>

            </tr>

            </thead>

            <tbody>

            @forelse($products as $product)

                <tr>

                    <td>{{ $product->id }}</td>

                    <td>

                        <img
                            src="{{ $product->image_url }}"
                            alt="{{ $product->title }}"
                            width="70"
                            height="70"
                            style="object-fit: cover; border-radius:8px;">

                    </td>

                    <td>{{ $product->title }}</td>

                    <td>{{ $product->category->name }}</td>

                    <td>

                        <a href="{{ route('admin.products.edit',$product) }}">
                            ویرایش
                        </a>

                        |

                        <form
                            action="{{ route('admin.products.destroy',$product) }}"
                            method="POST"
                            onsubmit="return confirm('آیا از حذف این محصول مطمئن هستید؟')"
                            style="display:inline"
                        >

                            @csrf

                            @method('DELETE')

                            <button class="delete-btn">
                                حذف
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="4">

                        محصولی وجود ندارد.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

        {{ $products->links() }}

    </div>

@endsection

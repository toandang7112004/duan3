@extends('admin.layouts.master')
@section('content')
    @include('sweetalert::alert')
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
    <table class="table">
        @if (Auth::user()->hasPermission('Product_create'))
        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm mới</a>
        @endif
        <a href="{{ route('products.export') }}" class="btn btn-success">xuất excel</a>
        <a href="{{ route('products.Garbagecan') }}" class="btn btn-danger">Thùng rác</a>
        <thead>
            <tr>
                <th colspan="1">ID</th>
                <th colspan="1">Tên</th>
                <th colspan="1">Loại</th>
                <th colspan="1">Giá</th>
                <th colspan="1">Ảnh</th>
                <th colspan="1">Hoạt Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <th colspan="1">{{ ++$key }}</th>
                    <td colspan="1">{{ $product->name }}</td>
                    @if (isset($product->category->name))
                        <td colspan="1">{{ $product->category->name }}</td>
                    @else
                        <td>Không xác định</td>
                    @endif

                    <td colspan="1">{{ number_format($product->price) }}vnđ</td>
                    <td>
                        <img src="{{ asset('public/uploads/' . $product->image) }}" alt="">
                    </td>
                    <td colspan="1">
                        <form action="{{ route('products.delete', [$product->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            @if (Auth::user()->hasPermission('Product_delete'))
                            <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                class="btn btn-danger">Xóa</button>
                            @endif
                            @if (Auth::user()->hasPermission('Product_update'))
                            <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-info">Chỉnh sửa</a>
                            @endif
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->onEachSide(3)->links() }}
@endsection

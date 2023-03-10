@extends('admin.layouts.master')
@section('content')
    <style>
        i {
            color: red;
            text-align: right;
        }
    </style>
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-8 col-xl-6">
                            <div class="card border-top border-bottom border-3" style="border-color: #000000 !important;">
                                <div class="card-body p-5">
                                    <p class="lead fw-bold mb-5" style="text-align: center">Chi Tiết Bình Luận</p>
                                    <div class="row">
                                        <div class="col mb-4">
                                            <dt>Tên khách hàng : <i>{{ $orders->customer->name }}</i> </dt>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-4">
                                            <dt>Tên khách hàng: <i>{{ $orders->total }} vnđ</i> </dt>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-4">
                                            <dt>Tên sản phẩm đã mua : <i>{{ $orders->product[0]->name }}</i> </dt>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-4">
                                            <dt>Tên sản phẩm đã mua : <i>{{ $orders->customer->address }}</i> </dt>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('order.index') }}" class="btn btn-danger">Trở lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

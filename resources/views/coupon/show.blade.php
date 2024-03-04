@extends('master')
@section('content')
<!--Mua hoặc nạp coupon mới-->
<div class="text-center mt-3">
<a class="btn btn-primary" href="{{route('coupon.index')}}"> << Xem danh sách coupon</a>
<a class="btn btn-success" href="{{route('coupon.buy')}}"> Mua coupon mới</a>
    <a class="btn btn-warning" href="{{route('coupon.topup')}}">Nạp tiền coupon</a>
</div>
<!--Xem thông tin coupon-->
<div class="container mt-3 mb-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Thông tin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Mã coupon</th>
                <td>1234543432</td>
            </tr>
            <tr>
                <th scope="row">Tên coupon</th>
                <td>asdg324ss</td>

            </tr>
            <tr>
                <th scope="row">Số dư TK chính</th>
                <td colspan="2">200000đ</td>

            </tr>
            <tr>
                <th scope="row">Số dư TK 1</th>
                <td colspan="2">150000đ</td>

            </tr>
            <tr>
                <th scope="row">Số dư TK 2</th>
                <td colspan="2">100000đ</td>
            </tr>
            <tr>
                <th scope="row">Số dư TK 3</th>
                <td colspan="2">50000đ</td>
            </tr>
            <tr>
                <th scope="row">Hạn sử dụng</th>
                <td colspan="2">24/1/2024</td>
            </tr>
            <tr>
                <th scope="row">Trạng thái</th>
                <td colspan="2">Còn hiệu lực</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
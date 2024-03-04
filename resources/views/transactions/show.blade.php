@extends('master')
@section('content')
<!--Quay lại tra cứu giao dịch-->
<div class="text-center mt-3">
<a class="btn btn-primary" href="{{route('ticket.index')}}"> << Tra cứu giao dịch</a>
    
</div>
<!--Xem thông tin giao dịch-->
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
                <th scope="row">Mã giao dịch</th>
                <td>1234543432</td>
            </tr>
            <tr>
                <th scope="row">Tên sản phẩm</th>
                <td>Trà C2 vị chanh</td>

            </tr>
            <tr>
                <th scope="row">Thời gian giao dịch</th>
                <td colspan="2">24/1/2024</td>

            </tr>
            <tr>
                <th scope="row">Tên máy</th>
                <td colspan="2">Máy A</td>

            </tr>
            <tr>
                <th scope="row">Mã sản phẩm</th>
                <td colspan="2">B2324ASN</td>
            </tr>
            <tr>
                <th scope="row">Số lượng</th>
                <td colspan="2">2</td>
            </tr>
            <tr>
                <th scope="row">Tổng tiền</th>
                <td colspan="2">200.000đ</td>
            </tr>
            <tr>
                <th scope="row">Hình thức thanh toán</th>
                <td colspan="2">Coupon</td>
            </tr>
            <tr>
                <th scope="row">Trạng thái</th>
                <td colspan="2">Đã hoàn thành</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
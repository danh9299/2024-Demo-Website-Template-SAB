@extends('master')
@section('content')


<!--Danh sách coupon-->
<div class="row mb-3 mt-3">
    <div class="col-12 text-center">
        <h2>Danh sách các Coupon</h2>
        <!--Tạo coupon mới-->
        <div class="text-center mt-3">
           
            <a class="btn btn-success" href="{{route('coupon.buy')}}">Mua coupon mới</a>
            <a class="btn btn-warning" href="{{route('coupon.topup')}}">Nạp tiền coupon</a>
        </div>
    </div>
</div>

<table class="table table-color-sab table-striped-columns">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã coupon</th>
            <th scope="col">Số dư TK chính</th>
            <th scope="col">Hạn sử dụng</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1234543432</td>
            <td>200000đ</td>
            <td>24/1/2024</td>
            <td>Còn hiệu lực</td>
            <td><a href="{{route('coupon.show')}}" class="" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                    </svg></a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>1234543432</td>
            <td>200000đ</td>
            <td>24/1/2024</td>
            <td>Còn hiệu lực</td>
            <td><a href="{{route('coupon.show')}}" class="" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                    </svg></a></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>1234543432</td>
            <td>200000đ</td>
            <td>24/1/2024</td>
            <td>Còn hiệu lực</td>
            <td><a href="{{route('coupon.show')}}" class="" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                    </svg></a></td>
        </tr>
    </tbody>
</table>


@endsection
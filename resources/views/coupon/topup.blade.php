@extends('master')

@section('content')
<!-- Nạp coupon -->
<div class="row">
    <div class="col-12 mt-3 text-center text-uppercase">
        <h2>Nạp tiền coupon</h2>
    </div>
</div>

<main class="row">
    <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Số tiền cần nạp</label>
                        <input type="number" id="phonenumber" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Mã coupon</label>
                        <input type="text" id="coupon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="payment" class="form-label">Hình thức thanh toán</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--Chọn hình thức--</option>
                            <option value="1">Coupon</option>
                            <option value="2">QR VietQR</option>
                            <option value="3">QR Momo</option>

                        </select>
                    </div>


                    <div class="form-group">
                    <a type="submit" class="btn btn-success">Nạp tiền</a>
                        <a type="" href="{{route('coupon.index')}}" class="btn btn-danger">Hủy bỏ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>
<!-- Phản ánh -->

@endsection
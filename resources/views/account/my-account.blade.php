@extends('master')
@section('content')
<!-- Main Content -->
<div class="row">
    <div class="col-12 mt-3 text-center text-uppercase">
        <h2>Thông tin tài khoản</h2>
    </div>
</div>
<form>
    <div class="row px-5">
        <div class="col">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Họ tên:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tên..">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Giới tính:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Chọn giới tính--</option>
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>

                </select>
            </div>


        </div>
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập email..">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Số điện thoại:</label>
                <input type="number" class="form-control" id="exampleFormControlInput1"
                    placeholder="Nhập số điện thoại..">
            </div>

        </div>

    </div>
    <div class="text-center mb-3">
        <input class="btn btn-primary" type="submit" value="Lưu thông tin" />
    </div>
</form>
<hr>
<!-- Main Content -->





<!-- Đổi mật khẩu -->
<div class="row ">
    <div class="col-12 mt-3 text-center text-uppercase">
        <h2>Thay đổi mật khẩu</h2>
    </div>
</div>
<form>
    <div class="row px-5">
        <div class="col">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mật khẩu cũ:</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Nhập mật khẩu..">
            </div>


        </div>
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mật khẩu mới:</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Nhập mật khẩu..">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Xác nhận lại mật khẩu: </label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Nhập mật khẩu..">
            </div>
        </div>

    </div>
    <div class="text-center mb-3">
        <input class="btn btn-primary" type="submit" value="Lưu mật khẩu" />
    </div>
</form>

<!-- Đổi mật khẩu-->
@endsection
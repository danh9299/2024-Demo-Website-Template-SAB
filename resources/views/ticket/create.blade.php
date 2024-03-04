@extends('master')
@section('content')
    <!-- Tạo Phản ánh -->
    <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>Tạo phản ánh mới</h2>
        </div>
    </div>

    <main class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
            <div class="row">
                <div class="col-12">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên máy</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Số điện thoại</label>
                            <input type="number" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="ticket" class="form-label">Nội dung phản ánh</label>
                            <textarea class="form-control" placeholder="Nhập nội dung phản ánh" id="floatingTextarea"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="captcha" class="form-label">Nhập captcha</label>
                            <input type="captcha" id="password-confirm" class="form-control">
                        </div>
                       
                        <div class="form-group">
                            <a type="submit" class="btn btn-success">Phản ánh</a>
                            <a type="" href="{{route('ticket.index')}}" class="btn btn-danger">Hủy bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <!-- Phản ánh -->

@endsection
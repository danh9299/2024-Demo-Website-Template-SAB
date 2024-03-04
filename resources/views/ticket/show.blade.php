@extends('master')
@section('content')
<!--Tạo phản ánh mới-->
<div class="text-center mt-3">
<a class="btn btn-primary" href="{{route('ticket.index')}}"> << Xem danh sách phản ánh</a>
    <a class="btn btn-success" href="{{route('ticket.create')}}">Tạo phản ánh mới</a>
</div>
<!--Xem thông tin phản ánh-->
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
                <th scope="row">Mã phản ánh</th>
                <td>1234543432</td>
            </tr>
            <tr>
                <th scope="row">Tên phản ánh</th>
                <td>Phản ánh khách hàng ở máy Bạch Mai</td>

            </tr>
            <tr>
                <th scope="row">Thời gian tạo phản ánh</th>
                <td colspan="2">24/1/2024</td>

            </tr>
            <tr>
                <th scope="row">Thời gian xử lý phản ánh</th>
                <td colspan="2">26/1/2024</td>

            </tr>
            <tr>
                <th scope="row">Người tạo</th>
                <td colspan="2">Duy Anh</td>
            </tr>
            <tr>
                <th scope="row">Trạng thái</th>
                <td colspan="2">Đã hoàn thành</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
@extends('master')
@section('content')

<!--Tìm kiếm phản ánh-->
<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2>Tìm kiếm phản ánh</h2>

        </div>
    </div>
    <form>
        <div class="row">
            <div class="col">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Số điện thoại phản ánh:</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập số điện thoại phản ánh..">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên ticket phản ánh:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên ticket phản ánh..">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mã ticket phản ánh:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập mã ticket phản ánh..">
                </div>

            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Trạng thái:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--Chọn trạng thái--</option>
                        <option value="1">Mới tạo</option>
                        <option value="2">Đang chờ xử lý</option>
                        <option value="3">Đang xử lý</option>
                        <option value="4">Hoàn thành</option>
                        <option value="5">Đóng</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Thời gian phản ánh:</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1"
                        placeholder="Chọn thời gian phản ánh..">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Thời gian xử lý xong:</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1"
                        placeholder="Chọn thời gian xử lý xong..">
                </div>
            </div>

        </div>
        <div class="text-center mb-3">
            <a class="btn btn-primary" type="submit" href="#">Tìm kiếm phản ánh</a>
        </div>
    </form>
</div>

<!--Danh sách phản ánh-->
<div class="row mb-3">
    <div class="col-12 text-center">
        <h2>Danh sách các phản ánh</h2>
        <!--Tạo phản ánh mới-->
        <div class="text-center mt-3">
            <a class="btn btn-success" href="{{route('ticket.create')}}">Tạo phản ánh mới</a>
        </div>
    </div>
</div>

<table class="table table-color-sab table-striped-columns">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã phản ánh</th>
            <th scope="col">Thời gian tạo phản ánh</th>

            <th scope="col">Trạng thái</th>
            <th scope="col">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1234543432</td>
            <td>24/1/2024</td>

            <td>Đã hoàn thành</td>
            <td><a href="{{route('ticket.show')}}" class="" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                    </svg></a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>1234543432</td>
            <td>24/1/2024</td>

            <td>Đã hoàn thành</td>
            <td><a href="{{route('ticket.show')}}" class="" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                    </svg></a></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>1234543432</td>
            <td>24/1/2024</td>

            <td>Đã hoàn thành</td>
            <td><a href="{{route('ticket.show')}}" class="" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                    </svg></a></td>
        </tr>
    </tbody>
</table>


@endsection
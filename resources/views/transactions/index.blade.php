@extends('master')
@section('content')

<!--Tìm kiếm giao dịch-->
<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2>Tìm kiếm giao dịch</h2>

        </div>
    </div>
    <form>
        <div class="row">
        
            
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
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mã giao dịch:</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập mã giao dịch..">
                </div>
            

        </div>
        <div class="text-center mb-3">
            <input class="btn btn-primary" type="submit" value="Tìm giao dịch"/>
        </div>
    </form>
</div>

<!--Danh sách giao dịch-->
<div class="row mb-3">
    <div class="col-12 text-center">
        <h2>Danh sách các giao dịch</h2>
        
    </div>
</div>

<table class="table table-color-sab table-striped-columns">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Thời gian giao dịch</th>
            <th scope="col">Tên máy</th>
            <th scope="col">Mã giao dịch</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>24/1/2024</td>
            <td>Máy A</td>
            <td>1234543432</td>
            <td>Đã hoàn thành</td>
            <td><a href="{{route('transactions.show')}}" class="" id="">Xem</a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>24/1/2024</td>
            <td>Máy B</td>
            <td>1234543432</td>
            <td>Đã hoàn thành</td>
            <td><a href="{{route('transactions.show')}}" class="" id="">Xem</a></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>24/1/2024</td>
            <td>Máy C</td>
            <td>1234543432</td>
            <td>Đã hoàn thành</td>
            <td><a href="{{route('transactions.show')}}" class="" id="">Xem</a></td>
        </tr>
    </tbody>
</table>


@endsection
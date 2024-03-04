@extends('master')
@section('content')
<!--Danh sách coupon-->
<div class="row mb-3 mt-3">
    <div class="col-12 text-center">
        <h2>Tra cứu máy bán hàng</h2>
    </div>
</div>
<div >
    <div class="sab-list-machines mb-3 px-3">
        <div class="row">
            <form class="mb-3">
                <div class="input-group flex-nowrap">
                    <input class="btn btn-warning" type="submit" value="Tìm" id="addon-wrapping" />
                    <input type="search" class="form-control" placeholder="Tìm kiếm thông tin" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
            </form>
            @for ($i=1; $i < 11; $i=$i + 1) <div class="row">
                <div class="col-8 machine-name">
                    <a style="text-decoration:none" href="#">
                        <h4>Máy bán hàng tự động ở cơ sở {{$i}}</h4>
                    </a>
                </div>
                <div class="col-2 text-center machine-btn-1">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z" />
                        </svg></a><br>
                    <a style="text-decoration:none" href="#">Chỉ đường</a>
                </div>
                <div class="col-2 text-center machine-btn-2">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg></a><br>
                    <a style="text-decoration:none" href="#">Chỉ đường</a>
                </div>
        </div>
        <hr>
        @endfor
    </div>
</div>
<div class="sab-map mb-3">
    <div id="map" ></div>
</div>
</div>
<script>
   var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS popup.<br> Easily customizable.')
    .openPopup();
    </script>


@endsection
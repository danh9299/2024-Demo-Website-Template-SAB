@extends('master')
@section('content')
<!-- Main Content -->
<main class="row">

<!--Remove menu in the home page as there are clickable icons-->
<style>
@media (max-width:450px) {
    .menu-navbar-sab{
        
        display: none;
    }
}
</style>

<!-- Slider -->
<div class="container sab-img-slider text-center">
    <div class="col-12 px-0">
        <div id="slider" class="carousel slide w-100" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#slider" data-bs-slide-to="1"></li>
                <li data-bs-target="#slider" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://c4.wallpaperflare.com/wallpaper/394/487/706/1920x1080-px-album-covers-astronaut-cover-art-digital-art-fantasy-art-helmet-plane-animals-bears-hd-art-wallpaper-preview.jpg" class="slider-img">
                </div>
                <div class="carousel-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/001/868/729/non_2x/credit-card-online-payment-concept-banner-free-vector.jpg" class="slider-img">
                </div>
                <div class="carousel-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/000/695/850/original/digital-technology-concept-vector.jpg" class="slider-img">
                </div>
            </div>
            <button class="carousel-control-prev" type="button"  data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Slider -->

<!-- Tra cứu -->
<div class="col-12">
    <div class="row">
        <div class="col-12 py-3">
            <div class="row">
                <div class="col-12 text-center text-uppercase">
                    <h2 class="mb-2">Tra cứu</h2>
                </div>
            </div>
            <div class="row">
                <!--Tìm máy-->
                <div class="machine-list-btn col text-center">
                    <a href="{{route('machine.index')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                        </svg>
                        <br>
                        <p3>Tìm máy bán hàng</p3></a>
                </div>
                <!--Tìm giao dịch-->
                <div class="transactions-list-btn col text-center">
                    <a href="{{route('transactions.index')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                            <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z"/>
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
                        </svg>
                        <br>
                        <p3>Tìm giao dịch</p3></a>
                </div>
                <!--Thông tin cá nhân-->
                <div class="profile-info-list-btn col text-center">
                    <a href="{{route('account.my-account')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                        </svg>
                        <br>
                        <p3>Thông tin tài khoản</p3></a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tra cứu-->

<div class="col-12">
    <hr>
</div>

<!-- Coupon -->
<div class="col-12">
    <div class="row">
        <div class="col-12 py-3">
            <div class="row">
                <div class="col-12 text-center text-uppercase">
                    <h2 class="mb-2">Coupon</h2>
                </div>
            </div>
            <div class="row">
                <!--Mua coupon-->
                <div class="coupon-buy-btn col text-center">
                    <a href="{{route('coupon.buy')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                        </svg>
                        <br>
                        <p3>Mua coupon mới</p3></a>
                </div>
                <!--Nạp coupon-->
                <div class="coupon-topup-btn col text-center">
                    <a href="{{route('coupon.topup')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16">
                            <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1M4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                            <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
                        </svg>
                        <br>
                        <p3>Nạp coupon</p3></a>
                </div>
                <!--Danh sách coupon-->
                <div class="coupon-list-btn col text-center">
                    <a href="{{route('coupon.index')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                        <br>
                        <p3>Xem danh sách coupon</p3></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Coupon -->

<div class="col-12">
    <hr>
</div>

<!-- Phản ánh -->
<div class="col-12">
    <div class="row">
        <div class="col-12 py-3">
            <div class="row">
                <div class="col-12 text-center text-uppercase">
                    <h2 class="mb-2">Phản ánh</h2>
                </div>
            </div>
            <!-- Tạo mới phản ánh-->
            <div class="row">
                <div class="ticket-create-btn col text-center">
                    <a href="{{route('ticket.create')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                        </svg>
                        <br>
                        <p3>Tạo mới</p3></a>
                </div>
                <!--Danh sách phản ánh-->
                <div class="ticket-list-btn col text-center">
                <a href="{{route('ticket.index')}}" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5zM3 12v-2h2v2zm0 1h2v2H4a1 1 0 0 1-1-1zm3 2v-2h3v2zm4 0v-2h3v1a1 1 0 0 1-1 1zm3-3h-3v-2h3zm-7 0v-2h3v2z"/>
                        </svg>
                        <br>
                        <p3>Xem danh sách phản ánh</p3></a>
                </div>
                <!--Liên hệ-->
                <div class="contact-info-btn col text-center">
                    <a href="#" class="home-icon-sab">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                        </svg>
                        <br>
                        <p3>Thông tin liên hệ</p3></a>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Phản ánh -->

<div class="col-12 py-3 bg-light d-sm-block d-none">
    <div class="row">
        <div class="col-lg-3 col ms-auto large-holder">
            <div class="row">
                <div class="col-auto ms-auto large-icon">
                    <i class="fas fa-money-bill"></i>
                </div>
                <div class="col-auto me-auto large-text">
                    Giá tốt nhất
                </div>
            </div>
        </div>
       
        <div class="col-lg-3 col me-auto large-holder">
            <div class="row">
                <div class="col-auto ms-auto large-icon">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-auto me-auto large-text">
                  Sản phẩm chất lượng
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<!-- Main Content -->

@endsection
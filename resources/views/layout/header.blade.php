<header class="row">
                    <!-- Top Nav -->
                    <div class="col-12 header-top-nav-bg py-2 d-md-block d-none">
                        <div class="row">
                            <div class="col-auto me-auto">
                                <ul class="top-nav">
                                    <li>
                                        <a href="tel:1800 96 96 83"><i class="fa fa-phone-square me-2"></i>1800 96 96 83</a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@sab.com.vn"><i class="fa fa-envelope me-2"></i>info@sab.com.vn</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <ul class="top-nav">
                                    <li>
                                        <a href="{{route('register')}}"><i class="fas fa-user-edit me-2"></i>Đăng Ký</a>
                                    </li>
                                    <li>
                                        <a href="{{route('login')}}"><i class="fas fa-sign-in-alt me-2"></i>Đăng Nhập</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav -->

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4 ">
                        <div class="row">
                            <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left mb-3">
                                    <a href="{{route('home')}}"><img src="https://sab.com.vn/wp-content/uploads/2018/01/logo-sab-sm.svg" alt="Select And Buy"></a>
                                </div>
                            </div>
                            
                            <nav class="navbar navbar-expand-lg navbar-light bg-white col-lg-auto menu-navbar-sab">
                                <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('home')}}">Trang chủ <span class="sr-only">(current)</span></a>
                                        </li>
                                      
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{route('ticket.index')}}" id="fashion" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Phản ánh</a>
                                            <div class="dropdown-menu" aria-labelledby="fashion">
                                                <a class="dropdown-item" href="{{route('ticket.index')}}">Danh sách phản ánh</a>
                                                <a class="dropdown-item" href="{{route('ticket.create')}}">Tạo danh sách phản ánh</a>
                                                
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{route('coupon.index')}}" id="books" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Coupon</a>
                                            <div class="dropdown-menu" aria-labelledby="books">
                                            <a class="dropdown-item" href="{{route('coupon.index')}}">Danh sách các coupon</a>
                                                <a class="dropdown-item" href="{{route('coupon.buy')}}">Mua mã coupon</a>
                                                <a class="dropdown-item" href="{{route('coupon.topup')}}">Nạp mã coupon</a>
                                               
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="books" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tra cứu</a>
                                            <div class="dropdown-menu" aria-labelledby="books">
                                                <a class="dropdown-item" href="{{route('machine.index')}}">Tìm máy bán hàng</a>
                                                <a class="dropdown-item" href="{{route('transactions.index')}}">Tra cứu giao dịch</a>
                                               
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="books" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                                            <div class="dropdown-menu" aria-labelledby="books">
                                                <a class="dropdown-item" href="{{route('account.my-account')}}">Thông tin của tôi</a>
                                                <a class="dropdown-item" href="{{route('coupon.index')}}">Coupon của tôi</a>
                                                <a class="dropdown-item" href="#">Thoát</a>
                                               
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->

                    </div>
                    <!-- Header -->

                </header>
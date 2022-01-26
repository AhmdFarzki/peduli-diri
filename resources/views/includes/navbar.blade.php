<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo text-primary">
                <h3>Peduli Diri</h3>
            </div>
            <div class="header-top-right">

                <div class="dropdown">
                    <a href="#" class="user-dropdown d-flex dropend" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2" >
                            <img src="assets/images/faces/1.jpg" alt="Avatar">
                        </div>
                        <div class="text my-auto">
                            <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="dropdownMenuButton1">
                      <!-- <li><a class="dropdown-item" href="#">My Account</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><hr class="dropdown-divider"></li> -->
                      <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link link-danger text-decoration-none">
                                Logout
                            </button>
                          </form>
                        <!-- <a class="dropdown-item" href="{{ route('logout') }}">Logout</a> -->

                    </li>

                    </ul>
                </div>

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <ul class="d-flex justify-content-center">



                <li
                    class="menu-item  ">
                    <a href="{{ route('dashboard') }}" class='menu-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>



                <li
                    class="menu-item">
                    <a href="{{ route('travel-history') }}" class='menu-link'>
                        <i class="bi bi-clock-history"></i>
                        <span>History Travel</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

</header>

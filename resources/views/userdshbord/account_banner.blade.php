<div class="account-banner">
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8 detail">
                    <div class="inner">
                       <a href="{{ route('welcome') }}"> <button class="btn btn-info">back home</button></a>

                        <h1 class="page-title">My Account</h1>
                        <h3 class="user-name">{{ auth()->user()->name }}</h3>

                        <p class="description">Aspernatur magni in repellat repellendus itaque consequuntur alias necessitatibus.</p>
                    </div>
                </div>
                <!-- Column end -->
                <div class="col-md-4 profile">
                    <div class="profile">
                        <span class="image">
                        <img src="https://res.cloudinary.com/templategalaxy/image/upload/v1631257421/codepen-my-account/images/profile_pdpo9w.png" alt="Yash">
                    </span>
                    </div>
                </div>
                <!-- Column end -->
            </div>
            <!-- Row end -->

            <!-- Navbar Start -->
            <div class="nav-area">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="dashboard-link" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="my-order" data-toggle="tab" href="#my-orders" role="tab" aria-controls="my-orders" aria-selected="false"><i class="fas fa-file-invoice"></i> <span>Orders</span></a>
                    <li class="nav-item">
                        <a class="nav-link" id="my-address" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false"><i class="fas fa-map-marker-alt"></i> <span>Address</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-detail" data-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false"><i class="fas fa-user-alt"></i> <span>Account Details</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>


                </ul>


            </div>



            <!-- Navbar End -->
        </div>
    </div>
</div>

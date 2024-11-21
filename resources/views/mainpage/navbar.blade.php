<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
                        <a href="shop.html" class="nav-item nav-link">Shop</a>
                        <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                      {{-- mini cart start --}}
                      <button type="button" class="nav-item nav-link btn btn-link px-0" data-bs-toggle="modal" id="mini-cart-toggle" data-bs-target="#exampleModal">
                        mini cart
                      </button>



                      {{-- mini cart end --}}

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">
                                {{  count(session('cart', []))                         }}
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mini-cart">
                <!-- Mini Cart Button -->
                <button class="btn btn-outline-primary position-relative" id="mini-cart-toggle">
                    Cart ({{ count(session('cart', [])) }})
                    <!-- Cart Icon -->
                    <i class="bi bi-cart-fill"></i>
                </button>

                <!-- Mini Cart Dropdown -->
                <div id="mini-cart-dropdown" style="display: none;">
                    @if(session()->has('cart') && count(session('cart')) > 0)
                        <ul>
                            @foreach(session('cart') as $productId => $item)
                                <li>
                                    {{ $item['name'] }} x {{ $item['quantity'] }} - ${{ $item['price'] * $item['quantity'] }}
                                    <!-- Remove Button -->
                                    <form action="{{ route('cart.remove') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $productId }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                        <p>Total: ${{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart'))) }}</p>
                        <a href="{{ route('cart.view') }}" class="btn btn-primary btn-sm">View Cart</a>
                    @else
                        <p>Your cart is empty!</p>
                    @endif
                </div>

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Clear Cart</button>
        </form>
    </div>
      </div>
    </div>
  </div> --}}



  <!-- Modal Structure -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Mini Cart Content -->
                <div class="mini-cart">
                    <!-- Cart Information -->
                    @if(session()->has('cart') && count(session('cart')) > 0)
                        <ul class="list-unstyled">
                            @foreach(session('cart') as $productId => $item)
                                <li class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                                    <span class="fw-bold">{{ $item['name'] }} = {{ $item['quantity'] }} piece</span>
                                    <span class="text-muted">${{ $item['price'] * $item['quantity'] }}</span>

                                    <!-- Remove Button -->
                                    <form action="{{ route('cart.remove') }}" method="POST" class="mb-0">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $productId }}">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Remove</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Total Price -->
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total:</strong>
                            <strong>${{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart'))) }}</strong>
                        </div>

                        <!-- View Cart Button -->
                        <a href="{{ route('cart.view') }}" class="btn btn-primary btn-sm w-100 mb-2">View Cart</a>

                    @else
                        <p>Your cart is empty!</p>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <!-- Clear Cart Button -->
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Clear Cart</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

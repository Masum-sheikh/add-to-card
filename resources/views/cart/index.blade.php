@extends('layouts.mainpage')

@section('content')
    @include('mainpage.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('mainpage.navbar')
    <!-- Navbar End -->

    <div class="container my-5">
        <h1 class="text-center mb-4">Your Cart</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Cart Table -->
        @if(count($cart) > 0)
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $id => $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>${{ $item['price'] }}</td>
                                <td>
                                    <form action="{{ route('cart.update') }}" method="POST" class="d-flex align-items-center">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control mx-2" style="width: 80px;">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </form>
                                </td>
                                <td>${{ $item['price'] * $item['quantity'] }}</td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Clear Cart Button -->
            <div class="d-flex justify-content-between align-items-center">
                <p class="h4">
                    <strong>Total: </strong> ${{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)) }}
                </p>
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Clear Cart</button>
                </form>
            </div>
        @else
            <p class="text-center text-muted">Your cart is empty!</p>
        @endif
    </div>

    <!-- Footer Start -->
    @include('mainpage.footer')
    <!-- Footer End -->
@endsection

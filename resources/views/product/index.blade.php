{{-- @extends('layouts.admin')
@section('maincontent')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>product list:</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif







<table class="table  table-bordered">

    <tr>

        <th>No</th>

        <th>Image</th>

        <th>Name</th>
        <th>description</th>
        <th>price</th>
        <th>seleprice</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($Products as $product)

    <tr class="">

        <td>{{ ++$i }}</td>

        <td><img src="/images/{{ $product->image }}" width="100px"></td>

        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->seleprice }}</td>



        <td>

            <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>


{!! $Products->links() !!}



@endsection
 --}}






 @extends('layouts.admin')
@section('maincontent')

<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center mt-3">
            <h2>Product List:</h2>
            <a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>
        </div>
    </div>

    <!-- Success Message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-3">
        <p>{{ $message }}</p>
    </div>
    @endif

    <!-- Responsive Table -->
    <div class="table-responsive mt-3">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Products as $product)
                <tr class="">
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/{{ $product->image }}" width="100px" class="img-thumbnail"></td>
                    <td>{{ $product->name }}</td>
                    <td class="text-wrap d-flex justify-content-center">{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->seleprice }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3">
        {!! $Products->links() !!}
    </div>
</div>

@endsection

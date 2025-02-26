@extends('layouts.admin')
@section('maincontent')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit categori</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">

    @csrf

    @method('PUT')



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>product description:</strong>

                <input type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder="">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>product price:</strong>

                <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>seleprice:</strong>

                <input type="text" name="seleprice" value="{{ $product->seleprice }}" class="form-control" placeholder="Name">

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

                <img src="/images/{{ $product->image }}" width="300px">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">


        </div>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection



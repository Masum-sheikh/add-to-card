

@extends('layouts.admin')
@section('maincontent')







    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
           <h2>Add New categori</h2>
        </div>
       <div class="pull-right">
           <a class="btn btn-primary" href="{{ route('categori.index') }}"> Back</a>
        </div>

    </div>









<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong> product Name:</strong>

                <input type="text" name="name" class="form-control" placeholder="Name">

                @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>


        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>product description:</strong>

                <input type="text" name="description" class="form-control" placeholder="">
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>price:</strong>

                <input type="text" name="price" class="form-control" placeholder="Name">
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>seleprice:</strong>

                <input type="text" name="seleprice" class="form-control" placeholder="Name">
                @error('seleprice')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>







    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection

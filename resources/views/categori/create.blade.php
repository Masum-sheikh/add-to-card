

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









<form action="{{ route('categori.store') }}" method="POST" enctype="multipart/form-data">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" class="form-control" placeholder="Name">

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

            </div>

        </div>







    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection

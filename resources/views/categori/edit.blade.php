@extends('layouts.admin')
@section('maincontent')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit categori</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('categori.index') }}"> Back</a>

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



<form action="{{ route('categori.update',$categori->id) }}" method="POST" enctype="multipart/form-data">

    @csrf

    @method('PUT')



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" value="{{ $categori->name }}" class="form-control" placeholder="Name">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

                <img src="/images/{{ $categori->image }}" width="300px">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">


        </div>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection



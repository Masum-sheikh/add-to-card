@extends('layouts.admin')
@section('maincontent')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Laravel 10 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('categori.create') }}"> Create New Product</a>

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif



<table class="table table-bordered">

    <tr>

        <th>No</th>

        <th>Image</th>

        <th>Name</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($categori as $categoris)

    <tr>

        <td>{{ ++$i }}</td>

        <td><img src="/images/{{ $categoris->image }}" width="100px"></td>

        <td>{{ $categoris->name }}</td>



        <td>

            <form action="{{ route('categori.destroy',$categoris->id) }}" method="POST">



                <a class="btn btn-info" href="{{ route('categori.show',$categoris->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('categori.edit',$categoris->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>



{!! $categori->links() !!}



@endsection


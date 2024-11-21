@extends('layouts.userdeshbord')

@section('mainconten')
@include('userdshbord.account_banner')
<!-- Banner end   -->
<!-- Tabs Content start -->
@include('userdshbord.deshbord')
      @include('userdshbord.ordertao')
                    <!-- Address Tab -->
                 @include('userdshbord.address')
                    <!-- Account Details Tab -->
                @include('userdshbord.accound')
@endsection

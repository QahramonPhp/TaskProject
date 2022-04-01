@extends('layout.layout')
@section('content')
<h1>products Create</h1>

    <form class="form-group" action="{{route('product.store')}}" method="post">
        @csrf
        <label for="">name</label>
        <input class="form-control" type="text" name="name">
        <span style="color:red">{{$errors->first('name')}}</span>
        <label for="">family</label>
        <input class="form-control" type="text" name="family">
        <span style="color:red">{{$errors->first('family')}}</span>
        <label for="">Phone</label>
        <input class="form-control" type="number" name="phone">
        <span style="color:red">{{$errors->first('phone')}}</span>

        <input type="submit" class="btn btn-success" value="Saqlash">
    </form>
@endsection

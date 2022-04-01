@extends('layout')
@section('content')
<h1> Currency </h1>
<table>
    <tr>
        <td>Short_Name</td>
        <td>Country</td>
    </tr>
    @foreach ($currency as $item)
    <tr>
        <td>{{ $item->short_name }}</td>
        <td>{{ $item->country }}</td>
    </tr>
    @endforeach
</table>

@endsection

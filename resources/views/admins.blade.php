<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends('layout.master')
@section('title')
admin
@endsection

<div>
@section('table_name')
admin
@endsection
</div>
@section('table')
<table class="table table-hover bodered">
    <thead>
        <tr style="background-color:black;color:white">
            <th>ID</th>
            <th>Account</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Duong</td>
            <td>123</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Quang</td>
            <td>123</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Hai</td>
            <td>123</td>
        </tr>
    </tbody>
</table>
@endsection
</div>
@include('sections.custom')
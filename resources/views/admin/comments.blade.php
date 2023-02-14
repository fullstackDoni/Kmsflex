@extends('layouts.adm')
@section('content')
<h3>Pıkırler tızımı</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Aty</th>
        <th>###</th>
        <th>###</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($comments);$i++)
    <tr>
        <th scope="row">{{$i+1}}</th>
        <td>{{$comments[$i]->text}}</td>
    </tr>
    @endfor
    </tbody>
</table>
@endsection

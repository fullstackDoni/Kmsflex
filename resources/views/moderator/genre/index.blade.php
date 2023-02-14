@extends('layouts.mdr')
@section('content')
<h3>Janrlar tızımı</h3>
<a href="{{route('moderator.genres.create')}}" class="btn btn-outline-success">Janr qūru</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Aty</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($genre);$i++)
        <tr>
            <th scope="row">{{$i+1}}</th>
            <td>{{$genre[$i]->gname}}</td>
            <td>
                <br><br></td>
        </tr>

@endfor
@endsection

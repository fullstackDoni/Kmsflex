@extends('layouts.adm')
@section('content')
<h3>Janrlar tızımı</h3>
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
            <td><form action="{{route('admin.genres.destroy',$genre[$i]->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Öşıru</button>
                </form></td>
        </tr>

@endfor
@endsection

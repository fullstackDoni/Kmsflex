@extends('layouts.adm')
@section('content')
<h3>Kategoria tızımı</h3>
<a href="{{route('admin.categories.create')}}" class="btn btn-outline-success">Kategoria qūru</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Aty</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($categories);$i++)
        <tr>
            <th scope="row">{{$i+1}}</th>
            <td>{{$categories[$i]->cname}}</td>
            <td>
                <br><br></td>
            <td><form action="{{route('admin.categories.destroy',$categories[$i]->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Öşıru</button>
                </form></td>
        </tr>

@endfor
@endsection

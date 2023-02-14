@extends('layouts.adm')
@section('content')
    <a href="{{route('admin.videos.create')}}" class="btn btn-outline-success">Video qūru</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Aty</th>
            <td scope="col">Elı</td>
            <td scope="col">Janry</td>
            <td scope="col">Kategoriasy</td>
            <td scope="col">Jyly</td>
        </tr>
        </thead>
        <tbody>
        @for($i=0;$i<count($video);$i++)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$video[$i]->name}}</td>
                <td>{{$video[$i]->country}}</td>
                <td>{{$video[$i]->genres->gname}}</td>
                <td>{{$video[$i]->category->cname}}</td>
                <td>{{$video[$i]->year}}</td>
                <td>
                    <br><br></td>
                <td>
                    <form action="{{route('admin.videos.destroy',$video[$i]->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Öşıru</button>
                    </form>
                </td>
            </tr>

    @endfor
@endsection

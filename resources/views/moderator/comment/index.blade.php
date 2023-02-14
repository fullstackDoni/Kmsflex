@extends('layouts.mdr')
@section('content')
    <h3>Pıkırler tızımı</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Aty</th>
            <th scope="col">Tirkelushi</th>
            <th scope="col">Video aty</th>
            <th>Owiru</th>
        </tr>
        </thead>
        <tbody>
        @for($i=0;$i<count($comments);$i++)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$comments[$i]->text}}</td>
                <td>{{$comments[$i]->user->name}}</td>
                <td>{{$comments[$i]->video->name}}</td>
                <td>
                    <form action="{{route('moderator.comments.destroy',$comments[$i]->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Öşıru</button>
                    </form>
                </td>
            </tr>
        @endfor
        </tbody>
    </table>
@endsection

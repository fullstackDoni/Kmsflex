@extends('layouts.adm')
@section('content')
<h3>Tırkeluşıler tızımı</h3>
<form action="{{route('admin.users.search')}}" method="get">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="text" name="search" class="form-control" placeholder="Izdeu">
        <button class="btn btn-outline-secondary" type="submit">Izdeu</button>
    </div>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Aty</th>
        <th scope="col">Email</th>
        <th scope="col">Roli</th>
        <th>Būğattau | Būğattamau</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($users);$i++)
    <tr>
        <th scope="row">{{$i+1}}</th>
        <td>{{$users[$i]->name}}</td>
        <td>{{$users[$i]->email}}</td>
        <td>{{$users[$i]->role->name}}</td>
        <td>
            <form action="
                @if($users[$i]->is_active)
                {{route('admin.users.ban',$users[$i]->id)}}
                @else
                {{route('admin.users.unban',$users[$i]->id)}}
                @endif
                " method="post">
                @csrf
                @method('PUT')
                <button class="btn {{$users[$i]->is_active ? 'btn-danger' : 'btn-success'}}" type="submit">
                    @if($users[$i]->is_active)
                        Būğattau
                    @else
                        Būğattamau
                    @endif
                </button>
            </form>
        </td>
        <td></td>
    </tr>
    @endfor
    </tbody>
</table>
@endsection

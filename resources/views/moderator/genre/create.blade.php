@extends('layouts.mdr')
@section('title','DONIGAMES')
@section('content')
    <h2>Kategoria qūru</h2>
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{route('moderator.genres.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="titleInput">Aty</label>
                        <input type="text" class="form-control" id="titleInput" name="gname">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mt-3">
                        <button  class="btn btn-outline-success" type="submit">Saqtau</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

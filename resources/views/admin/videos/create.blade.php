@extends('layouts.adm')
@section('content')
    <h2>Video qūru</h2>
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
                <form action="{{route('admin.videos.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="titleInput">Aty</label>
                        <input type="text" class="form-control" id="titleInput" name="name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Sipattama</label>
                        <input type="text" class="form-control" id="titleInput" name="description">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Sureti</label>
                        <input type="text" class="form-control" id="titleInput" name="image">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Directors</label>
                        <input type="text" class="form-control" id="titleInput" name="directors">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Actors</label>
                        <input type="text" class="form-control" id="titleInput" name="actors">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Jyly</label>
                        <input type="text" class="form-control" id="titleInput" name="year">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Elı</label>
                        <input type="text" class="form-control" id="titleInput" name="country">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Video</label>
                        <input type="text" class="form-control" id="titleInput" name="video">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Kategoria</label>
                        <select name="category_id">
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->cname}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="titleInput">Janr</label>
                        <select name="genres_id">W
                            @foreach($genres as $g)
                                <option value="{{$g->id}}">{{$g->gname}}</option>
                            @endforeach
                        </select>
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

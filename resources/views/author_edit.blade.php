@extends('base')
@section('title', 'Author')
@section('sidebar')
    <h2>
    @if (isset($author)) Edit @else Add @endif author</h2><br/>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
@endsection
@section('content')
      <form method="post" action="{{url('author', isset($author) ? $author['id'] : '' )}}" enctype="multipart/form-data">
        @if (isset($author))
          {{ method_field('PATCH') }}
        @endif
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{isset($author) ? $author['name'] : ''}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{isset($author) ? $author['email'] : ''}} ">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
@endsection
@extends('base')
@section('title', 'Author')
@section('sidebar')
    <h2>Add author</h2><br/>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
@endsection
@section('content')
      <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($authors as $author)
      @php
        $date=date('Y-m-d', $author['date']);
        @endphp
      <tr>
        <td>{{$author['id']}}</td>
        <td>{{$author['name']}}</td>
        <td>{{$author['email']}}</td>
        <td><a href="{{action('AuthorController@edit', $author['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('AuthorController@destroy', $author['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
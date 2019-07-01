@extends('layouts.layout')


@section('title')

@endsection


@section('content')
  <div class="container">

    @section('title')

    @endsection


    @section('content')
      <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Admin</th>
      <th scope="col">Author</th>
      <th scope="col">User</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($admins as $admin)
    <tr>
      <form class="" action="{{route('form.admin')}}" method="post">
      <th scope="row">1</th>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}<input type="hidden" name="email" value="{{$admin->email}}"></td>
      <td><input type="checkbox" {{$admin->hasRole('User')?'checked':''}} name="role_user"></td>
      <td><input type="checkbox" {{$admin->hasRole('Author')?'checked':''}} name="role_author"></td>
      <td><input type="checkbox" {{$admin->hasRole('Admin')?'checked':''}} name="role_admin"></td>
      {{@csrf_field()}}
      <td><input type="button" value="assign role" class="ui inverted red button"></td>
      </form>
    </tr>
        @endforeach
  </tbody>
</table>
      </div>
    @endsection

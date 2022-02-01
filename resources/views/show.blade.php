@extends('layout')

@section('title', 'User '.$user->name)

@section('content')
<a href="{{ route('users.index') }}" type="button" class="btn btn-outline-secondary"> < Back to users</a>
<div class="card mt-3" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">ID : {{ $user->id }} </li>
      <li class="list-group-item">Name : {{ $user->name }} </li>
      <li class="list-group-item">Email : {{ $user->email}} </li>
      <li class="list-group-item">Created at : {{ $user->created_at->format('d/m/y H:i:s')}} </li>
      <li class="list-group-item">Updated at : {{ $user->updated_at->format('d/m/y H:i:s')}} </li>
      
    </ul>
  </div> 
  <form class = "mt-3" method = "POST" action="{{ route('users.destroy', $user) }}">
    <a href="{{ route('users.edit', $user) }}"  type="button" class="btn btn-outline-info" >Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger" >Delete</a>
   </form>
@endsection
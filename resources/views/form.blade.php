@extends('layout')

@section('title', isset($user) ? 'Update '.$user->name : 'Create user')

@section('content')
    <a href="{{ route('users.index') }}" type="button" class="btn btn-outline-secondary"> < Back to users </a>
    <form method = "POST" 
            @if (isset($user))
            action="{{ route('users.update', $user) }}" class="mt-3">
            @else
            action="{{ route('users.store') }}" class="mt-3">
            @endif
           
            @csrf

            @isset($user)
                @method('PUT')                
            @endisset 
            <div class="row">
                <div class="col">
                    <input name = "name" value = "{{isset($user) ? $user->name : null}}" type="text" class="form-control" placeholder="Name" aria-label="Name">
                </div>  
            </div>

            <div class="row mt-3">
                <div class="col">
                    <input name = "email" value = "{{isset($user) ? $user->email : null}}" type="text" class="form-control" placeholder="email" aria-label="email">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
        </div>
    </form>
    
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as admin!') }}
                </div>
                <div class="card-body w-25 bg-info text-center m-3 mx-auto rounded">
                    Users number: <b>{{$users->count()}}</b>
                </div>
                <div class="d-flex h2 justify-content-center">all users: </div>
                <div class="card border-secondary my-3 w-75 text-center mx-auto rounded">
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">name</th>
                          <th scope="col">email</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                          <th scope="row">{{$user->id}}</th>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              
                
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.authenticated')

@section('content')
<div id="container">
    <div class="row mt-3">
        <router-link to="/laravel/public"><button class="btn btn-success mx-3 justify-content-center">Home</button></router-link>
        <router-link to="/profile1"><button class="btn btn-success mx-3">Profile1</button></router-link>
        <router-link to="/profile2"><button class="btn btn-success mx-3">profile2</button></router-link>
        <router-view />
    </div>
</div>
@endsection
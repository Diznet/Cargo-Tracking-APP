@extends('layout')
@section('main')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('trouble'))
        <div class="alert alert-danger">
            {{ session()->get('trouble') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section>
        <form action="/custom-login" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Enter e-mail">
            <input type="password" name="password" placeholder="Enter password">
            <br>
            <input type="submit" value="Login">
        </form>
        <div class="abug"><span>Not registered? <a href="/registration">Register</a></span></div>
    </section>
@endsection

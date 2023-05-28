@extends('layout')
@section('main')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
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
        <form action="/custom-registration" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Enter e-mail">
            <input type="password" name="password" placeholder="Enter password">
            <br>
            <input type="submit" value="Register">
        </form>
        <span>Already registered? <a href="/login">Login</a></span>
    </section>
@endsection

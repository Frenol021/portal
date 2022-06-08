@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    <label for="email">email</label>

                    @csrf

                    <input type="email" name="email" class="form-control" placeholder="enter your email">
                </div>

                <div class="form-group">
                    <label for="password">password</label>

                    <input type="password" name="password" class="form-control" placeholder="enter your password">
                </div>
                <button class="btn btn-primary">login</button><br><br>
                
                <a href="{{route('registration')}}">create account</a>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('master')
@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">

        <h4>To register for an account please fill in this form</h4>

            <form action="login" method="POST">

            <div class="form-group">
                    <label for="name">Fullname</label>

                    <input type="text" name="name" class="form-control" placeholder="enter your fullname">
                </div>

                <div class="form-group">
                    <label for="email">email</label>

                    @csrf

                    <input type="email" name="email" class="form-control" placeholder="enter your email">
                </div>
                
                <div class="form-group">
                    <label for="employer_no">employer_no</label>

                    <input type="text" name="employer_no" class="form-control" placeholder="enter your employee number">
                </div>

                                <div class="form-group">
                    <label for="phone_no">phone_no</label>

                    <input type="number" name="phone_no" class="form-control" placeholder="enter your phone number">
                </div>

                <div class="form-group">
                    <label for="password">password</label>

                    <input type="password" name="password" class="form-control" placeholder="enter your password">
                </div>
                <button class="btn btn-success">submit</button>
                <a href="login">Go back </a>
                
                
                
            </form>
        </div>
    </div>
</div>
@endsection
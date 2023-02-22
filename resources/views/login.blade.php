@extends('layout.base')

@section('title','Admin Login')

@section('content')
<h1 class="text-center text-info my-5">K E-Commerce Admin Login</h1>

<div class="d-flex justify-content-center">

        <form class="px-4 py-3">
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control rounded-0 is-invalid" id="phone" placeholder="Login" name="phone">
            <div class="form-text text-danger" id="phoneHelp">We'll never shared with your phone any one else</div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control rounded-0 is-invalid" id="password" placeholder="Password" name="password">
            <div class="form-text text-danger" id="passwordHelp">We'll never shared with your password any one else</div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-6">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>



</div>
@stop



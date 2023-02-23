@extends('layout.base')

@section('title','Admin Login')

@section('content')
<h1 class="text-center text-info my-5">K E-Commerce Admin Login</h1>

<div class="d-flex justify-content-center">

        <form class="col-md-4" method="post">
            @csrf
          <x-input name="phone" type="number" value="09300300300"/>
          <x-input name="password" type="password" />


          <div class="row justify-content-between">
            <div class="col-md-6">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>

</div>
@stop



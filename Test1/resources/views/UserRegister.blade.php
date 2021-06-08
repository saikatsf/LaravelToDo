{{---------- For Links ----------}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<title>Register Page</title>
@include('header')


<form class="form-inline container-fluid p-3" action="registerUser" method="POST">
    @csrf
    <div class="form-group m-1">
        <label class="sr-only" for="name">Enter your name:</label>
        <input type="text" class="form-control" id="name" name="uName">
        @error('uName')
            <p class="alert alert-danger mt-1">{{$message}}</p>
        @enderror
      </div>
    <div class="form-group m-1">
      <label class="sr-only" for="email">Email address:</label>
      <input type="text" class="form-control" id="email" name="uEmail">
      @error('uEmail')
        <p class="alert alert-danger mt-1">{{$message}}</p>
      @enderror
    </div>
    <div class="form-group m-1">
      <label class="sr-only" for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="uPassword">
      @error('uPassword')
        <p class="alert alert-danger mt-1">{{$message}}</p>
      @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary m-2">Create Account</button>
    </div>
</form>
<div class="text-center">
    <a href="Ulogin"> <button class="btn btn-success">Already Have An Account ? Log In</button></a>
</div>
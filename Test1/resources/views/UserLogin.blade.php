{{---------- For Links ----------}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<title>LogIN Page</title>
@include('header')


<form class="form-inline container-fluid p-3" method="POST" action="loginUser">
    @if(session()->get('message'))
    <p class="alert alert-danger mt-1">{{ session()->get('message') }}</p>
    @endif
    @csrf
    <div class="form-group m-1">
      <label class="sr-only" for="email">Email address:</label>
      <input type="email" class="form-control" name="uEmail" id="email">
      @error('uEmail')
        <p class="alert alert-danger mt-1">{{$message}}</p>
      @enderror
    </div>
    <div class="form-group m-1">
      <label class="sr-only" for="pwd">Password:</label>
      <input type="password" class="form-control" name="uPassword" id="pwd">
      @error('uPassword')
        <p class="alert alert-danger mt-1">{{$message}}</p>
      @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary m-2">Log In</button>
    </div>
</form>
<div class="text-center">
    <a href="Uregister"> <button class="btn btn-success">Create New Account</button></a>
</div>
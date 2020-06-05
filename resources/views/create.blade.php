@extends('layouts')
@section('content')
<br><h1 class="about">Create Your Account</h1>
<br><br><br><form action="/createsubmit" method="POST">
    @csrf
    <div class="form-group">
    <label for="name">Username: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
  </div>
    <div class="form-group">
    <label for="email">Email address: </label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="pwd">Password: </label>
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
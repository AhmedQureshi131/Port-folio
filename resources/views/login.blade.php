@extends('layouts')

    @section('content')
    <br><br><br><br><br><form action="/loginsubmit" method="POST">
    @csrf
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
    
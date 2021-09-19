@extends('master')
@section("content")
<div class="container custom-login">
  <div  class="raw">
    <div class="col-sm-4 col-sm-offset-4">
      <form action="">
        <div class="form-group">
          <label for="exampleInputEmail">Email Address</label>
          <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">   
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="email" class="form-control" id="exampleInputPassword" placeholder="Password">   
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    </div>
    
  </div>
</div>
@endsection
<!-- @extends('layout') -->
@section('content')

<div class="container custom-login">
    <div class="col-sm-4 col-sm-offset">
    <form aciton="login" method="POST">
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>


@endsection
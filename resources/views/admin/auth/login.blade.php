@extends('admin.layouts.master')

@section('title', 'Admin Login')

@section('admin_content')
<div class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <div class="h1"><b>Admin Login</b></div>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <form action="{{ route('admin.login') }}" method="post">
        @csrf
        <x-form.input-text
          icon="fas fa-envelope"
          type="email"
          name="email"
          class="form-control"
          placeholder="Enter your email"
        />
        
        <x-form.input-text
          icon="fas fa-lock"
          type="password"
          name="password"
          class="form-control"
          placeholder="Enter password" 
        />

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <x-form.button type="submit" class="btn btn-primary btn-block" btnText="Login"/>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <p class="mb-1">
        <a href="{{ route('admin.password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('admin.register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
@endsection


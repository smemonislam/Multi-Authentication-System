@extends('admin.layouts.master')

@section('title', 'Admin Register')

@section('admin_content')
<div class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <div class="h1"><b>Admin Register</b></div>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <form action="{{ route('admin.register') }}" method="POST">
        @csrf
        <x-form.input-text
          icon="fas fa-user"
          type="text"
          name="name"
          class="form-control"
          placeholder="Enter your name"
        />
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
          placeholder="Enter new password" 
        />

        <x-form.input-text
          icon="fas fa-lock"
          type="password"
          name="password_confirmation"
          class="form-control"
          placeholder="Confirm Password"          
        />
        
        
        <div class="row">
          <div class="col-8"></div>
          <!-- /.col -->
          <div class="col-4">
            <x-form.button type="submit" class="btn btn-primary btn-block" btnText="Register"/>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="{{ route('admin.login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</div>
@endsection
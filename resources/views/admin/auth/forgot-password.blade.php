@extends('admin.layouts.master')

@section('title', 'Admin Forgot Password')

@section('admin_content')
<div class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <div class="h1"><b>Admin Forgot Password</b></div>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      @if( session()->has('status') )
        <div class="alert alert-success">{{ session('status') }}</div>
      @endif
      <form action="{{ route('admin.password.email') }}" method="post">
        @csrf
        <x-form.input-text
          icon="fas fa-envelope"
          type="email"
          name="email"
          class="form-control"
          placeholder="Enter your email"
        />
        <div class="row">
          <div class="col-12">
            <x-form.button type="submit" class="btn btn-primary btn-block" btnText="Request new password"/>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="{{ route('admin.login') }}">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>
@endsection

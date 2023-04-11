@extends('admin.layouts.master')

@section('title', 'Admin Reset Password')

@section('admin_content')
<div class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <div class="h1"><b>Admin Reset Password</b></div>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      
      <form action="{{ route('admin.password.store') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <x-form.input-text
          icon="fas fa-envelope"
          type="email"
          name="email"
          class="form-control"
          :value="$request->email"
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
          <div class="col-12">
            <x-form.button type="submit" class="btn btn-primary btn-block" btnText="Change password"/>
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
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Change User info') }}</div>
          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <div style="padding-bottom: 5px; font-weight: bold;">Change Password</div>

            {!! Form::model($user, ['method'=>'POST','route'=>['updatepassword', $user->id]])  !!}
            <div class="row" style="padding-bottom: 1px;">
              <div class="col-lg-3">{!! Form::label('old_password', 'oud wachtwoord:') !!}</div>
              <div class="col-lg-3">{!! Form::password('old_password') !!}</div>
            </div>
            <div class="row" style="padding-bottom: 1px;">
              <div class="col-lg-3">{!! Form::label('password', 'nieuw wachtwoord:') !!}</div>
              <div class="col-lg-3">{!! Form::password('password') !!}</div>
            </div>
            <div class="row" style="padding-bottom: 1px;">
              <div class="col-lg-3">{!! Form::label('controle_password', 'controle nieuw wachtwoord:') !!}</div>
              <div class="col-lg-3">{!! Form::password('controle_password') !!}</div>
            </div>
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-3"><button type="submit" name="button">save</button></div>
            </div>
            {!! Form::close() !!}
          </br>
          </br>
          <div style="padding-bottom: 5px; font-weight: bold;">Change Username</div>
            {!! Form::model($user, ['method'=>'POST','route'=>['updateusername', $user->id]])  !!}
            <div class="row">
              <div class="col-lg-3">{!! Form::label('UserName', 'Nieuwe Gebruikersnaam:') !!}</div>
              <div class="col-lg-3">{!! Form::text('UserName') !!}</div>
            </div>
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-3"><button type="submit" name="button">save</button></div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

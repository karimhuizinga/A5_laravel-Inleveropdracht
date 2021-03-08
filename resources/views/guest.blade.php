@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Gasten Pagina') }}</div>
          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <p style="font-weight: bold;">Vind jou favoriete band!</p>
            <div class="row">
              {!! Form::open(['method'=>'GET','url'=>'/bands/','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                    <div class="input-group custom-search-form">
                     <input style="margin: 20px; right:4.5%;" type="text" class="form-control" name="keyword" placeholder="Zoek...">
                    </div>
                {!! Form::close() !!}
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

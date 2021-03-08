@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Owned bands:
                    @foreach($bands as $band)
                    <br><a href="{{ route('bands.show',$band->id)}}">{{$band->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

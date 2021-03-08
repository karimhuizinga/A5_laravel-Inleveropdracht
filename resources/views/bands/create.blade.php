@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('bands') }}</div>

          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div><br />
          @endif
          <form method="post" action="{{ route('bands.store') }}" enctype='multipart/form-data'>
            @csrf
                <div class="form-group">
                  <label for="name">Naam:</label>
                  <input type="text" class="form-control" name="name"/>
                </div>

                <div class="form-group">
                  <label for="imgname">Image:</label>
                  <input type="file" class="form-control" name="imgname"/>
                </div>

                <div class="form-group">
                  <label for="admins">Admins:</label>
                  <input type="text" class="form-control" name="admins"/>
                </div>


                <div class="form-group">
                  <label for="band_leden">Band_leden:</label>
                  <input type="text" class="form-control" name="band_leden"/>
                </div>

                <div class="form-group">
                  <label for="band_omschrijving">Band_omschrijving:</label>
                  <input type="text" class="form-control" name="band_omschrijving"/>
                </div>

                <div class="form-group">
                  <label for="band_achtergrond_kleur">Band_achtergrond_kleur:</label>
                  <input type="text" class="form-control" name="band_achtergrond_kleur"/>
                </div>

                <div class="form-group">
                  <label for="band_letter_kleur">Band_letter_kleur:</label>
                  <input type="text" class="form-control" name="band_letter_kleur"/>
                </div>

                <div class="form-group">
                  <label for="youtube_video1">Youtube_video1:</label>
                  <input type="text" class="form-control" name="youtube_video1"/>
                </div>

                <div class="form-group">
                  <label for="youtube_video2">Youtube_video2:</label>
                  <input type="text" class="form-control" name="youtube_video2"/>
                </div>

                <div class="form-group">
                  <label for="youtube_video3">Youtube_video3:</label>
                  <input type="text" class="form-control" name="youtube_video3"/>
                </div>

                <button type="submit" class="btn btn-primary">Toevoegen</button>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection

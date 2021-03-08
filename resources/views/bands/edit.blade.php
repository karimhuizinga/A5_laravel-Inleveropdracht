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
        <form method="post" action="{{ route('bands.update', $band->id)}}" enctype='multipart/form-data'>
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" class="form-control" name="name" value="{{ $band->name }}" />
            </div>

            <div class="form-group">
              <label for="imgname">Image:</label>
              <input type="text" class="form-control" name="imgname" value="{{ $band->imgname }}" />
              </div>

            <div class="form-group">
                <label for="admins">Admin toevoegen:</label>
                <input type="text" class="form-control" name="admins" value="{{ $band->admins }}" />
              </div>

            <div class="form-group">
                <label for="band_leden">Band leden:</label>
                <input type="text" class="form-control" name="band_leden" value="{{ $band->band_leden }}" />
            </div>

            <div class="form-group">
                <label for="band_omschrijving">Band omschrijving:</label>
                <input type="text" class="form-control" name="band_omschrijving" value="{{ $band->band_omschrijving }}" />
            </div>

            <div class="form-group">
                <label for="band_achtergrond_kleur">Band achtergrond kleur:</label>
                <input type="text" class="form-control" name="band_achtergrond_kleur" value="{{ $band->band_achtergrond_kleur }}" />
            </div>

            <div class="form-group">
                <label for="band_letter_kleur">Band letter kleur:</label>
                <input type="text" class="form-control" name="band_letter_kleur" value="{{ $band->band_letter_kleur }}" />
            </div>

            <div class="form-group">
                <label for="youtube_video1">Youtube video1:</label>
                <input type="text" class="form-control" name="youtube_video1" value="{{ $band->youtube_video1 }}" />
            </div>

            <div class="form-group">
                <label for="youtube_video2">Youtube video2:</label>
                <input type="text" class="form-control" name="youtube_video2" value="{{ $band->youtube_video2 }}" />
            </div>

            <div class="form-group">
                <label for="youtube_video3">Youtube video3:</label>
                <input type="text" class="form-control" name="youtube_video3" value="{{ $band->youtube_video3 }}" />
            </div>

            <button type="submit" class="btn btn-primary">Aanpassen</button>
          </form>
    </div>
</div>
@endsection

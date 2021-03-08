@extends('layouts.app')

@section('content')
<div class="col-sm-12">
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/show.css') }}" />
    <div class="title">
      <t>{{$band->name}}</t>
    </div>
  </head>
  <body class="show">
    </br>
      <div class="row">
        <center><img src = "/storage/cover_images/{{$band->imgname}}" height="100%" width="100%"></center>
      </div>
      <div class="column">
        <p>{{$band->band_omschrijving}} <br><br>
            Band Leden: {{$band->band_leden}}
          </p>
      </div>
      <?php
      $PartYtCodeLink1 = substr("{$band->youtube_video1}",-11);
      $FullYtCodeLink1 = "https://www.youtube.com/embed/$PartYtCodeLink1";

      $PartYtCodeLink2 = substr("{$band->youtube_video2}",-11);
      $FullYtCodeLink2 = "https://www.youtube.com/embed/$PartYtCodeLink2";

      $PartYtCodeLink3 = substr("{$band->youtube_video3}",-11);
      $FullYtCodeLink3 = "https://www.youtube.com/embed/$PartYtCodeLink3";
       ?>
      <div class="iframe">
        <iframe width="100%" height="35%" src="{{$FullYtCodeLink1}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="iframe">
        <iframe width="100%" height="35%" src="{{$FullYtCodeLink2}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="iframe">
        <iframe width="100%" height="35%" src="{{$FullYtCodeLink3}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </body>

</html>
@endsection
<style>
  body{
    color: {{$band->band_letter_kleur}}!important;
    background-color: {{$band->band_achtergrond_kleur}}!important;
  }
  </style>

@extends('layouts.app')

@section('content')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
  @if (Auth::check())
  <a style="margin: 19px; position:relative; right:4.5%;" href="{{ route('bands.create')}}" class="btn btn-primary">Band toevoegen</a>
  @endif
 </div>
 <div class="row">
 <br></br>{!! Form::open(['method'=>'GET','url'=>'/bands/','class'=>'navbar-form navbar-left','role'=>'search'])  !!}</br>
         <div class="input-group custom-search-form">
          <input type="text" class="form-control" name="keyword" placeholder="Zoek...">
           <span class="input-group-btn">
             <button class="btn btn-default-sm" type="submit">
               <i class="fa fa-search"><span class="glyphicon glyphicon-search" />
             </button>
           </span>
         </div>
     {!! Form::close() !!}
   </div>
   <div class="row">
     <div class="col-sm-12">
    <h1 class="display-3">Bands</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Naam</td>
          <td>Image</td>
          <td>Admins</td>
          <td>Band_leden</td>
          <td>Band_omschrijving</td>
          <td colspan = 2>Acties</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bands as $band)
        <tr>
            <td>{{$band->name}}</td>
            <td>
            @if ($band->imgname!="")
              <img src = "/storage/cover_images/{{$band->imgname}}" height="50px">
            @endif
            </td>
            <td>
              @foreach($band->users as $admin)
                {{$admin->name}}<br>
              @endforeach
            </td>
            <td>{{$band->band_leden}}</td>
            <td>{{$band->band_omschrijving}}</td>
            <td>
                <a style="width: 100%" href="{{ route('bands.show',$band->id)}}" class="btn btn-primary">Bekijken</a><br><br>
                @if ($band->isAdmin())
                <a style="width: 100%" href="{{ route('bands.edit',$band->id)}}" class="btn btn-primary">Aanpassen</a>
                @endif
            </td>
            <td>
                <form action="{{ route('bands.destroy', $band->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  @if ($band->isAdmin())
                  <button class="btn btn-danger" type="submit">Verwijderen</button>
                      @endif
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

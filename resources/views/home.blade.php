{{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')

@section('title')
home
@endsection

@section('yeld1')
<h1>
    HOMEPAGE
    @dump($trains)

    
</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Azienda</th>
        <th scope="col">stazione_partenza</th>
        <th scope="col">stazione_arrivo</th>
        <th scope="col">orario_partenza</th>
        <th scope="col">orario_arrivo</th>
        <th scope="col">codice_treno</th>
        <th scope="col">numero_carrozze</th>
        <th scope="col">in_orario</th>
        <th scope="col">cancellato</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
          <th scope="row">{{$train->id}}</th>
          <td>{{$train->azienda}}</td>
          <td>{{$train->stazione_partenza}}</td>
          <td>{{$train->stazione_arrivo}}</td>
          <td>{{$train->orario_partenza}}</td>
          <td>{{$train->orario_arrivo}}</td>
          <td>{{$train->codice_treno}}</td>
          <td>{{$train->numero_carrozze}}</td>
          <td>{{$train->in_orario ? 'si':'no'}}</td>
          <td>{{$train->cancellato ? 'si':'no'}}</td>
        </tr>
            
        @endforeach
    </tbody>
  </table>
@endsection

@section('content')
<p>
    content
</p>
@endsection


{{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')

{{-- title yeld --}}
@section('title')
page2
@endsection

{{-- first yeld --}}
@section('yeld1')
<h1>
    SECOND PAGE
</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Azienda</th>
        <th scope="col">stazione_partenza</th>
        <th scope="col">stazione_arrivo</th>
        <th scope="col">data_partenza</th>
        <th scope="col">data_arrivo</th>
        <th scope="col">prezzo</th>
        <th scope="col">descrizione</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($packages as $pack)
        <tr>
          <th scope="row">{{$pack->id}}</th>
          <td>{{$pack->azienda}}</td>
          <td>{{$pack->stazione_partenza}}</td>
          <td>{{$pack->stazione_arrivo}}</td>
          <td>{{$pack->data_partenza}}</td>
          <td>{{$pack->data_arrivo}}</td>
          <td>{{$pack->prezzo}}$</td>
          <td>{{$pack->descrizione}}</td>
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




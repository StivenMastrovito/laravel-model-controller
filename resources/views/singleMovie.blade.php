@extends('layouts.DefaultLayout')
<div class="card text-center">
  <div class="card-header">
    FILM CLICCATO
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$movie['original_title']}}</h5>
    <p class="card-text">{{$movie['nationality']}}</p>
  </div>
  <div class="card-footer text-body-secondary">
    {{$movie['date']}}
  </div>
</div>
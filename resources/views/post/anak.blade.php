@extends('layout.main')
@section('title', 'Poliklinik Anak')
@section('content')
<div class="container mt-5 pt-5">
  <div class="text-left p-4 bg-success text-light">
    <h2>Poliklinik</h2>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="black-text" href="{{url('/')}}" style="text-decoration:none;">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Poli Anak</li>
    </ol>
  </nav>
  <div class="container">
    <h2>
      Poli Anak
    </h2>
    <hr>
    <span>Post By Admin On 2020.</span>
  </div>
</div>
@endsection
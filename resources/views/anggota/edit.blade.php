@extends('adminlte::page')

@section('title', 'Anggota')

@section('content_header')
<h1>Anggota</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Anggota</h3>
      <div class="card-tools">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
        {{-- <span class="badge badge-primary">Label</span> --}}
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

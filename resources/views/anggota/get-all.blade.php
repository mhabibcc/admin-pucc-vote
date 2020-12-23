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
        <form action="#" method="get">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." value="{{$request->q}}">
              <span class="input-group-btn">
                    <button type="submit" name="task" value="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
        {{-- <span class="badge badge-primary">Label</span> --}}
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Nama </th>
                    <th scope="col">username </th>
                    <th scope="col">Email </th>
                    <th scope="col">Aksi </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0?>
                @foreach ($anggota  as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ route('anggota.edit', base64_encode($item->id))}}" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        {{$anggota}}
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

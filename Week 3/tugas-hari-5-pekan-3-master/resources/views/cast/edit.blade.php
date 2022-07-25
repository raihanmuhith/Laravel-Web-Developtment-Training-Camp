@extends('layout.master')

@section('title')
    Halaman Edit Cast
@endsection

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Cast {{$cast->id}}</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="/cast/{{$cast->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="box-body">
        <div class="form-group">
          <label for="InputNama">Nama</label>
          <input type="text" class="form-control" id="InputNama" value="{{ old('nama',$cast->nama) }}" placeholder="Masukkan Nama" name="nama">
          @error('nama')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="InputUmur">Umur</label>
          <input type="text" class="form-control" id="InputUmur" value="{{ old('umur',$cast->umur) }}" placeholder="Umur" name="umur">
          @error('umur')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label for="InputBio">Biodata</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name="bio">{{$cast->bio}}</textarea>
            @error('biodata')
               <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="/cast" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
  </div>
@endsection
@extends('layout.master')
@section('title')
    Detail Cast
@endsection

@section('content')
    <label for="nama">Nama</label>
    <input class="form-control" id="disabledInput" type="text" placeholder="{{$cast->nama}}" disabled>
    <label class="mt-2" for="Umur">Umur</label>
    <input class="form-control" id="disabledInput" type="text" placeholder="{{$cast->umur}}" disabled>
    <label class="mt-2" for="Biodata">Biodata</label>
    <input class="form-control" id="disabledInput" type="text" placeholder="{{$cast->bio}}" disabled>
    <a href="/cast" class="btn btn-primary mt-4">Kembali</a>
@endsection
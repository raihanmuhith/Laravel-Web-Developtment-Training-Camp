@extends('layout.master')

@section('title')
    Halaman Cast Table
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
    <a href="/cast/create">
        <button type="button" class="btn btn-primary mb-3">
            <i class="fas fa-plus mr-2"></i>Create new Cast
        </button>
    </a>
      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif
      <h3 class="box-title">Cast Table</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Nama</th>
                <th>Umur</th>
                <th style="width: 40px">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $c)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$c->nama}}</td>
                    <td>{{$c->umur}}</td>
                    <td style="display: flex;">
                        <a href="/cast/{{$c->id}}/edit" class="btn btn-primary mr-2">Update</a>
                        <form action="/cast/{{$c->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mr-2">Delete</button>
                        </form>
                        <a href="/cast/{{$c->id}}" class="btn btn-secondary">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">No data has been created</td>
                </tr>
            @endforelse
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
    {{-- <div class="box-footer clearfix">
      <ul class="pagination pagination-sm no-margin pull-right">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">»</a></li>
      </ul>
    </div> --}}
  </div>
@endsection
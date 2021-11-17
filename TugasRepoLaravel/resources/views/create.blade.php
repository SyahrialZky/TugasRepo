@extends('layouts.master')
@section('content')

<div class="table-responsive">
    <form action="{{ url('myTables') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
          <input type="email" class="form-control"  >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
            <input type="email" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
            <input type="email" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
            <input type="email" class="form-control"  >
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
  @endsection
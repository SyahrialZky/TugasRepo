@extends('layouts.master')
@section('content')
<div class="container">
  <a href="{{ url('table/create') }}" class="btn btn-success btn-sm float-right mb-3">Tambah Data</a>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover table-condensed">
      <thead>
        <tr>
          <th><strong>No</strong></th>
          <th><strong>Nama Barang</strong></th>
          <th><strong>Deskripsi</strong></th>
          <th><strong>Harga Barang</strong></th>
          <th><strong>Jumlah Barang</strong></th>
          <th><strong>Aksi</strong></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($rial as $item)
              
         
        <tr>
          <td> {{ $loop -> iteration }} </td>
          <td> {{ $item -> nama_produk }} </td>
          <td> {{ $item -> deskripsi }} </td>
          <td> {{ $item -> harga_barang }} </td>
          <td> {{ $item -> jumlah_barang }} </td>
         <td> <a href="{{ route('hapusBarang', $item->id) }}" class="btn btn-danger">Delete</a>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection
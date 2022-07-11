@extends('layout.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/store-pengunjung">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1">No Kamar</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_kamar" placeholder="No Kamar" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Kamar</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Nama Kamar" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Pengunjung</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pengunjung" placeholder="No Kamar" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Fasilitas</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="fasilitas" placeholder="No Kamar" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </form>
    </div>
  </div>
@endsection
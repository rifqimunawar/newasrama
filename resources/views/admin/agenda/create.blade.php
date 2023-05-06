@section('title') {{ 'Agenda' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Agenda Menejemen </h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kegiatan</h6>
    </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form action="/admin/agenda/store" method="post">
              @csrf
            
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Hari</label>
                <select class="form-select" aria-label="Default select example" name="hari">
                  <option >-- Pilih Hari --</option>
                  <option value="senin">Senin</option>
                  <option value="selasa">Selasa</option>
                  <option value="rabu">Rabu</option>
                  <option value="kamis">Kamis</option>
                  <option value="jumat">Jum'at</option>
                </select>
                {{-- <input type="text" class="form-control" id="exampleFormControlInput1" name="hari"> --}}
              </div>
            
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Waktu Kegiatan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="waktu">
              </div>
            
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="kegiatan">
              </div>
              
              <div class="my-3">
                <a href="/admin/agenda" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
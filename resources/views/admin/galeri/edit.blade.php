@section('title') {{ 'Edit Galeri' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Galeri Manajemen </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Gambar</h6>
        </div>
        <div class="card-body">

          <form action="/admin/galeri/{{ $edit->id }}" method="post" enctype="multipart/form-data" >
            @method('put')
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Judul Gambar</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="{{ $edit->judul }}" >
            </div>

            <div class="my-3">
              <label for="img">Gambar saat ini</label><br>
              <img src="{{ asset('storage/img/'.$edit['img']) }}" width="200" class="img-fluid img-thumbnail">
            </div>

            <div class="mb-3">
              <label for="img" class="form-label">Pilih Gambar</label>
              <input class="form-control" type="file" id="formFile" name="img" value="{{ $edit->img }}">
            </div>

            <div class="my-3">
              <a href="/admin/galeri" class="btn btn-warning">Kembali</a>
              <button type="submit" class="btn btn-success">Simpan</button>
          </div>

          </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection
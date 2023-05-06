@section('title') {{ 'Edit Kamar' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kamar Manajemen </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kamar</h6>
        </div>
        <div class="card-body">

          <form action="/admin/kamar/{{ $edit->id }}" method="post" enctype="multipart/form-data" >
            @method('put')
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Edit Nama Kamar</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="kamar" value="{{ $edit->kamar }}">
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
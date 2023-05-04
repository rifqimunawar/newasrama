@section('title') {{ 'Edit Team' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Pengajar </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Pengajar</h6>
        </div>
        <div class="card-body">

          <form action="/admin/team/{{ $edit->id }}" method="post" enctype="multipart/form-data" >
            @method('put')
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Penghuni</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{ $edit->nama }}" >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nomor Kamar</label>
              <select name="posisi" class="form-select"" required aria-label="posisi">
                <option value="Lantai 1 | 1A" @if ( $edit->posisi == "Lantai 1 | 1A" ) selected @endif>Lantai 1 | 1A</option>
                <option value="Lantai 1 | 1B" @if ( $edit->posisi == "Lantai 1 | 1B" ) selected @endif>Lantai 1 | 1B</option>
                <option value="Lantai 1 | 1C" @if ( $edit->posisi == "Lantai 1 | 1C" ) selected @endif>Lantai 1 | 1C</option>
                <option value="Lantai 1 | 1D" @if ( $edit->posisi == "Lantai 1 | 1D" ) selected @endif>Lantai 1 | 1D</option>
                <option value="Lantai 1 | 1E" @if ( $edit->posisi == "Lantai 1 | 1E" ) selected @endif>Lantai 1 | 1E</option>
                <option value="Lantai 1 | 1F" @if ( $edit->posisi == "Lantai 1 | 1F" ) selected @endif>Lantai 1 | 1F</option>
                <option value="Lantai 1 | 1G" @if ( $edit->posisi == "Lantai 1 | 1G" ) selected @endif>Lantai 1 | 1G</option>
                <option value="Lantai 1 | 1H" @if ( $edit->posisi == "Lantai 1 | 1H" ) selected @endif>Lantai 1 | 1H</option>
                <option value="Lantai 1 | 1I" @if ( $edit->posisi == "Lantai 1 | 1I" ) selected @endif>Lantai 1 | 1I</option>
                <option value="Lantai 1 | 1J" @if ( $edit->posisi == "Lantai 1 | 1J" ) selected @endif>Lantai 1 | 1J</option>

                <option value="Lantai 2 | 2A" @if ( $edit->posisi == "Lantai 2 | 2A" ) selected @endif>Lantai 2 | 2A</option>
                <option value="Lantai 2 | 2B" @if ( $edit->posisi == "Lantai 2 | 2B" ) selected @endif>Lantai 2 | 2B</option>
                <option value="Lantai 2 | 2C" @if ( $edit->posisi == "Lantai 2 | 2C" ) selected @endif>Lantai 2 | 2C</option>
                <option value="Lantai 2 | 2D" @if ( $edit->posisi == "Lantai 2 | 2D" ) selected @endif>Lantai 2 | 2D</option>
                <option value="Lantai 2 | 2E" @if ( $edit->posisi == "Lantai 2 | 2E" ) selected @endif>Lantai 2 | 2E</option>
                <option value="Lantai 2 | 2F" @if ( $edit->posisi == "Lantai 2 | 2F" ) selected @endif>Lantai 2 | 2F</option>
                <option value="Lantai 2 | 2G" @if ( $edit->posisi == "Lantai 2 | 2G" ) selected @endif>Lantai 2 | 2G</option>
                <option value="Lantai 2 | 2H" @if ( $edit->posisi == "Lantai 2 | 2H" ) selected @endif>Lantai 2 | 2H</option>
                <option value="Lantai 2 | 2I" @if ( $edit->posisi == "Lantai 2 | 2I" ) selected @endif>Lantai 2 | 2I</option>
                <option value="Lantai 2 | 2J" @if ( $edit->posisi == "Lantai 2 | 2J" ) selected @endif>Lantai 2 | 2J</option>

                <option value="Lantai 3 | 3A" @if ( $edit->posisi == "Lantai 3 | 3A" ) selected @endif>Lantai 3 | 3A</option>
                <option value="Lantai 3 | 3B" @if ( $edit->posisi == "Lantai 3 | 3B" ) selected @endif>Lantai 3 | 3B</option>
                <option value="Lantai 3 | 3C" @if ( $edit->posisi == "Lantai 3 | 3C" ) selected @endif>Lantai 3 | 3C</option>
                <option value="Lantai 3 | 3D" @if ( $edit->posisi == "Lantai 3 | 3D" ) selected @endif>Lantai 3 | 3D</option>
                <option value="Lantai 3 | 3E" @if ( $edit->posisi == "Lantai 3 | 3E" ) selected @endif>Lantai 3 | 3E</option>
                <option value="Lantai 3 | 3F" @if ( $edit->posisi == "Lantai 3 | 3F" ) selected @endif>Lantai 3 | 3F</option>
                <option value="Lantai 3 | 3G" @if ( $edit->posisi == "Lantai 3 | 3G" ) selected @endif>Lantai 3 | 3G</option>
                <option value="Lantai 3 | 3H" @if ( $edit->posisi == "Lantai 3 | 3H" ) selected @endif>Lantai 3 | 3H</option>
                <option value="Lantai 3 | 3I" @if ( $edit->posisi == "Lantai 3 | 3I" ) selected @endif>Lantai 3 | 3I</option>
                <option value="Lantai 3 | 3J" @if ( $edit->posisi == "Lantai 3 | 3J" ) selected @endif>Lantai 3 | 3J</option>
            </select><br>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No Hp</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="hp" value="{{ $edit->hp }}" >
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kampus</label>
              <input type="text" class="form-control" id="exampleFormControlInput1"  name="kampus" value="{{ $edit->kampus }}">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Domisili</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="domisili" value="{{ $edit->domisili }}">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Pembayaran</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" name="pembayaran" placeholder="Rp"value="{{ $edit->pembayaran }}">
            </div>

            
            <div class="my-3">
              <label for="img">Foto Penghuni saat ini</label><br>
              <img src="{{ asset('storage/img/'.$edit['img']) }}" width="200" class="img-fluid img-thumbnail">
            </div>


            <div class="mb-3">
              <label for="img" class="form-label">Pilih Foto</label>
              <input class="form-control" type="file" id="formFile" name="img" value="{{ $edit->img }}">
            </div>

            <div class="my-3">
              <a href="/admin/team" class="btn btn-warning">Kembali</a>
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
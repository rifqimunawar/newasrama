@section('title') {{ 'Tambah Penajar' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Penghuni</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah penghuni</h6>
        </div>
        <div class="card-body">

          <form action="/admin/team/store" method="post" enctype="multipart/form-data" >
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Penghuni</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
            </div>

            <div class="mb-3">
              <label for="posisi">Nomor Kamar</label>
              <select name="posisi" class="form-select"" required aria-label="posisi">
                  <option value="Lantai 1 | 1A">Lantai 1 | 1A</option>
                  <option value="Lantai 1 | 1B">Lantai 1 | 1B</option>
                  <option value="Lantai 1 | 1C">Lantai 1 | 1C</option>
                  <option value="Lantai 1 | 1D">Lantai 1 | 1D</option>
                  <option value="Lantai 1 | 1E">Lantai 1 | 1E</option>
                  <option value="Lantai 1 | 1F">Lantai 1 | 1F</option>
                  <option value="Lantai 1 | 1G">Lantai 1 | 1G</option>
                  <option value="Lantai 1 | 1H">Lantai 1 | 1H</option>
                  <option value="Lantai 1 | 1I">Lantai 1 | 1I</option>
                  <option value="Lantai 1 | 1J">Lantai 1 | 1J</option>

                  <option value="Lantai 2 | 2A">Lantai 2 | 2A</option>
                  <option value="Lantai 2 | 2B">Lantai 2 | 2B</option>
                  <option value="Lantai 2 | 2C">Lantai 2 | 2C</option>
                  <option value="Lantai 2 | 2D">Lantai 2 | 2D</option>
                  <option value="Lantai 2 | 2E">Lantai 2 | 2E</option>
                  <option value="Lantai 2 | 2F">Lantai 2 | 2F</option>
                  <option value="Lantai 2 | 2G">Lantai 2 | 2G</option>
                  <option value="Lantai 2 | 2H">Lantai 2 | 2H</option>
                  <option value="Lantai 2 | 2I">Lantai 2 | 2I</option>
                  <option value="Lantai 2 | 2J">Lantai 2 | 2J</option>

                  <option value="Lantai 3 | 3A">Lantai 3 | 3A</option>
                  <option value="Lantai 3 | 3B">Lantai 3 | 3B</option>
                  <option value="Lantai 3 | 3C">Lantai 3 | 3C</option>
                  <option value="Lantai 3 | 3D">Lantai 3 | 3D</option>
                  <option value="Lantai 3 | 3E">Lantai 3 | 3E</option>
                  <option value="Lantai 3 | 3F">Lantai 3 | 3F</option>
                  <option value="Lantai 3 | 3G">Lantai 3 | 3G</option>
                  <option value="Lantai 3 | 3H">Lantai 3 | 3H</option>
                  <option value="Lantai 3 | 3I">Lantai 3 | 3I</option>
                  <option value="Lantai 3 | 3J">Lantai 3 | 3J</option>
              </select><br>
          </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No Hp</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" name="hp">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kampus</label>
              <input type="text" class="form-control" id="exampleFormControlInput1"  name="kampus">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Domisili</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="domisili">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Pembayaran</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" name="pembayaran" placeholder="Rp">
            </div>
            <div class="mb-3">
              <label for="img" class="form-label">Pilih Foto Profile</label>
              <input class="form-control" type="file" id="formFile" name="img">
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
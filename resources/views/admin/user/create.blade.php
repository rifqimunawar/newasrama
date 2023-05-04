@section('title') {{ 'Tambah Admin' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Admin</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Admin</h6>
        </div>
        <div class="card-body">

          <form action="/admin/user/store" method="post">
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Admin</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Role</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="role_id" placeholder="1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
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
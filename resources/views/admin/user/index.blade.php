@section('title') {{ 'Data Admin' }}@endsection
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
            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
        </div>
        <div class="card-body">
          <a href="/admin/user/create" class="btn btn-primary my-3" >Tambah Admin</a>
            <div class="table-responsive">

              <div class="mb-3">
                <form action="/admin/team" method="get">
                  <input type="search" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search...">
                </form>
              </div>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Nama</td>
                        <td class="text-center">Email Hp</td>
                        <td class="text-center">Password</td>
                        <td class="text-center">Aksi</td>
                    </tr>
                    @foreach ($user as $lis)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $lis['name'] }}</td>
                        <td>{{ $lis['email'] }}</td>
                        <td>{{ $lis['password'] }}</td>
                        <td class="text-center btn-group">
                            <a href="/admin/team/{{ $lis->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('user.destroy', $lis->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm mx-2" onclick="return confirm
                              ('Apakah Anda yakin ingin menghapus admin ini?')">Hapus</button>
                          </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection
@section('title') {{ 'Home' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Home</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Gambar Home</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Judul</td>
                        <td>Deskripsi</td>
                        {{-- <td class="text-center">link</td> --}}
                        <td class="text-center">Gambar</td>
                        <td class="text-center"> Aksi</td>
                    </tr>
                    @foreach ($list as $lis)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $lis['judul'] }}</td>
                        <td>{{ $lis['deskripsi'] }}</td>
                        {{-- <td class="text-center">{{ $lis['link'] }}</td> --}}
                        <td class="text-center">
                            <img src="{{ asset('storage/img/'.$lis['img']) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                        </td>
                        <td class="text-center">
                            <a href="/admin/home/{{ $lis->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
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
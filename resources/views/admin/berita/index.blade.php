@section('title') {{ 'Berita' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Berita Manajemen </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Berita</h6>
        </div>
        <div class="card-body">
          <a href="/admin/berita/create" class="btn btn-primary my-3" >Tambah Gambar</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Judul</td>
                        <td class="text-center">Gambar</td>
                        <td class="text-center"> Aksi</td>
                    </tr>
                    {{-- @foreach ($list as $lis)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $lis['judul'] }}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/img/'.$lis['img']) }}" width="100" class="img-fluid img-thumbnail" style="max-height: 60px">
                        </td>
                        <td class="text-center">
                          <div class="btn-group" >
                            <div class="btn">
                              <a href="/admin/galeri/{{ $lis->id }}/edit" class="btn btn-warning btn-sm mx-2">Edit</a>
                            </div>
                            <div class="btn">
                              <form action="{{ route('galeri.destroy', $lis->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-2" onclick="return confirm
                                ('Apakah Anda yakin ingin menghapus gambar ini?')">Hapus</button>
                            </form>
                          </div>
                        </td>
                    </tr>
                    @endforeach --}}
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
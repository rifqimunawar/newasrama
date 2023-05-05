@section('title') {{ 'Kamar' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kamar Menejemen </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kamar dan Penghuni</h6>
        </div>
        <div class="card-body">
          <a href="/admin/kamar/create" class="btn btn-primary my-3" >Tambah Kamar</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Kamar</td>
                        <td class="text-center">Penghuni</td>
                        <td class="text-center">Kegitan</td>
                        <td class="text-center">Keterangan</td>
                        <td class="text-center"> Aksi </td>
                    </tr>
                    @foreach ($kamar as $lis)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $lis['kamar'] }}</td>
                        {{-- <td>{{ $lis['user-'] }}</td> --}}
                        <td>{{ $lis['kegiatan'] }}</td>
                        <td>{{ $lis['keterangan'] }}</td>
                        <td class="text-center">
                          <div class="btn-group" >
                            <div class="btn">
                              <a href="/admin/kamar/{{ $lis->id }}/edit" class="btn btn-warning btn-sm mx-2">Edit</a>
                            </div>
                            <div class="btn">
                              <form action="{{ route('kamar.destroy', $lis->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-2" onclick="return confirm
                                ('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</button>
                            </form>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection
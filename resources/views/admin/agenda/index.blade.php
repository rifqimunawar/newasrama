@section('title') {{ 'Agenda' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Agenda Menejemen </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jadwal Kegiatan</h6>
        </div>
        <div class="card-body">
          <a href="/admin/agenda/create" class="btn btn-primary my-3" >Tambah Kegiatan</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Hari</td>
                        <td class="text-center">Waktu</td>
                        <td class="text-center">Kegitan</td>
                        <td class="text-center">Keterangan</td>
                        <td class="text-center"> Aksi </td>
                    </tr>
                    @foreach ($agenda as $lis)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $lis['hari'] }}</td>
                        <td>{{ $lis['waktu'] }}</td>
                        <td>{{ $lis['kegiatan'] }}</td>
                        <td>{{ $lis['keterangan'] }}</td>
                        <td class="text-center">
                          <div class="btn-group" >
                            <div class="btn">
                              <a href="/admin/agenda/{{ $lis->id }}/edit" class="btn btn-warning btn-sm mx-2">Edit</a>
                            </div>
                            <div class="btn">
                              <form action="{{ route('agenda.destroy', $lis->id) }}" method="POST">
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
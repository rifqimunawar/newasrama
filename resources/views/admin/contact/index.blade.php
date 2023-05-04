@section('title') {{ 'Contact' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Contact dan Pesan Menejemen</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pesan Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Pesan</td>
                        <td class="text-center"> Pengirim</td>
                        <td class="text-center">Email</td>
                        <td class="text-center">Aksi</td>
                    </tr>
                    @foreach ($list as $lis)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $lis['text'] }}</td>
                        <td>{{ $lis['nama'] }}</td>
                        <td>{{ $lis['email'] }}</td>
                        <td class="text-center">
                          <div class="btn-group">
                            <div class="btn">
                              <form action="{{ route('contact.destroy', $lis->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-2" onclick="return confirm
                                ('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</button>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection
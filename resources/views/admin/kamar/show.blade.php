@section('title') {{ 'Kamar' }}@endsection
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
            <h6 class="m-0 font-weight-bold text-primary">Penghuni Kamar {{ $kamar->kamar }}</h6>
        </div>
        <div class="card-body">

            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kampus</th>
                            <th>Domisili</th>
                            <th>Pembayaran</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kamar->users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->kampus }}</td>
                                <td>{{ $user->domisili }}</td>
                                <td>{{ $user->pembayaran }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/img/'.$user['img']) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-3">
              <a href="/admin/kamar" class="btn btn-warning">Kembali</a>
          </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection
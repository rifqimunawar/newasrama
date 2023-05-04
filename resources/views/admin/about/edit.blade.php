@section('title') {{ 'Edit Home' }}@endsection
@extends('admin.app')
@section('content')
<div class="container">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit About</h1>
        <p class="mb-4"></p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit About</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="/admin/about/{{ $edit->id }} " method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="my-3">
                            <label for="deskripsiabout">Deskripsi</label><br>
                            <input type="textarea" name="deskripsiabout" class="form-control" id="deskripsiabout" class="mb-3" value="{{ $edit->deskripsiabout }}" id="deskripsiabout" />
                        </div>

                        <div class="my-3">
                            <label for="link">Link Video</label><br>
                            <input type="textarea" name="link" class="form-control" id="link" class="mb-3" value="{{ $edit->link }}" id="link" />
                        </div>
                        <div class="my-3">
                            <label for="img">Gambar Saat Ini</label><br>
                            <img src="{{ asset('storage/img/'.$edit['img']) }}" width="300" class="img-fluid img-thumbnail" style="max-height: 300px">
                        </div>
                        

                        <div class="mb-3">
                          <label for="formFile" class="form-label">Ubah img</label>
                          <input class="form-control" type="file" id="formFile" name="img" >
                        </div>

                        <div class="my-3">
                            <a href="/admin" class="btn btn-warning">Kembali</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
@endsection

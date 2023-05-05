@section('title') {{ 'Edit Team' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Penghuni </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Penghuni</h6>
        </div>
        <div class="card-body">

          <form action="/admin/penghuni/{{$edit->id}}" method="post" enctype="multipart/form-data" >
            @method('put')
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Penghuni</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $edit->name }}" >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nomor Kamar</label>
              <select name="kamar_id" class="form-select" required aria-label="kamar_id">
                @foreach ($kamar as $item)
                <option value="{{ $item->id }}" @if ( $edit->kamar == "{{ $item->id }}" ) selected @endif>{{ $item->kamar }}</option>
                @endforeach
                {{-- <option value="Lantai 1 | 1A" @if ( $edit->posisi == "Lantai 1 | 1A" ) selected @endif>Lantai 1 | 1A</option> --}}
            </select><br>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No Hp</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="hp" value="{{ $edit->hp }}" >
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kampus</label>
              <input type="text" class="form-control" id="exampleFormControlInput1"  name="kampus" value="{{ $edit->kampus }}">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Domisili</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="domisili" value="{{ $edit->domisili }}">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Pembayaran</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" name="pembayaran" placeholder="Rp"value="{{ $edit->pembayaran }}">
            </div>

            
            <div class="my-3">
              <label for="img">Foto Penghuni saat ini</label><br>
              <img src="{{ asset('storage/img/'.$edit['img']) }}" width="200" class="img-fluid img-thumbnail">
            </div>


            <div class="mb-3">
              <label for="img" class="form-label">Pilih Foto</label>
              <input class="form-control" type="file" id="formFile" name="img" value="{{ $edit->img }}">
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
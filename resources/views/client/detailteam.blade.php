<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Penghuni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
    

    <h1 class="text-center pt-4 m-4">Kamar : {{ $kamaruser->kamar }}</h1>
   
    <div class="container p-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kampus</th>
                    <th>Domisili</th>
                    <th>Profile</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kamaruser->users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->kampus }}</td>
                        <td>{{ $user->domisili }}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/img/'.$user['img']) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-end m-4 p-4">
            <a href="/user" class="btn btn-warning">Kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>


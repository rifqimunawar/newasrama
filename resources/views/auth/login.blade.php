<!DOCTYPE html>
<html>
<head>
	
	<title>Asrama Baiturrahman</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&family=Viga&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('{{ asset('storage/img/asrama3.jpeg') }}');">

	<div class="overlay"></div>
  <form action="/login" method="post" class="box">
    @csrf
		<div class="header"style="background-image: url('{{ asset('storage/img/asrama3.jpeg') }}');">
			
			<p>Selamat Datang di Asrama Puteri Baiturrahman</p>
			
		</div>
		<div class="login-area">
			<input type="email" name="email" class="username" placeholder="Email">
			<input type="password" name="password" class="password" placeholder="Password"><br>
      <button type="submit" class="submit">Login</button>
		</div>
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: red; heigt:2rem; padding:10px; border-radius;10px">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
  </form>


	

</body> 
</html>

{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form action="/login" method="post">
              @csrf
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
              </div>
              @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              @endif

              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html> --}}

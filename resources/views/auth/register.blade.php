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
  <form action="/store" method="post" class="box">
    @csrf
		<div class="header"style="background-image: url('{{ asset('storage/img/asrama3.jpeg') }}');">
			
			<p>Selamat Datang di Asrama Puteri Baiturrahman</p>
			
		</div>
		<div class="login-area">
			<input type="name" name="name" class="username" placeholder="Nama Lengkap">
			<input type="email" name="email" class="username" placeholder="Email">
			<input type="password" name="password" class="password" placeholder="Password"><br>
      <button type="submit" class="submit">Register</button><br>
      <a href="/login" type="sumbit" class="sumbit" style="text-decoration: none">Kembali</a>
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

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

<form method="POST" action="{{ route('register') }}" class="box">>
  @csrf


  <div class="header"style="background-image: url('{{ asset('storage/img/asrama3.jpeg') }}');">
			
    <p>Selamat Datang di Asrama Puteri Baiturrahman</p>
    
  </div>

  <div class="login-area">
        <div>
          <input id="name" type="text" name="name" value="{{ old('name') }}" 
          required class="username" placeholder="Nama Lengkap">
          @error('name')
              <span>{{ $message }}</span>
          @enderror
        </div>
        <div>
          <input id="email" type="email" name="email" value="{{ old('email') }}" 
          required class="username" placeholder="Email"> 
          @error('email')
              <span>{{ $message }}</span>
          @enderror
      </div>
      <div>
        <input id="password" type="password" name="password" required
        class="username" placeholder="Password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
      </div>
      <div>
        <input id="password_confirmation" type="password" name="password_confirmation" required
        class="username" placeholder="Confirm Password">
      </div>
      <div>
        <select id="role_id" name="role_id" required class="username" placeholder="Role">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->role }}</option>
            @endforeach
        </select>
        @error('role_id')
            <span>{{ $message }}</span>
        @enderror
      </div>
      <div>
        <button type="submit" class="submit">{{ __('Register') }}</button>
      </div>
      <a href="/login" type="sumbit" class="sumbit" style="text-decoration: none">Kembali</a>
  </div>












</form>
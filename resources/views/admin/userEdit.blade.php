<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering</title>
    <link href="http://127.0.0.1:8000/images/logo.png" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <img src="http://127.0.0.1:8000/images/logo.png" alt="Logo" id="logo">
        <div class="login-form">
            <h2>Register</h2>
            @if(session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif
                <form method="POST" action="{{ url("/user/{$post->id}") }}" class="form-control">
                    @method('PATCH')
                    @csrf
                <div class="input-group">
                    <label for="name" class="form-label">Nama</label>
                    <input type="name" class="form-control" id="name" name="name" value="{{ $post->name }}">
                </div>
                <div class="input-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}">
                </div>
                <div class="input-group">
                    <label for="password" class="form-label">Role</label>
                    <input type="boolean" class="form-control" id="email_verified" name="email_verified" value="{{ $post->email_verified }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                <br><br>
            </form>
        </div>
    </div>
</body>
</html>

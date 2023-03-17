<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">FORM REGISTER MAHASISWA</h3>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('actionregister') }}" method="post">
            @csrf
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-archive"></i> NIM</label>
                    <input type="text" name="nim" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Nama</label>
                    <input type="text" name="nama" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-graduation-cap"></i> Jenjang</label>
                    <select name="jenjang" class="form-control form-control-lg">
                        <option disabled selected hidden>Pilih Jenjang</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><i class="fa fa-hashtag"></i> Jurusan</label>
                    <select name="jurusan" class="form-control form-control-lg">
                        <option disabled selected hidden>Pilih Jurusan</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        <option value="Manajemen Akuntansi">Manajemen Akuntansi</option>
                        <option value="Teknologi Komputer">Teknologi Komputer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button>
                <hr>
                <p class="text-center">Have been Account <a href="/login">Click Here!</a></p>
            </form>
        </div>
    </div>
</body>
</html>
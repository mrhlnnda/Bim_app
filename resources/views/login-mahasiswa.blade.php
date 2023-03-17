<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Login Application</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<style>
.splash-container {
    width: 100%;
    max-width: 375px;
    padding: 15px;
    margin: auto;
}

.splash-container .card-header {
    padding: 20px;
}

.splash-description {
    text-align: center;
    display: block;
    line-height: 20px;
    font-size: 20px;
    margin-top: 5px;
    padding-bottom: 10px;
}

.splash-title {
    text-align: center;
    display: block;
    font-size: 14px;
    font-weight: 300;
}

.splash-container .card-footer-item {
    padding: 12px 28px;
}
</style>
<body>
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center fa-5x"><i class="fas fa-user-circle"></i><span class="splash-description">FORM LOGIN</span>
        </div>
        <div class="card-body">
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{ session('error') }}  
        @endif
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
        <form action="{{ route('mahasiswa-login') }}" method="post" >
        @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg" name="user_id" id="user_id" type="text" placeholder="NIM" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                </div>
                <button class="btn btn-block btn-primary" type="submit">Login</button>
            </form>
        </div>
        <div class="card-footer bg-white text-center">
            <p>Belum Memiliki Akun? <a href="register" class="text-secondary">Register Disini!</a></p>
        </div>
    </div>
</div>
</body>
</html>
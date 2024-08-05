<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">BUAT AKUN ANDA</h1>
                                    </div>
                                    @if (session('success'))
                                    <div class="alert alert-success" style="margin-top: 20px;">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form method="POST" action="/input-login" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="user_form">Nama Anda</label>
                                        <input type="text" class="form-control" id="user_form" name="user_form" placeholder="ex. Alifia Andita Hanafi" required>
                                        @error('user_form')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email_form">Email Anda</label>
                                        <input type="text" class="form-control" id="email_form" name="email_form" placeholder="ex. alifia@gmail.com" required>
                                        @error('email_form')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pass_form">Password</label>
                                        <input type="password" class="form-control" id="pass_form" name="pass_form" required>
                                        @error('pass_form')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="button" style="margin-top: 30px">
                                        <div class="form-group">
                                            <a href="{{ route('public-login') }}">Sudah Punya Akun!</a>
                                        </div>
                                        <button type="submit" class="btn btn-success">SIMPAN</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

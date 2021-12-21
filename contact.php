<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact</title>
    <style>
    .row {
        padding-top: 30px;
    }

    .garis_kotak {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px 8px #888888;
    }

    .coba {
        margin-left: 120px;
        margin-top: 300px;
    }

    .input-group {
        height: 62px;
        width: 420px;
        padding-right: 30px;
        padding-top: 60px;
    }

    .garis_kotak {
        height: 600px;
        width: 480px;


    }

    .tombol_kirim {
        position: absolute;
    }

    .img1 {
        width: 320px;
        height: 320px;
        margin-top: 200px;
        ;
    }

    .img2 {
        margin-left: 140px;
        ;
        width: 400px;
        height: 400px;
    }

    .chat_button {
        position: fixed;
        width: 50px;
        height: 50px;
        bottom: 40px;
        right: 50px;

    }
    .modal-content{
        width: 350px;
        height: 570px;
        top: 230px;
        left: 826px;
        border-radius: 67px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light rounded shadow">
        <div class="container-fluid ms-5">
            <a class="navbar-brand" href="#">
                <img src="assets/logo/logo.png" alt="" width="120" height="54" class="d-inline-block align-text-top">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item ms-5">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link active" href="#">Kontak</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Bantuan</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="container">
                    <div class="row">
                        <div class="garis_kotak col-5 p-5">

                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Nama Depan"
                                    aria-label="Nama Depan">
                                <input type="text" class="form-control" placeholder="Nama Belakang"
                                    aria-label="Nama Belakang">
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Pesan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Detail Tambahan</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <div class="tombol_kirim input-group mt-5">
                                <button type="button" class="btn btn-warning" style="color:white;width:500px;"><b>Kirim
                                        Pesan</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <h1><b>Bagaimana kami membantu anda?</b></h1>
                            <p style="font-size:22px;">Dengan anda mengirim pesan tersebut kami akan membantu </br>anda
                                dengan sebaik baiknya.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <img class="img1" src="assets/img/bunder1.png">
                        </div>
                        <div class="col-3">
                            <img class="img2" src="assets/img/bunder2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="chat_button" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><img
                src="assets/img/Btn_hover.png" alt=""></a>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="livechat">
                        <div class="header-livechat text-center text-light" style="background: #EA8F06; border-radius: 62px 62px 0 0;">
                            <h1 class="py-3" style="font-size:24px; font-weight: bold;">LiveChat</h1>
                        </div>
                        <div class="top-bar">
                            <div class="logo circle" style="box-shadow: 4px;">
                                <img src="assets/logo/logo.png" alt="" style="width: 10%;">
                            </div>
                        </div>
                        <div class="main-page">

                        </div>
                        <div class="bottom-bar">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

@auth
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">TumbasTiket.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Ticket Kereta</a>
                    </li>
                </ul>
                <div class="nav-item">
                   <h6> {{ Auth::user()->name }}</h6>
                </div>
               
            </div>
        </div>
    </nav>

    <!-- Open Grid -->
    <!-- Grid Selamat Datang -->
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
          
                <h2>Selamat Datang  TumbasTiket.com</h2>
                Beli tiket kereta api online di TumbasTiket.com, terlengkap dan terpercaya. Cek harga tiket kereta api, promo, dan pemesanan tiket kereta api online.
                <br>

            </div>
            <div class="col">
            </div>
        </div>
        <!-- -->
        <!-- Cari Tiket -->
        <div class="row">
            <div class="col">
                <br>
                <h4>Cari Tiket</h4>
                <form action="/home/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal</label>
                        <input type="text" name="keberangkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas</label>
                        
                    <select class="form-select" aria-label="Default select example" name="kelas">
                        <option selected>Bisnis</option>
                        <option value="1">Premium</option>
                        <option value="2">Ekonomi</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Berangkat</label>
                        <input type="date" name="tanggal_berngkat" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Pulang</label>
                        <input type="date" name="tanggal_pulang" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Penumpang</label>
                        <input type="number" name="jumlah_penumpang" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Cari Tiket</button>
                </form>
                <br><br>
            </div>
            <!-- Tabel Semua Daftar Tiket -->
            <div class="col-10">
                <br>
                <h4>Daftar Tiket</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kereta</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Asal</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Tanggal Berangkat</th>
                            <th scope="col">Tanggal Pulang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Argo Wilis</td>
                            <td>Eksekutif</td>
                            <td>Bandung</td>
                            <td>Surabaya</td>
                            <td>2021-10-10</td>
                            <td>2021-10-10</td>
                            <td>Rp. 1.000.000</td>
                            <td><button type="button" class="btn btn-primary">Pesan</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Argo Wilis</td>
                            <td>Eksekutif</td>
                            <td>Bandung</td>
                            <td>Surabaya</td>
                            <td>2021-10-10</td>
                            <td>2021-10-10</td>
                            <td>Rp. 1.000.000</td>
                            <td><button type="button" class="btn btn-primary">Pesan</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Argo Wilis</td>
                            <td>Eksekutif</td>
                            <td>Bandung</td>
                            <td>Surabaya</td>
                            <td>2021-10-10</td>
                            <td>2021-10-10</td>
                            <td>Rp. 1.000.000</td>
                            <td><button type="button" class="btn btn-primary">Pesan</button></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
            </div>
        </div>
    </div>
    <!-- Close Gride -->


</body>

</html>
@endauth
@guest
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">TumbasTiket.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Ticket Kereta</a>
                    </li>
                </ul>
                <div class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}"><button type="button" class="btn btn-primary">Login</button></a>
                </div>
               
                <div class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('register') }}"><button type="button" class="btn btn-primary">Daftar</button></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Open Grid -->
    <!-- Grid Selamat Datang -->
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
          
                <h2>Selamat Datang  TumbasTiket.com</h2>
                Beli tiket kereta api online di TumbasTiket.com, terlengkap dan terpercaya. Cek harga tiket kereta api, promo, dan pemesanan tiket kereta api online.
                <br>

            </div>
            <div class="col">
            </div>
        </div>
        <!-- -->
        <!-- Cari Tiket -->
        <div class="row">
            <div class="col">
                <br>
                <h4>Cari Tiket</h4>
                <form action="/" method="POST">
                    @csrf 
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Kelas</option>
                        <option value="1">Eksekutif</option>
                        <option value="2">Bisnis</option>
                        <option value="3">Ekonomi</option>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tujuan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Berangkat</label>
                        <input type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Pulang</label>
                        <input type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Penumpang</label>
                        <input type="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Cari Tiket</button>
                </form>
                <br><br>
            </div>
            <!-- Tabel Semua Daftar Tiket -->
            <div class="col-10">
                <br>
                <h4>Daftar Tiket</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kereta</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Asal</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Tanggal Berangkat</th>
                            <th scope="col">Tanggal Pulang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Argo Wilis</td>
                            <td>Eksekutif</td>
                            <td>Bandung</td>
                            <td>Surabaya</td>
                            <td>2021-10-10</td>
                            <td>2021-10-10</td>
                            <td>Rp. 1.000.000</td>
                            <td><button type="button" class="btn btn-primary">Pesan</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Argo Wilis</td>
                            <td>Eksekutif</td>
                            <td>Bandung</td>
                            <td>Surabaya</td>
                            <td>2021-10-10</td>
                            <td>2021-10-10</td>
                            <td>Rp. 1.000.000</td>
                            <td><button type="button" class="btn btn-primary">Pesan</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Argo Wilis</td>
                            <td>Eksekutif</td>
                            <td>Bandung</td>
                            <td>Surabaya</td>
                            <td>2021-10-10</td>
                            <td>2021-10-10</td>
                            <td>Rp. 1.000.000</td>
                            <td><button type="button" class="btn btn-primary">Pesan</button></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
            </div>
        </div>
    </div>
    <!-- Close Gride -->


</body>

</html>
@endguest

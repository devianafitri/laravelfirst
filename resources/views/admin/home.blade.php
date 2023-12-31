<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="http://eprints.polbeng.ac.id/132/1.hassmallThumbnailVersion/POLBENG.png" width="50" height="50" class="me-3">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Input Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Input Data Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Buku</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Peminjaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri Bengkalis</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fadeshow" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col-6">
            <form action="{{ route('admin.home') }}" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="form-control rounded" placeholder="Cari nama admin" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary"> search</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-5">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col-2">
            <a class="btn btn-success" href="{{ route('admin.tambah') }}" style="text-decoration: none; margin-left: 30px">Tambah Data +</a>
        </div>
    </div>
    <table class="table" style="margin-top: 10px"> 
            <thead> 
                <tr> 
                    <th scope="col">No</th> 
                    <th scope="col">Nama</th> 
                    <th scope="col">Email</th> 
                    <th scope="col">Gender</th> 
                    <th scope="col">Jabatan</th> 
                    <th scope="col">Aksi</th> 
                </tr> 
            </thead> 
            <tbody class="table-group-divider"> 
                @foreach ($data as $index => $userAdmin) 
                    <tr> 
                        <td>{{ $index + $data->firstItem() }}</td> 
                        <td scope="row">{{ $userAdmin->name }}</td> 
                        <td>{{ $userAdmin->email }}</td> 
                        <td>{{ $userAdmin->jenis_kelamin }}</td> 
                        <td>{{ $userAdmin->level }}</td> 
                        <td> 
                            <a class="btn btn-outline-warning" href="/editAdmin/{{ $userAdmin->id }}">Edit</a> 
                            <a class="btn btn-outline-danger" href="/deleteAdmin/{{ $userAdmin->id }}">Delete</a> 
                        </td> 
                    </tr> 
                @endforeach 
            </tbody> 
        </table><br> 
        {{ $data->links() }} 
	    </div><br><br><br>	 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
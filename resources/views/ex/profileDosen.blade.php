<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profile Dosen</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Profile Dosen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ex.profileDosen')}}">Profile Lulusan KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ex.profileKelulusanKSI')}}">Profile Dosen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <p class="container mt-3"> Profile Dosen </p>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 25rem;">
                    <div class="mt-3">
                        <img src="https://img.freepik.com/free-photo/motivation-colleagues_1098-15967.jpg?w=900&t=st=1696413826~exp=1696414426~hmac=66ca328ed8fb41feb8cec95a1d6062724f07ee2912dd51e30132bdf4ec499038" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prof.Khusairi</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bergabung pada tahun 1985</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link"><button type="button" class="btn btn-secondary">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 25rem;">
                    <div class="mt-3">
                        <img src="https://img.freepik.com/free-photo/explaining-data_1098-19847.jpg?w=900&t=st=1696413782~exp=1696414382~hmac=22762f2f519d85613e59323b434aa734cace05519d84258286729f442da942b2" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prof.Setiawan</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bergabung pada tahun 1995</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link"><button type="button" class="btn btn-secondary">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 25rem;">
                    <div class="mt-3">
                        <img src="https://img.freepik.com/free-photo/teacher-smart-instructor-grey-suit-classroom-with-computer-whiteboard-writing-formula_140725-163415.jpg?w=900&t=st=1696413744~exp=1696414344~hmac=b3b1cae9417e915bf17eccbf9346c64eb5cfa0cb65f9b6d7477f4690a19ae8fa" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prof.Pratama</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bergabung pada tahun 1980</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link"><button type="button" class="btn btn-secondary">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="card" style="width: 25rem;">
                    <div class="mt-3">
                        <img src="https://img.freepik.com/free-photo/smiling-math-teacher-greeting-auditorium_23-2148201036.jpg?w=900&t=st=1696413699~exp=1696414299~hmac=d480520f4f4f5bf045acf637e4c5670d9022c0219636107bf8d936b30606afd3" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prof.Simanuel</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bergabung pada tahun 1980</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link"><button type="button" class="btn btn-secondary">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="card" style="width: 25rem;">
                    <div class="mt-3">
                        <img src="https://img.freepik.com/free-photo/smiling-senior-lecturer-coaching-business-team_1262-2001.jpg?1&w=900&t=st=1696413248~exp=1696413848~hmac=24f7397ea21aadde1d027cd2cc1a6694a1bc1f4e6fd371f2806034c44ae280c6" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prof.Radiansyah</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bergabung pada tahun 1965</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link"><button type="button" class="btn btn-secondary">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
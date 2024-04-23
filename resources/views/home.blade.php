<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKK - Misbahudin Zaki</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .background
        {
         background-image: url('images/background.jpg');
         background-size: cover;
         background-repeat: no-repeat;
        }
    </style>
</head>
<body class="background">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">Peserta</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nomor Peserta</td>
                                    <td>:</td>
                                    <td>UKK-RPL-24-13762</td>
                                </tr>
                                <tr>
                                    <td>Nama Peserta</td>
                                    <td>:</td>
                                    <td>Misbahudin Zaki</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>XII PPLG 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h1 class="text-white">Pengembangan Perangkat Lunak dan Game</h1>
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">Project</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Kalkulator V.1</th>
                                    <th scope="col">Kalkulator V.2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="{{route('kalkulator')}}" class="btn btn-md btn-primary">Kalkulator</a></td>
                                    <td><a href="{{route('kalkulatorjs')}}" class="btn btn-md btn-primary">Kalkulator</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

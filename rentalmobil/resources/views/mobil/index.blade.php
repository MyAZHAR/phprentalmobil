
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="card">
        <h1>Data Mobil</h1>
        <table class="table table-striped">
            <div class="container" class="col gx 4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>Merk Mobil</th>
                    <th>CC</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataMobil as $mobil)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $mobil['namaMobil']}}</td>
                    <td>{{ $mobil['merkMobil']}}</td>
                    <td>{{ $mobil['cc']}}</td>
                </tr>
                @endforeach
            </tbody>
            </div>
        </table>
    </div>
</body>
</html>
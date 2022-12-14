<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <title>Data Barang</title>
</head>
 
<body>
    <div class="container">
        <div class="mt-5 mb-5">
            <h1 class="display-4 mt-2">Laporan Barang</h1>
        </div>
        <table class="table table-hover table-bordered table-stripped" id="example2">
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Barang</th>
                            <th>Tanggal Kadaluarsa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($barang as $key => $barang)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$barang->nama}}</td>
                                <td>{{$barang->jumlah}}</td>
                                <td>{{$barang->harga}}</td>
                                <td>{{$barang->tanggalKadaluarsa}}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
</table>
    </div>
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
 
</html>
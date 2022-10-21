<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <h2>Detail {{$row->nama}}</h2>
        <div class="row justify-content-center">
            <table class="table table-hover">
               <tr>
                <th>Identitas</th>
                <th>Mahasiswa</th>   
              </tr>   
              <tr>
                    <td scope="row">No</td>
                    <td scope="col">{{$row->id}}</td>
                  </tr>
                  <tr>
                    <td scope="row">Nim</td>
                    <td scope="col">{{$row->nim}}</td>
                  </tr>
                  <tr>
                    <td scope="row">Nama</td>
                    <td scope="col">{{$row->nama}}</td>
                  </tr>
                  <tr>
                    <td scope="row">Tanggal Lahir</td>
                    <td scope="col">{{$row->tanggal}}</td>
                  </tr>
                  <tr>
                    <td scope="row">Jurusan</td>
                    <td scope="col">{{$row->alamat}}</td>
                  </tr>
                  <tr>
                    <td scope="row">Alamat</td>
                    <td scope="col">{{$row->jurusan}}</td>
                  </tr>
                  <tr>
                    <td scope="row">Foto</td>
                    <td scope="col"><img src="{{asset('imagemahasiswa/'.$row->foto)}}" width="70px"></td>
                  </tr> 
                </table>
                <a href="{{ route('mahasiswa.index')}}" class="btn btn-sm btn-success float-end col-md-2">Back</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstdap@5.2.2/dist/js/bootstdap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

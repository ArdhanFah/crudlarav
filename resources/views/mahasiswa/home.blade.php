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
        <h1>Hello, world!</h1>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <form action="">
                    <input type="search" name="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </form>
                </div>
            
            <div class="col-auto">
                <a href="{{ route('mahasiswa.create')}}" class="btn btn-sm btn-success">Tambah Data</a>
            </div>
          </div>
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item => $row)
                    <tr>
                        <th scope="row">{{$item + $data->firstItem()}}</th>
                        <td>{{$row->nim}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->tanggal}}</td>
                        <td>{{$row->alamat}}</td>
                        <td>{{$row->jurusan}}</td>
                        <td><img src="{{asset('imagemahasiswa/'.$row->foto)}}" width="70px"></td>
                        <td>
                            <form action="{{route('mahasiswa.destroy',$row->id)}}" method="POST">
                            <a href="{{ route('mahasiswa.show', $row->id)}}" class="btn btn-sm btn-warning">Detail</a>
                            <a href="{{ route('mahasiswa.edit',$row->id)}}" class="btn btn-sm btn-info">Update</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="alert('apakah anda yakin')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              {{$data->links()}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

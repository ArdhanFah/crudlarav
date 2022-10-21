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
        <div class="row justify-content-center">
            <form  class="row g-3" action="{{route('mahasiswa.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="col12">
                      <label for="inputnama" class="form-label">nama</label>
                      <input type="text" class="form-control" value={{$data->nama}} name="nama" id="inputnama">
                    </div>
                    <div class="col-md-6">
                      <label for="inputnim" class="form-label">nim</label>
                      <input type="number" class="form-control" value={{$data->nim}} class="nim" id="inputnim">
                    </div>
                    <div class="col-md-6">
                      <label for="inputJurusan" class="form-label">Jurusan</label>
                      <input type="text" class="form-control"  value={{$data->jurusan}} name="jurusan" id="inputJusuan">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" value={{$data->alamat}} name="alamat" id="inputAddress" placeholder="Isikan alamat rumahmu">
                    </div>
                    <div class="col-md-6">
                      <label for="inputdate" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" value={{$data->tanggal}} name="tanggal" id="inputdate">
                    </div>
                    <div class="col-md-6">
                        <label for="inputfoto" class="form-label">Foto Mahasiswa</label>
                        <input type="file" class="form-control" name="foto" id="inputfoto">
                      </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

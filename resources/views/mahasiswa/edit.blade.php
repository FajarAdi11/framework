<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Edit Mahasiswa
    </div>
    <div class="card-body">
      <form method="post" action="{{route('mahasiswa.edit',  $student->nim)}}">
       @csrf
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text" id="nim" name="nim" class="form-control" required="" readonly value="{{$student->nim}}">
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" required=""value="{{$student->nama}}">
        </div>
        <div class="form-group">
          <label for="umur">Umur</label>
          <input type="number" name="umur" id="umur" class="form-control" required="" value="{{$student->umur}}">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control" required="" value="{{$student->alamat}}">
        </div>
        <div class="form-group">
          <label for="kota">Kota</label>
          <input type="text" name="kota" id="kota" class="form-control" required="" value="{{$student->kota}}">
        </div>
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <input type="text" name="kelas" id="kelas" class="form-control" required="" value="{{$student->kelas}}">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" name="jurusan" id="jurusan" class="form-control" required="" value="{{$student->jurusan}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
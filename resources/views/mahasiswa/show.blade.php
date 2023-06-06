<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h3>Tabel Mahasiswa</h3>
    <a href="{{route('mahasiswa.add')}}" class="btn btn-success">Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kota</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student->nim}}</td>
      <td>{{$student->nama}}</td>
      <td>{{$student->umur}}</td>
      <td>{{$student->alamat}}</td>
      <td>{{$student->kota}}</td>
      <td>{{$student->kelas}}</td>
      <td>{{$student->jurusan}}</td>
      <td>
        <a href="{{route('edit', $student->nim)}}" class="btn btn-secondary">Edit</a>
        <form action="{{route('mahasiswa.delete', $student->nim)}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Data</title>
</head>
<body>
  <form action="{{route('mahasiswa.store')}}" method='POST'>
    @csrf
    <label for="">Nama :</label>
    <input type="text" name="nama" value="{{old('nama')}}">
    <br>
    <label for="">Matakuliah :</label>
    <input type="text" name="matkul" value="{{old('matakul')}}">
    <br>
    <button type="submit">Save</button>
  </form>
</body>
</html>
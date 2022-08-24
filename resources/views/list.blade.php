<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>list data</title>
</head>
<body>
  <a href={{route('mahasiswa.index')}}>List Mahasiswa</a>
  <a href={{route('mahasiswa.create')}}>Add new mahasiswa</a>
  <table border="1">
    <thead>
      <tr>
        <th>Nama</th>
        <th>matakuliah</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($data) > 0)
        @foreach ($data as $item)
          <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->matkul}}</td>
            <td>
              <a href="{{route('mahasiswa.edit', $item->id)}}">Ubah Data</a>

              <form action="{{route('mahasiswa.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus Data</button>
              </form>
            </td>
          </tr>
        @endforeach
      @endif
    </tbody>  
  </table>
</body>
</html>
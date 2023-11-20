<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Laravel boy YA SUDAH</title>
</head>
<body>
    <h1>Nama-nama Ikan</h1>
    <ol>
     @foreach ($namaIkan as $ikan)
        <li>{{ $ikan }}</li>
     @endforeach   
    </ol>
    <p>
        Tanggal hari ini adalah {{ date('d m Y') }}
      @if (date('m') > 7)
        Bulan agustus sudah lewat
      @elseif (date('m') < 7)
        Bulan lewat bulan agustus
      @else
        Sekarang bulan September      
      @endif  
    </p>
    <p>
        @for ($i = 0; $i < 10; $i++)
    <p>Ini adalah angka {{ $i }}</p>
    @endfor
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("storage/CSS/frontend/style.css") }}">
</head>
<body>
    <section class="show" id="">
        @foreach ($kamar as $kamars) 
       <div class="video">
        <img src="{{ asset("storage/img/gambar/" . $kamars->gambar) }}">
    </div>
 
    <div class="content">
        <h1>Kamar Tipe : <span>{{ $kamars->tipe->name }}</span></h1>
        <h1>NO kamar : <span>{{ $kamars->no_kamar }}</span></h1>
        <h1>Harga : <span>{{ $kamars->harga }} / day</span></h1>
        <ul>
            <h2>Berikut fasilitas yang dapat anda gunakan dikamar ini</h2>
                @foreach ($kamars->fkamar as $data)
                <li>{{ $data["fasilitas"] }}</li>
                @endforeach
        </ul>
    </div>
    <div class="container-form">
        <div class="form">
            @if(Auth::user()->role == "user")
                <form method="POST" action="{{ $route }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="">
                    <input type="hidden" name="kamar_id" value="{{ $kamars->id }}" id="">
                    <h3>Isi form reservasi</h3>
                    <span>check in</span>
                    <input type="date" name="check_in" id="">
                    <span>Check out</span>
                    <input type="date" name="check_out" id="">
                    <button type="submit" id="">Submit</button>
                </form>
            @else
                <h3>Selain User dilarang melakukan reservasi</h3>
            @endif
        </div>
            @endforeach
    </div>
</section>
</body>
</html>
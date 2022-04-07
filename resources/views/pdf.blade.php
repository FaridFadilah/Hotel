<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset("storage/CSS/frontend/pdf.css") }}"> --}}

</head>
<style>
/* <?php include(public_path(). "/storage/CSS/frontend/pdf.css");?> */
</style>
<body>
    @foreach ( $user as $data )
        
    <div class="container">
        <div class="email-signature">
            <div class="image">
                {{-- <img src="{{ asset("storage/img/gambar/" . $data->kamar->gambar) }}" alt=""> --}}
            </div>
            <div class="content">
                <h1 class="name">Nama : {{ $data->user->name }}</h1>
                <h3 class="post">Email : {{ $data->user->email }} </h3>
                <h3 class="post">Status : {{ $data->status }} </h3>
                <ul class="info">
                    
                    <li >No kamar : {{ $data->kamar->no_kamar }}</li>
                    <li >tipe kamar : {{ $data->kamar->tipe->name }}</li>
                    <li >Harga / hari : {{ $data->kamar->harga }} / hari (Lunas)</li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>
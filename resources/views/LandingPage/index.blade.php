<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("storage/CSS/frontend/style.css") }}">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@1,400;1,500;1,600;1,700&display=swap');
    *{
    font-family: 'Alegreya', serif;
    }
    </style>
</head>

<body class="index">
    <!-- Header section Start -->
    <header class="header-navbar">
        <a href="#" class="logo">Hotel <span>hebat</span></a>
        <nav class="navbar">
            <ul>
                @if (!Auth::user())
                <li><a data-scroll="login" class="active login" href="/login">Login</a></li>
                @endif
                @if (Auth::user()->role == "admin")
                <li><a data-scroll="home" href="/admin">Home</a></li>
                @endif
                @if (Auth::user()->role == "user")
                <li><a data-scroll="home" href="/user">Home</a></li>
                @endif
                @if (Auth::user()->role == "resepsionis")
                <li><a data-scroll="home" href="/resepsionis">Home</a></li>
                @endif
                <li><a data-scroll="fasilitas" href="#fasilitas">Kamar</a></li>
                <li><a data-scroll="kamar" href="#kamar">Fasilitas</a></li>
            </ul>
        </nav>
        <div class="fas fa-bars"></div>
    </header>
    <!-- Header section End -->

    <!-- Home Section start -->
    <section class="home" id="">
        <div class="video">
            <video src="{{ asset("storage/img/home-video.mp4") }}" muted autoplay loop ></video>
        </div>

        <div class="content">
            <h3>temukan Harga terbaik, <br> dihotel <span>HEBAT</span>  ini</h3>
            <p>manfaatkan ruang penyelenggaraan konvensi MICE ataupun mewujudkan acara pernikahan adat yang mewah</p>
        </div>
        <div class="container-form">  
        </div>
    </section>
    <!-- Home Section end -->

    <!-- feature section starts -->
    
    <!-- feature section ends -->

    <!-- About section start -->
    <section class="about" id="about">
        <h1 class="heading">Tentang Kami</h1>
        <div class="row">
            <div class="image">
                <img src="{{ asset("storage/img/about.jpg") }}" alt="">
            </div>
            <div class="content">
                <h3>why choose us?</h3>
                <p>dengan berenang dikelam renang dengan pemandangan matahari terbenam yang memukau; Kids Club yang luas - menawarkan beragam fasilitas dan kegiatan anak - anak yang akan melengkapi kenyamanan keluarga. Conevention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar dibandung, Mampu mengakomodasi hingga 3000 delegasi. </p><br>
            </div>
        </div>
    </section>
    <!-- About section ends -->
    <section class="feature" id="fasilitas">
        <h1 class="heading"><span>Kamar</span> yang tersedia</h1>
        
            
        <div class="container-card">
            @foreach ($kamar as $data)
            <div class="card">
                @if($data->status == "terisi")
                <span class="discount">Terisi</span>
                @endif
                <img src="{{ asset("storage/img/gambar/" . $data->gambar) }}" alt="">
                <div class="content">
                    <h3 class="title">{{ $data->tipe->name }}</h3>
                    <p>{{ $data->tipe->slug }}</p>
                    @if($data->status == "tidak terisi")
                    <a href="{{ route("reservasi.tambah", $data->id) }}"><button class="btn">Info Kamar</button></a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- gallery section starts -->
    <section class="gallery" id="kamar">
        <h1 class="heading"><span>fasilitas</span> umum</h1>
        <div class="container-box">
            @foreach ( $umum as $data)
            <div class="box">
                <img src="{{ asset("storage/img/gambar/" . $data->gambar) }}" alt="">
            </div>
            @endforeach
        </div>
    </section>
    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

        <div class="credit">&#169; created by <span>Farid Fadilah Permana</span> | all rights reserved</div>

    </section>
    <!-- gallery section ends -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset("storage/script/script.js") }}"></script>
</body>

</html>
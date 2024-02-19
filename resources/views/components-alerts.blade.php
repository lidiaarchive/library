<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LIBRARY</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('include.style')

    <link rel="stylesheet" href="perpustakaan/style.css">
</head>

<body>
    @include('include.header')
    @include('include.sidebar-admin')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Book Collection</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/page">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Alerts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="catagories">
            <section id="millionaire">
                <h1 class="heading">MILLIONAIRE MINDSET</h1>
                <div class="box-container">
                    <div class="box">
                        <img src="{{asset('perpustakaan/cover/millionaire mindset 01.jpg')}}" alt="">
                        <h3>MILLIONAIRE MINDSET 01</h3>

                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 01.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/millionaire mindset 03.jpg" alt="">
                        <h3>MILLIONAIRE MINDSET 03</h3>

                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 03.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/millionaire mindset 04.jpg" alt="">
                        <h3>MILLIONAIRE MINDSET 04</h3>

                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 04.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/millionaire mindset 06.jpg" alt="">
                        <h3>MILLIONAIRE MINDSET 06</h3>

                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 06.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/millionaire mindset 07.jpg" alt="">
                        <h3>MILLIONAIRE MINDSET 09</h3>

                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 07.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/buku sakti hacker.jpg" alt="">
                        <h3>BUKU SAKTI HACKER</h3>

                        <a href="{{asset('perpustakaan/ebook/Buku Sakti Hacker by Efvy Zam.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/bob sadino.jpg" alt="">
                        <h3>BELAJAR GOBLOK DARI BOB SADINO</h3>

                        <a href="{{asset('perpustakaan/ebook/bob sadino.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                </div>
            </section>
            <section id="serial">
                <h1 class="heading">SERIAL DUNIA PARALEL</h1>
                <div class="box-container">
                    <div class="box">
                        <img src="perpustakaan/cover/Bumi.jpg" alt="">
                        <h3>BUMI</h3>

                        <a href="{{asset('perpustakaan/ebook/Bumi.pdf')}}" target="_blank" class="btn btn-success"> Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/bulan.jpg" alt="">
                        <h3>BULAN</h3>

                        <a href="{{asset('perpustakaan/ebook/.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/matahari.jpg" alt="">
                        <h3>MATAHARI</h3>

                        <a href="{{asset('perpustakaan/ebook/matahari.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/bintang.jpg" alt="">
                        <h3>BINTANG</h3>

                        <a href="{{asset('perpustakaan/ebook/Bintang.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/ceros dan batozar.jpg" alt="">
                        <h3>CEROS DAN BATOZAR</h3>

                        <a href="{{asset('perpustakaan/ebook/ceros dan batozar.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/komet.jpg" alt="">
                        <h3>KOMET</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/komet minor.jpg" alt="">
                        <h3>KOMET MINOR</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/Selena.jpeg" alt="">
                        <h3>SELENA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box col-mg-">
                        <img src="perpustakaan/cover/Nebula.jpg" alt="">
                        <h3>NEBULA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si putih.jpg" alt="">
                        <h3>SI PUTIH</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/lumpu.jpg" alt="">
                        <h3>LUMPU</h3>

                        <a href="{{asset('perpustakaan/ebook/lumpu.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/bibi gill.jpg" alt="">
                        <h3>BIBI GILL</h3>

                        <a href="{{asset('perpustakaan/ebook/Bibi Gill.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/sagaras.jpg" alt="">
                        <h3>SAGARAS</h3>

                        <a href="{{asset('perpustakaan/ebook/Sagaras.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                </div>
                <!-- SERIAL ANAK MAMAK -->
                <h1 class="heading">SERIAL ANAK MAMAK</h1>
                <div class="box-container">
                    <div class="box">
                        <img src="perpustakaan/cover/burlian.jpg" alt="">
                        <h3>BURLIAN</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/pukat.jpg" alt="">
                        <h3>PUKAT</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/eliana.jpg" alt="">
                        <h3>ELIANA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/amelia.jpg" alt="">
                        <h3>AMELIA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                </div>

                <!-- SERIAL ANAK NUSANTARA -->
                <h1 class="heading">SERIAL ANAK NUSANTARA</h1>
                <div class="box-container">
                    <div class="box">
                        <img src="perpustakaan/cover/si anak kuat.jpg" alt="">
                        <h3>SI ANAK KUAT</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si anak spesial.jpg" alt="">
                        <h3>SI ANAK SPESIAL</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si anak pintar.jpg" alt="">
                        <h3>SI ANAK PINTAR</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si anak pemberani.jpg" alt="">
                        <h3>SI ANAK PEMBERANI</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si anak cahaya.jpg" alt="">
                        <h3>SI ANAK CAHAYA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si anak badai.jpg" alt="">
                        <h3>SI ANAK BADAI</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si anak pelangi.jpg" alt="">
                        <h3>SI ANAK PELANGI</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/si anak savana.jpg" alt="">
                        <h3>SI ANAK SAVANA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                </div>
            </section>
            <section id="cerpen">
                <h1 class="heading">cover</h1>
                <div class="box-container">
                    <div class="box">
                        <img src="perpustakaan/cover/hafalan sholat delisa.jpg" alt="">
                        <h3>HAFALAN SHOLAT DELISA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/negeri para bedebah.jpg" alt="">
                        <h3>NEGERI PARA BEDEBAH</h3>

                        <a href="{{asset('perpustakaan/ebook/Negeri Para bedebah.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/bidadari-bidadari surga.jpg" alt="">
                        <h3>BIDADARI BIDADARI SURGA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/daun yang jatuh tak pernah membenci angin.jpg" alt="">
                        <h3>DAUN YANG JATUH TIDAK PERNAH MEMBENCI ANGIN</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/berjuta rasanya.jpg" alt="">
                        <h3>BERJUTA RASANYA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/sepotong hati yang baru.jpg" alt="">
                        <h3>SEPOTONG HATI YANG BARU</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                </div>
            </section>
            <section id="puisi">
                <h1 class="heading">PUISI</h1>
                <div class="box-container">
                    <div class="box">
                        <img src="perpustakaan/cover/dikatakan atau tidak dikatakan itu tetap cinta.jpg" alt="">
                        <h3>DIKATAKAN ATAU TIDAK DIKATAKAN ITU TETAP CINTA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/sungguh kau boleh pergi.jpg" alt="">
                        <h3>SUNGGUH KAU BOLEH PERGI</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                </div>
            </section>
            <section>

                <h1 class="heading" id="non-kategori">NON-KATEGORI</h1>
                <div class="box-container">
                    <div class="box">
                        <img src="perpustakaan/cover/moga bunda disayang allah.jpg" alt="">
                        <h3>MOGA BUNDA DISAYANG ALLAH</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/dia adalah kakakku.jpg" alt="">
                        <h3>DIA ADALAH KAKAKKU</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/sunset bersama rosie.jpg" alt="">
                        <h3>SUNSET BERSAMA ROSIE</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/harga sebuah percaya.jpg" alt="">
                        <h3>HARGA SEBUAH PERCAYA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="perpustakaan/cover/jengki.jpg" alt="">
                        <h3>JENGKI</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/selamat tinggal.jpg" alt="">
                        <h3>SELAMAT TINGGAL</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/tentang kamu.jpg" alt="">
                        <h3>TENTANG KAMU</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/hujan.jpg" alt="">
                        <h3>HUJAN</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/janji.jpeg" alt="">
                        <h3>JANJI</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/ayahku bukan pembohong.jpg" alt="">
                        <h3>AYAHKU BUKAN PEMBOHONG</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/bedebah di ujung tanduk.jpg" alt="">
                        <h3>BEDEBAH DI UJUNG TANDUK</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/negeri di ujung tanduk.jpg" alt="">
                        <h3>NEGERI DI UJUNG TANDUK</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/hello.jpg" alt="">
                        <h3>HELLO</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/pergi.jpg" alt="">
                        <h3>PERGI</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/pulang.jpg" alt="">
                        <h3>PULANG</h3>

                        <a href="{{asset('perpustakaan/ebook/Pulang.pdf')}}" target="_blank" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/rasa.jpg" alt="">
                        <h3>RASA</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/rindu.jpg" alt="">
                        <h3>RINDU</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/selamat tinggal.jpg" alt="">
                        <h3>SELAMAT TINGGAL</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/sesuk.jpg" alt="">
                        <h3>SESUK</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
                    <div class="box">
                        <img src="perpustakaan/cover/tentang kamu.jpg" alt="">
                        <h3>TENTANG KAMU</h3>

                        <a href="#" class="btn btn-success">Read now</a>
                    </div>
            </section>
        </div>
        </section>

    </main><!-- End #main -->

    @include('include.script')

    @include('include.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>

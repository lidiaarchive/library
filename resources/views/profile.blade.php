<!doctype html>
<html lang="en-US">

<head>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="perpustakaan/style.css">

    <title>LIBRARY</title>
</head>

<body>
    {{-- @include('include.style') --}}
    @include('include.profile')


    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/page" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">LIBRARY</span>
            </a>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#colection">
                        <span class="d-none d-md-block">COLECTION</span>
                    </a>
                </li>
                <li><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#buku">
                        <span class="d-none d-md-block">E-BOOK</span>
                    </a>
                </li>
                <li><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#data">
                        <span class="d-none d-md-block">DATA</span>
                    </a>
                </li>
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ $userData->username }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                        <li class="dropdown-header">
                            <h6>{{ $userData->username }}</h6>
                            <span>Student</span>
                        </li>

                        {{-- <li>
                            <hr class="dropdown-divider">
                        </li> --}}

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/users-profile">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/users-profile">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <main id="main" class="main">

        <!-- H E R O -->
        <div class="container" id="colection">
            <!-- SERIAL DUNIA PARALEL -->
            <div class="catagories ms-auto">
                <section id="millionaire">
                    <h1 class="heading">MILLIONAIRE MINDSET</h1>
                    <div class="box-container">
                        <div class="box">
                            <img src="perpustakaan/cover/millionaire mindset 01.jpg" alt="">
                            <h3>MILLIONAIRE MINDSET 01</h3>

                            <a href="{{ asset('perpustakaan/ebook/Millionaire Mindset 01.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                            {{-- <button type="button" class="btn btn-dark">
                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 01.pdf')}}" target="_blank">Read now</a>
                                </button> --}}
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/millionaire mindset 03.jpg" alt="">
                            <h3>MILLIONAIRE MINDSET 03</h3>

                            <a href="{{ asset('perpustakaan/ebook/Millionaire Mindset 03.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                            {{-- <button type="button" class="btn btn-dark">
                        <a href="{{asset('perpustakaan/ebook/Millionaire Mindset 03.pdf')}}" target="_blank">Read now</a>
                                </button> --}}

                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/millionaire mindset 04.jpg" alt="">
                            <h3>MILLIONAIRE MINDSET 04</h3>

                            <a href="{{ asset('perpustakaan/ebook/Millionaire Mindset 04.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/millionaire mindset 06.jpg" alt="">
                            <h3>MILLIONAIRE MINDSET 06</h3>

                            <a href="{{ asset('perpustakaan/ebook/Millionaire Mindset 06.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/millionaire mindset 07.jpg" alt="">
                            <h3>MILLIONAIRE MINDSET 09</h3>

                            <a href="{{ asset('perpustakaan/ebook/Millionaire Mindset 07.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/buku sakti hacker.jpg" alt="">
                            <h3>BUKU SAKTI HACKER</h3>

                            <a href="{{ asset('perpustakaan/ebook/Buku Sakti Hacker by Efvy Zam.pdf') }}"
                                target="_blank" class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/bob sadino.jpg" alt="">
                            <h3>BELAJAR GOBLOK DARI BOB SADINO</h3>

                            <a href="{{ asset('perpustakaan/ebook/bob sadino.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                    </div>
                </section>
                <section id="serial">
                    <h1 class="heading">SERIAL DUNIA PARALEL</h1>
                    <div class="box-container">
                        <div class="box">
                            <img src="perpustakaan/cover/Bumi.jpg" alt="">
                            <h3>BUMI</h3>

                            <a href="{{ asset('perpustakaan/ebook/Bumi.pdf') }}" target="_blank"
                                class="btn btn-success"> Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/bulan.jpg" alt="">
                            <h3>BULAN</h3>

                            <a href="{{ asset('perpustakaan/ebook/.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/matahari.jpg" alt="">
                            <h3>MATAHARI</h3>

                            <a href="{{ asset('perpustakaan/ebook/matahari.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/bintang.jpg" alt="">
                            <h3>BINTANG</h3>

                            <a href="{{ asset('perpustakaan/ebook/Bintang.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/ceros dan batozar.jpg" alt="">
                            <h3>CEROS DAN BATOZAR</h3>

                            <a href="{{ asset('perpustakaan/ebook/ceros dan batozar.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
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

                            <a href="{{ asset('perpustakaan/ebook/lumpu.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/bibi gill.jpg" alt="">
                            <h3>BIBI GILL</h3>

                            <a href="{{ asset('perpustakaan/ebook/Bibi Gill.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/sagaras.jpg" alt="">
                            <h3>SAGARAS</h3>

                            <a href="{{ asset('perpustakaan/ebook/Sagaras.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
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
                    <h1 class="heading">CERPEN</h1>
                    <div class="box-container">
                        <div class="box">
                            <img src="perpustakaan/cover/hafalan sholat delisa.jpg" alt="">
                            <h3>HAFALAN SHOLAT DELISA</h3>

                            <a href="#" class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/negeri para bedebah.jpg" alt="">
                            <h3>NEGERI PARA BEDEBAH</h3>

                            <a href="{{ asset('perpustakaan/ebook/Negeri Para bedebah.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/bidadari-bidadari surga.jpg" alt="">
                            <h3>BIDADARI BIDADARI SURGA</h3>

                            <a href="#" class="btn btn-success">Read now</a>
                        </div>
                        <div class="box">
                            <img src="perpustakaan/cover/daun yang jatuh tak pernah membenci angin.jpg"
                                alt="">
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
                            <img src="perpustakaan/cover/dikatakan atau tidak dikatakan itu tetap cinta.jpg"
                                alt="">
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
                            <img src="perpustakaan/cover//dia adalah kakakku.jpg" alt="">
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
                    <br>
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

                            <a href="{{ asset('perpustakaan/ebook/Pulang.pdf') }}" target="_blank"
                                class="btn btn-success">Read now</a>
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
        </div>


        <div class="col-12" id="buku">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <h5 class="card-title">Recent Book <span>| Today</span></h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">KODE</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">PENGARANG</th>
                                <th scope="col">TAHUN PENERBIT</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ebooks as $ebook)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ebook->judul }}</td>
                                    <td>{{ $ebook->isbn }}</td>
                                    <td>{{ $ebook->pengarang }}</td>
                                    <td>{{ $ebook->tahun_terbit }}</td>
                                    <td><button type="button" class="btn btn-light"><a
                                                href="{{ asset('perpustakaan/ebook/' . $ebook->pdf) }}"
                                                target="blank">read</a></button>
                                        <button type="button" class="btn btn-dark"><a
                                                href="{{ asset('perpustakaan/ebook/' . $ebook->pdf) }}"
                                                download>Download</a></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <section class="section">
            <div class="row" id="data">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Add lightweight datatables to your project with using the <a
                                    href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                    DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                                wish to conver to a datatable</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Absen</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Agama</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->kelas }}</td>
                                            <td>{{ $user->jenis_kelamin }}</td>
                                            <td>{{ $user->agama }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    @include('include.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('include.script')

</body>

</html>

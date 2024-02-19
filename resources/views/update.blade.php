<!DOCTYPE html>
<html lang="en">
    <head>
    @include('include.style')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / Data</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
</head>


<body>

    @include('include.header')
    @include('include.sidebar-admin')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Update Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/page">Home</a></li>
                    <li class="breadcrumb-item"><a href="/tables-data">Data</a></li>
                    <li class="breadcrumb-item active"><a href="#">Update</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Student Form Register</h5>

                            <!-- General Form Elements -->

                            <form action="" method="">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">

                                    @if (session('status'))
                                        <div class="alert alert-primary" role="alert" style="text-align: center">
                                            <a href="#" class="alert-link">{{ session('message') }}</a>.
                                        </div>
                                    @endif
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="Nama"
                                            value="{{ isset($Users['nama']) ? $Users['nama'] : '' }}" required>
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <select class="form-select" aria-label="Default select example" name="kelas">
                                            <option>{{ isset($Users['kelas']) ? $Users['kelas'] : '' }}</option>
                                            <option>X-RPL</option>
                                            <option>XI-RPL</option>
                                            <option>XII-RPL 1</option>
                                            <option>XII-RPL 2</option>
                                            <option>X-DKV 1</option>
                                            <option>X-DKV 2</option>
                                            <option>XI-DKV</option>
                                            <option>XII-MM 1</option>
                                            <option>XII-MM 2</option>
                                            <option>X-TKJ 1</option>
                                            <option>XI-TKJ 1</option>
                                            <option>XI-TKJ 2</option>
                                            <option>XII-TKJ 1</option>
                                            <option>XII-TKJ 2</option>
                                            <option>X-MP 1</option>
                                            <option>X-MP 2</option>
                                            <option>XI-MP 1</option>
                                            <option>XI-MP 2</option>
                                            <option>XII-OTKP 1</option>
                                            <option>XII-OTKP 2</option>
                                            <option>XII-PKM 1</option>
                                            <option>XII-PKM 2</option>
                                            <option>XI-AKL 1</option>
                                            <option>XI-AKL 2</option>
                                            <option>XII-AKL 1</option>
                                            <option>XII-AKL 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="yourpassword" class="form-label">Agama</label>
                                    <select class="form-select" aria-label="Default select example" name="agama"
                                        value="">
                                        <option>{{ isset($Users['agama']) ? $Users['agama'] : '' }}</option>
                                        <option value="islam" @if($Users->agama == "Islam")@endif>Islam</option>
                                        <option value="Protestan" @if($Users->agama == "Protestan")@endif>Kristen Protestan</option>
                                        <option value="Katolik" @if($Users->agama == "Katolik")@endif>Kristen Katolik</option>
                                        <option value="Hindu" @if($Users->agama == "Hindu")@endif>Hindu</option>
                                        <option value="Budha" @if($Users->agama == "Budha")@endif>Budha</option>
                                        <option value="Konghucu" @if($Users->agama == "Konghucu")@endif>Konghucu</option>
                                    </select>
                                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourName" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin"
                                        value="">
                                        <option selected>{{ isset($Users['jenis_kelamin']) ? $Users['jenis_kelamin'] : '' }}
                                        </option>
                                        <option value="Laki-laki" @if($Users->jenis_kelamin == "Laki-laki")@endif>Laki-laki</option>
                                        <option value="Perempuan" @if($Users->jenis_kelamin == "perempuan")@endif>Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">Please, enter your name!</div>
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End General Form Elements -->
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </main><!-- End #main -->

    @include('include.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
            <script scr="{{asset('js/script.js')}}"></script>

    {{-- @include('include.script') --}}

</body>

</html>

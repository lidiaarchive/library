<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / Data</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('include.style')


</head>

<body>

    @include('include.header')
    @include('include.sidebar-admin')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/page">Home</a></li>
                    <li class="breadcrumb-item"><a href="/tables-buku">ebook</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Add lightweight datatables to your project with using the <a
                                    href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                    DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                                wish to conver to a datatable</p>
                            @if (session('status'))
                                <div class="alert alert-primary" role="alert" style="text-align: center">
                                    <a href="#" class="alert-link">{{ session('message') }}</a>.
                                </div>
                            @endif
                            <!-- Table with stripped rows -->
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">KODE</th> --}}
                                        <th scope="col">ISBN</th>
                                        <th scope="col">JUDUL</th>
                                        <th scope="col">PENGARANG</th>
                                        <th scope="col">PENERBIT</th>
                                        <th scope="col">TAHUN PENERBIT</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ebooks as $ebook)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            {{-- <td>{!! DNS1D::getBarcodeHTML($ebook->isbn, 'C39E') !!}</td> --}}
                                            <td>{{QrCode::size(35)->generate($ebook->isbn)}}</td>
                                            <td>{{ $ebook->judul }}</td>
                                            {{-- <td>{{ $ebook->isbn }}</td> --}}
                                            <td>{{ $ebook->pengarang }}</td>
                                            <td>{{ $ebook->penerbit }}</td>
                                            <td>{{ $ebook->tahun_terbit }}</td>
                                            <td><button type="button" class="btn btn-light"><a
                                                        href="{{ asset('perpustakaan/ebook/' . $ebook->pdf) }}"
                                                        target="blank">read</a></button>

                                            </td>
                                            <td> <button type="button" class="btn btn-dark"><a
                                                        href="{{ asset('perpustakaan/ebook/' . $ebook->pdf) }}"
                                                        download>Download</a></button></td>
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
    <script scr="{{ asset('js/script.js') }}"></script>

    @include('include.script')

</body>

</html>

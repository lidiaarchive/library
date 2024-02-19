<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms-Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('include.style')

</head>

<body>

  @include('include.header')
  @include('include.sidebar-admin')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Register</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
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

              <form action="" method="POST">
                @csrf
                <div class="row mb-3">

                  @if (session('status'))
                  <div class="alert alert-primary" role="alert" style="text-align: center">
                    <a href="#" class="alert-link">{{session('message')}}</a>.
                  </div>
                  @endif
                  <div class="col-12">
                    <label for="yourName" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Please, enter your name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas">
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
                  <select class="form-select" aria-label="Default select example" name="agama">
                    <option>Islam</option>
                    <option>Kristen Protestan</option>
                    <option>Kristen Katolik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Konghucu</option>
                  </select>
                  <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                </div>

                <div class="col-12">
                  <label for="yourName" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Open this select menu</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  <div class="invalid-feedback">Please, enter your name!</div>
                </div>

                <div class="col-12">
                  <label for="yourName" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter your name!</div>
                </div>

                <div class="col-12">
                  <label for="yourpassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
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
  </main>
  @include('include.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('include.script')

</body>

</html>

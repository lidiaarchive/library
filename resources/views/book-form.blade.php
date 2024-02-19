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
      <h1>Book Form</h1>
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
              <h5 class="card-title">Book Form Register</h5>

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
                    <label for="yourName" class="form-label">ISBN</label>
                    <input type="number" name="isbn" class="form-control" id="yourName">
                    <div class="invalid-feedback">Please, enter your name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">Cover</label>
                    <input type="file" name="cover" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Please, enter your name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Please, enter your name!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="yourName">
                  </div>
                </div>
                <div class="col-12">
                  <label for="yourpassword" class="form-label">Penerbit</label>
                  <input type="text" name="penerbit" class="form-control" id="yourName">
                  <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                </div>

                <div class="col-12">
                  <label for="yourName" class="form-label">Tahun Terbit</label>
                  <input type="number" name="tahun_terbit" class="form-control" id="yourName">
                  <div class="invalid-feedback">Please, enter your name!</div>
                </div>

                <div class="col-12">
                  <label for="yourName" class="form-label">FILE PDF</label>
                  <input type="file" name="username" class="form-control" id="yourName" required>
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
  </main>
  @include('include.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('include.script')

</body>

</html>

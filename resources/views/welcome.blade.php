<!DOCTYPE html>
<html>
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Parkir Kampus</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <!-- Tweaks for older IEs-->
    <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
  </head>
  <body>
    <div class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lokasi">Lokasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#parkir">Area Parkir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              
              @auth
              <li>
                <a href="{{ route('profile.edit')}}" class="nav-link">
                    <i class="fa fa-user"></i> {{ Auth::user()->name}}
                </a>
            </li>
            
              <li><form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a class="nav-link" href="{{ route('logout')}}"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                          Logout
                      </a>
                  </form>
              </li>
          @endauth
          @guest
              <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
              <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
          @endguest
            </ul>
          </div>
        </nav>
      </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
        <div class="container">
          <div id="banner_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner_taital_main">
                      <h1 class="banner_taital">Parkir <br />Kampus NF</h1>
                      <p class="banner_text">
                        Layanan Untuk Mahasiswa Parkir Kendaraan
                      </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
             
            </div>
          
          </div>
        </div>
      </div>
      <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
        <div class="about_section_2">
          <div class="row">
            <div class="col-md-6">
              <div class="about_taital_box">
                <h1 class="about_taital">Layanan Kami</h1>
                <h1 class="about_taital_1">
                  Sarana Untuk Penitipan Kendaraan Mahasiswa
                </h1>
                <p class="about_text mb-4">
                  Selamat datang di Parkir kampus NF. Kami menyediakan berbagai layanan untuk memastikan pengalaman parkir Anda aman, nyaman, dan bebas stres. Silahkan Daftarkan Kendaraan anda:
              </p>
              @auth
      <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#tambahKendaraanModal">
        Daftarkan kendaraan Anda
      </button>
    @else
    <a href="{{ route('login') }}" class="btn btn-primary mt-4">
        Daftarkan kendaraan Anda
    </a>
    @endauth

              </div>
            </div>
            <div class="col-md-6">
              <div class="image_iman">
                <img src="images/cs.jpg" class="about_img" />
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- about section end -->
   <!-- blog section start -->
   <div class="blog_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="about_taital" id="lokasi">Lokasi Kampus</h1>
        </div>
      </div>
      <div class="blog_section_2">
        <div class="row">
          <div class="col-md-6">
            <div class="card shadow" style="height: 600px;">
              <img src="images/kampusA.jpg" class="card-img-top" style="height: 400px;" alt="STT NF Kampus A">
              <div class="card-body text-center">
                <h3 class="card-title">STT NF Kampus A</h3>
                <p class="card-text">
                  Jl. Setu Indah No.116, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card shadow" style="height: 600px;">
              <img src="images/kampusB.jpg" class="card-img-top" style="height: 400px;" alt="STT NF Kampus B">
              <div class="card-body text-center">
                <h3 class="card-title">STT NF Kampus B</h3>
                <p class="card-text">
                  Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- blog section start -->
<div class="blog_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="about_taital" id="parkir">Area Parkir</h1>
      </div>
    </div>
    <div class="blog_section_2">
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow" style="height: 380px;">
            <img src="images/parkir1.jpg" class="card-img-top" style="height: 250px;" alt="STT NF Kampus A">
            <div class="card-body text-center">
              <h3 class="card-title">Area 1</h3>
              <p class="card-text">
                Berada di Kampus A untuk motor
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow" style="height: 380px;">
            <img src="images/parkir2.jpg" class="card-img-top" style="height: 250px;" alt="STT NF Kampus B">
            <div class="card-body text-center">
              <h3 class="card-title">Area 2</h3>
              <p class="card-text">
                Berada di Kampus B untuk motor
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow" style="height: 380px;">
            <img src="images/parkir3.jpg" class="card-img-top" style="height: 250px;" alt="STT NF Kampus C">
            <div class="card-body text-center">
              <h3 class="card-title">Area 3</h3>
              <p class="card-text">
                Berada di Kampus A untuk mobil
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- blog section end -->

    <!-- coffee section start -->
    <div class="coffee_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="coffee_taital">Owner</h1>
          </div>
        </div>
      </div>
      <div class="coffee_section_2">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <div class="coffee_img"><img src="images/pk1.jpg" /></div>
                    <div class="coffee_box">
                      <h3 class="types_text">Aditya</h3>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="coffee_img"><img src="images/pk2.jpg" /></div>
                    <div class="coffee_box">
                      <h3 class="types_text">Rafka</h3>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="coffee_img"><img src="images/pk3.jpg" /></div>
                    <div class="coffee_box">
                      <h3 class="types_text">Dika</h3>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="coffee_img"><img src="images/pk4.jpg" /></div>
                    <div class="coffee_box">
                      <h3 class="types_text">Sigit</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          
           
        </div>
      </div>
    </div>
    <!-- coffee section end -->
    <!-- client section start -->
    <div class="client_section layout_padding">
      <div class="container">
        <div id="custom_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="about_taital">komentar</h1>
                </div>
              </div>
              <div class="client_section_2">
                <div class="client_taital_main">
                  <div class="client_left">
                    <div class="client_img">
                      <img src="images/client-img1.png" />
                    </div>
                  </div>
                  <div class="client_right">
                    <h3 class="moark_text">Budi</h3>
                    <p class="client_text">
                      Layanan parkir yang sangat memuaskan! Proses reservasi mudah dan lokasi parkir sangat strategis. Keamanan terjamin, membuat saya merasa tenang meninggalkan mobil saya
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="about_taital">What syas customers</h1>
                </div>
              </div>
              <div class="client_section_2">
                <div class="client_taital_main">
                  <div class="client_left">
                    <div class="client_img">
                      <img src="images/client-img1.png" />
                    </div>
                  </div>
                  <div class="client_right">
                    <h3 class="moark_text">Siti Nurhaliza</h3>
                    <p class="client_text">
                      Pelayanan yang cepat dan ramah. Saya sangat menyukai fitur reservasi online yang memudahkan saya untuk memesan tempat parkir. Terima kasih
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="about_taital">What syas customers</h1>
                </div>
              </div>
              <div class="client_section_2">
                <div class="client_taital_main">
                  <div class="client_left">
                    <div class="client_img">
                      <img src="images/client-img1.png" />
                    </div>
                  </div>
                  <div class="client_right">
                    <h3 class="moark_text">Andi Wijaya</h3>
                    <p class="client_text">
                      Parkiran luas dan aman. Stafnya sangat membantu dan responsif. Sangat direkomendasikan bagi yang mencari parkir yang nyaman dan aman.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#custom_slider"
            role="button"
            data-slide="prev"
          >
            <i class="fa fa-arrow-left"></i>
          </a>
          <a
            class="carousel-control-next"
            href="#custom_slider"
            role="button"
            data-slide="next"
          >
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- client section end -->
    <div class="modal fade" id="tambahKendaraanModal" tabindex="-1" role="dialog" aria-labelledby="tambahKendaraanModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tambahKendaraanModalLabel">Pendaftaran Kendaraan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kendaraa.store') }}" method="POST">
              @csrf
              <div class="form-group row mt-3">
                                        <label for="merk" class="col-md-4">Merk</label>
                                        <input type="text" name="merk" id="merk" value="{{ old('merk') }}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="pemilik" class="col-md-4">Pemilik</label>
                                        <input type="text" name="pemilik" id="pemilik" value="{{ old('pemilik') }}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="nopol" class="col-md-4">Nomor Polisi</label>
                                        <input type="text" name="nopol" id="nopol" value="{{ old('nopol') }}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="thn_beli" class="col-md-4">Tahun Beli</label>
                                        <input type="number" name="thn_beli" id="thn_beli" value="{{ old('thn_beli') }}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="deskripsi" class="col-md-4">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" class="form-control col-md-8" rows="3" required>{{ old('deskripsi') }}</textarea>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="kapasitas_kursi" class="col-md-4">Kapasitas Kursi</label>
                                        <input type="number" name="kapasitas_kursi" id="kapasitas_kursi" value="{{ old('kapasitas_kursi') }}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="rating" class="col-md-4">Rating</label>
                                        <input type="number" name="rating" id="rating" value="{{ old('rating') }}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="jenis_id" class="col-md-4">Jenis Kendaraan</label>
                                        <select name="jenis_id" id="jenis_id" class="form-control col-md-8" required>
                                            <option value="">Pilih Jenis Kendaraan</option>
                                            @foreach($jenis as $item)
                                                <option value="{{ $item->id }}" {{ old('jenis_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                              </form>
                          </div>
                      </div>
                  </div>
               </div>
    
            <div class="map_main"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2416104396184!2d106.84187777478525!3d-6.362768562243854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1720568079260!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.317561852958!2d106.83004867478512!3d-6.352919162151448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1720568205492!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer_social_icon">
              <ul>
                <li>
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-linkedin" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </div>
            <div class="location_text">
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-phone" aria-hidden="true"></i
                    ><span class="padding_left_10">+63 1234567890</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i
                    ><span class="padding_left_10">NF@gmail.com</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="form-group">
              <textarea
                class="update_mail"
                placeholder="Your Email"
                rows="5"
                id="comment"
                name="Your Email"
              ></textarea>
              <div class="subscribe_bt">
                <a href="#"
                  ><i class="fa fa-arrow-right" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p class="copyright_text">
              2024 All Rights Reserved. Design by Kelompok 4
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- copyright section end -->
    

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    
  </body>
</html>

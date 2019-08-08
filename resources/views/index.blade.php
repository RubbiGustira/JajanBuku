@extends('layouts.frontend')
@section('content')
<section class="banner-area" id="home">
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center">
      <div class="banner-content col-lg-6 col-md-6">
        <h1>
          Cari <br>
          Pilih <br>
          Beli
        </h1>
        <p class="text-white text-uppercase">
          semua orang ingin inovasi melalui buku
        </p>
      </div>
      <div class="banner-img col-lg-6 col-md-6">
        <img class="img-fluid" src="/user/img/books.png" alt="">
      </div>
    </div>
  </div>
</section>

<section class="products-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 pb-40 header-text text-center">
        <h1 class="pb-10">Buku Unggulan untuk Diperlihatkan</h1>
        <p>
          Yang sangat mencintai buku.
        </p>
      </div>
    </div>
    <div class="row">
      {{-- <div class="col-lg-3 col-md-6"> --}}
        <div class="single-product">
          <div class="thumb">
            <img src="user/img/m1.jpeg" alt="">
          </div>
          <div class="details">
            <h4>Dear Tomorrrow</h4>
            <p>
              Belakangan ini Maudy Ayunda menjadi perbincangan hangat netizen. Pasalnya Maudy Ayunda sempat dilanda kegalauan karena harus memilih universitas untuk melanjutkan jenjang pendidikan S2-nya, antara jurusan Pendidikan di Harvard University atau jurusan Administrasi Bisnis di Stanford University. 
            </p>
            <a href="#" class="primary-btn text-uppercase">View Details</a>
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-3 col-md-6"> --}}
      <div class="single-product">
      <div class="thumb">
      <img src="user/img/m2.jpg" alt="">
      </div>
      <div class="details">
        <h4>Komet Minor</h4>
        <p>Novel karya Tere Liye sudah tentu tak pernah ketinggalan berada di deretan buku best seller. Komet Minor duduk menjadi salah satu yang paling banyak dicari untuk kategori Novel.</p>
        <a href="#" class="primary-btn text-uppercase">View Details</a>
      </div>
    </div>
  </div>
  {{-- <div class="col-lg-3 col-md-6"> --}}
    <div class="single-product">
      <div class="thumb">
        <img src="user/img/m3.jpg" alt="">
      </div>
      <div class="details">
        <h4>Young Adult: Satu Setengah Meter (Five Feet Apart)</h4>
        <p>Novel yang baru saja diangkat ke layar lebar ini pun turut menjadi salah satu novel yang paling diburu sepanjang Maret 2019.  Kisah antara Stella Grant dan Will newman ini memang patut untuk disimak.</p>
        <a href="#" class="primary-btn text-uppercase">View Details</a>
      </div>
    </div>
  </div>
  {{-- <div class="col-lg-3 col-md-6"> --}}
      <div class="single-product">
      <div class="thumb">
      <img src="user/img/m4.jpg" alt="">
      </div>
      <div class="details">
        <h4>Sebuah Seni untuk Bersikap Bodo Amat</h4>
        <p>Dalam kategori self improvement, ternyata buku dengan judul asli The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life ini masih menjadi idaman di bulan Maret 2019. Untukmu para overthinker, jangan sampai melewatkan ajaibnya buku ini, ya!</p>
        <a href="#" class="primary-btn text-uppercase">View Details</a>
      </div>
    </div>
  </div>
  {{-- <div class="col-lg-3 col-md-6"> --}}
      <div class="single-product">
      <div class="thumb">
      <img src="user/img/m5.jpg" alt="">
      </div>
      <div class="details">
        <h4>Orang-orang Biasa</h4>
        <p>Sudah baca buku terbaru dari penulis besar Andrea Hirata? Kali ini karyanya berjudul Orang-orang Biasa.
            Novel yang mengisahkan tentang sekelompok orang yang berencana melakukan aksi kejahatan ini sukses masuk dalam jajaran best seller kategori novel untuk Maret 2019.</p>
        <a href="#" class="primary-btn text-uppercase">View Details</a>
      </div>
    </div>
  </div>
    </div>
  </div>
</section>
@endsection

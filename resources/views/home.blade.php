@extends('layouts.app')

@section('content')
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Tentang Umroh</h4>
          <p class="text-light">Umroh adalah pengalaman spiritual yang sangat penting bagi banyak umat Islam. Ini adalah momen yang ditunggu-tunggu dan merupakan salah satu cara untuk memperdalam iman dan ketaatan kepada Allah.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Instagram</a></li>
            <li><a href="#" class="text-white">WhatsApp</a></li>
            <li><a href="#" class="text-white">Email</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Ambil foto</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Al Munawwar Tour and Travel</h1>
        <p class="lead text-muted">"Al Munawwar Tour and Travel" adalah agen perjalanan yang berorientasi pada perjalanan religius ke tempat-tempat suci Islam seperti Makkah, dan juga menawarkan layanan yang berkaitan dengan perjalanan Umroh reguler dan plus.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">About</a>
          <a href="#" class="btn btn-secondary my-2">Pilihan Paket</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1551041777-575d3855ca71?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" wight="">

            <div class="card-body">
              <p class="card-text">Makkah memiliki nilai spiritual yang sangat besar bagi umat Islam. Perjalanan ke kota ini adalah tujuan utama bagi jamaah Muslim di seluruh dunia yang ingin memperdalam iman, mendekatkan diri kepada Allah.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://plus.unsplash.com/premium_photo-1697729482385-155d2570bc40?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

            <div class="card-body">
              <p class="card-text">Penting untuk diingat bahwa perjalanan ke Masjid Nabawi dan kunjungan ke makam Nabi Muhammad harus dilakukan dengan penuh rasa hormat dan kesadaran akan kebermaknaan tempat ini dalam agama Islam.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">12 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <img src="https://images.unsplash.com/photo-1504900385349-4cd5a6ac2874?auto=format&fit=crop&q=80&w=1776&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="card-body">
              <p class="card-text">Masjid Nabawi adalah tempat yang sangat dihormati dan penuh berkah bagi seluruh komunitas Muslim, dan kunjungan ke masjid ini adalah tujuan yang didambakan oleh banyak umat Islam di seluruh dunia.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">10 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="https://plus.unsplash.com/premium_photo-1697729527620-6fac4df363d8?auto=format&fit=crop&q=80&w=1784&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

            <div class="card-body">
              <p class="card-text">Jabal Al-Ahmar adalah nama yang merujuk kepada beberapa bukit atau pegunungan di berbagai lokasi di seluruh dunia berbahasa Arab, yang secara harfiah diterjemahkan sebagai "Gunung Merah".</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">10 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1602769490455-36cf9734dbcb?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

            <div class="card-body">
              <p class="card-text">Masjidil Haram adalah masjid suci terbesar di Makkah dan merupakan tempat terletaknya Ka'bah. Masjid ini mampu menampung jutaan jamaah dalam satu waktu dan adalah tempat yang paling dihormati dalam agama Islam.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">15 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1591604157118-b94e2684f857?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

            <div class="card-body">
              <p class="card-text">Ka'bah adalah tempat yang sangat dihormati dalam Islam, dan setiap Muslim berusaha untuk berdoa ketika berada di dekatnya. Pengunjung juga sering merasa emosi dan terharu saat melihat Ka'bah pertama kali.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">10 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1575101261474-5cb5653bb416?auto=format&fit=crop&q=80&w=1974&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="card-body">
              <p class="card-text">Masjid adalah institusi yang sangat penting dalam kehidupan umat Islam dan merupakan tempat pusat ibadah, pendidikan, dan komunitas dalam Islam. Memiliki peran sentral dalam memelihara dan mengembangkan keyakinan.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">15 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1588513646744-e94675143d6f?auto=format&fit=crop&q=80&w=1974&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

            <div class="card-body">
              <p class="card-text">Masjid Nabawi adalah salah satu tempat yang paling dihormati dalam Islam setelah Masjidil Haram di Makkah. Tempat ini dianggap sebagai salah satu masjid yang paling suci, dan ibadah di dalamnya memiliki nilai ibadah yang tinggi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <img src="https://images.unsplash.com/photo-1604655983671-9d03650f604c?auto=format&fit=crop&q=80&w=1974&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

            <div class="card-body">
              <p class="card-text">Masjidil Haram adalah salah satu masjid yang paling suci dalam agama Islam. Masjid ini terletak di Makkah, Arab Saudi, dan merupakan salah satu tempat paling suci dalam agama Islam. Masjidil Haram juga dikenal sebagai Al-Masjid Al-Haram. </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">11 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Jln. Pajagalan No. 16, Waluya, RT. 02 RW. 04, Kecamatan Cicalengka, Kabupaten Bandung 40395</p>
    <p class="mb-0">Testimoni <a href="/">Visit the homepage</a> or read our <a href="/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
@endsection

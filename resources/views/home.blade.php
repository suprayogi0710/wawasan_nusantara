@extends('layouts.mainlayout')
@section('title', 'Home')


@section('carausel')
@section('carausel')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="text-align: left">
                    Temukan Keberagaman Dengan Menjelajahi Web Pembelajaran
                    Wawasan Nusantara
                </h1>
                <h2 data-aos="fade-up" data-aos-delay="400" style="text-align: left">Temukan disini keberagaman wawasan
                    nusantara hanya untuk anda</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="/provinsi/" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets/img/peta.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section><!-- End Hero -->

@endsection
@endsection


@section('colase')
<div class="colases">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">


                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-flag-fill" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                            <p>INDONESIA</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-building"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
                            <p>PROVINSI</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people-fill" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="273.52" data-purecounter-duration="1" class="purecounter"></span>
                            <p>JUTA PENDUDUK</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-cloud-fill" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
                            <p>RIBU PULAU</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->
</div>
@endsection

@section('about')
<div class="abouts">

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Wawasan Nusantara</h3>
                            <h2 style="text-align: left">Nusantara adalah Sebutan Bagi Seluruh Wilayah Kepulauan
                                Indonesia</h2>
                            <p style="text-align: justify">
                                pengertian nusantara adalah istilah yang dipakai untuk menggambarkan wilayah kepulauan
                                Indonesia, istilah ini sudah digunakan oleh masyarakat Indonesia sejak abad ke-12 sampai
                                abad ke-16 yang pertama kali dicatat dalam sebuah literatur berbahasa Jawa Pertengahan
                                menggambarkan sebuah konsep kenegaraan yang telah dianut oleh kerajaan Majapahit.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="/provinsi/" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="/assets/img/carausel/carausel4.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

</div>
@endsection

@section('faq')
<div class="faqs">
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>F.A.Q</h2>
                <p>Pertanyaan Yang Sering Di Ajukan</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    Apa itu web pembelajaran wawasan nusantara?
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body" style="text-align: left">
                                    Web pembelajaran wawasan nusantara adalah sebuah website yang memaparkan semua
                                    provinsi yang ada di indonesia ini sehingga menjadi kesatuan yang terhubung
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    Apa saja yang dijelaskan setiap provinsi?
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body" style="text-align: left">
                                    Setiap provinsi menjelaskan mengenai makanan khas, tari daerah, baju daerah, bahkan
                                    tempat wisata yang ada di provinsi tersebut
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                    Fitur apa saja yang ada di web pembelajaran wawasan nusantara?
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body" style="text-align: left">
                                    Web pembelajaran wawasan nusantara ini hanya memiliki fitur beranda, provinsi dan
                                    halaman tentang kami
                                </div>
                            </div>
                        </div>



                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                    Tujuan dibuatnya web pembelajaran wawasan nusantara ini?
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body" style="text-align:left">
                                    Memberikan kemudahan dalam mencari seputar informasi terkait keberagaman yang ada di
                                    seluruh nusantara indonesia.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- End F.A.Q Section -->
</div>

@endsection
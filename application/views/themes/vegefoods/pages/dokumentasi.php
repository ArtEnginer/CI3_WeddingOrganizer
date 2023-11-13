<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/s1.jpg'); ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">Kami Menyediakan paket wedding terbaik</h1>
                        <h2 class="subheading mb-4">dari berbagai macam kategori dan harga</h2>
                        <p><a href="#products" class="btn btn-primary">Pesan Sekarang</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/s2.jpg'); ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">100% Jasa wedding profesional</h1>
                        <h2 class="subheading mb-4">Paket wedding terbaik</h2>
                        <p><a href="#products" class="btn btn-primary">Pesan Sekarang</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="products">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Diskon</h3>
                        <span>Diskon</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Wedding terbaik</h3>
                        <span>Dirancang oleh ahli</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Kualitas Terbaik</h3>
                        <span>Kualitas paket wedding terbaik</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Bantuan</h3>
                        <span>Bantuan 24/7 Selalu Online</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Dokumentasi Terbaru</span>
                <h2 class="mb-4">Dokumentasi</h2>
                <p><?php echo get_settings('store_tagline'); ?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if (count($dokumentasi) > 0) : ?>
                <?php foreach ($dokumentasi as $doc) : ?>
                    <div class="col-md-6 col-lg-6 ftco-animate">
                        <div class="product">
                            <img src="<?php echo base_url('assets/uploads/dokumentasi/' . $doc->nama); ?>" class="card-img-top" alt="<?php echo $doc->nama; ?>">
                            <div class="card-body">
                                <p class="card-text"><?php echo $doc->keterangan; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No dokumentasi available.</p>
            <?php endif; ?>
        </div>
    </div>

</section>
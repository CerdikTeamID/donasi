  

    <!-- Home_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_text">
                            <h3>Sistem Infromasi Pengelolaan Donasi dan Sumbangan <br> <span></span></h3>
                            <p>Terwujudnya pelayanan rumah sakit yang bermutu <br> sesuai dengan pelayanan kesehatan dan tercapainya kepuasan setinggi-tingginya bagi pasien, keluarga, dan masyarakat.</p>
                            <br>
                            <a href="<?=BASEURL;?>/Web/donasi" class="boxed-btn4">Donasi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="dog_thumb d-none d-lg-block">
                <img src="<?= BASEURL; ?>/assets_web/img/banner/zakat_ai.png" alt="">
            </div> -->
        </div>
    </div>
    <!-- Home_area_end -->
    <!-- About_area_start  -->
    <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="<?= BASEURL; ?>/assets_web/img/banner/zakat_ai.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3>Profile Kami</h3>
                            <p>
                            Terwujudnya pelayanan rumah sakit yang bermutu sesuai dengan pelayanan kesehatan dan tercapainya kepuasan yang setinggi tingginya bagi pasien,
                            keluarga, dan masyarakat.
                            </p>
                            <a href="<?=BASEURL;?>/Web/donasi" class="boxed-btn2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About_area_end  -->

    <!-- Why_area_start -->
    <div class="support-company-area fix" style="padding: 150px 0px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="right-caption">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle2">
                                    <h2 style="color: #33A4FF; font-weight: 700; font-size: 40px; line-height: 120%;">Kenapa Memilihh Rumah Sakit Anna Group ?</h2>
                                </div>
                                <div class="support-caption">
                                    <p style="color: #586880;"> Kami percaya bahwa kebersamaan berkaitan erat dengan pertumbuhan setiap insan Anna Group </p>
                                    <a href="https://mitrakeluarga.jobseeker.software/about" class="text-center" style="background: #33A4FF !important; border-radius: 14px; padding: 14px 60px;"><span style="font-weight: 500; font-size: 16px; color: #FFFFFF;">Cerita Kami</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="support-location-img ml-4" style=" box-shadow: 30px 35px rgba(0, 150, 220, 1); background-color: transparent; border-radius: 30px;">
                                <img src="https://mitrakeluarga.jobseeker.software/public/assets/image/why_mika.png?data=update1707432886" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- Why_area_end -->

    <!-- Article_area_start -->
    <div class="recent_news_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Berita Terkini</h3>

                </div>
            </div>
        </div>
        <div class="row">

           
        <?php foreach($data['pnr'] as $pnr) : ?>
            <div class="choice_item">
                  <img class="img-fluid choice" src="<?= BASEURL; ?>/<?= $pnr['tulisan_gambar']; ?>" alt="">               
           </div>
         <?php endforeach ?>

<!--             <?php foreach($data['pnr'] as $row) : ?>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <img src="<?= BASEURL; ?>/<?= $pnr['tulisan_gambar']; ?>" alt="<?php echo $row->tulisan_judul; ?>">
                            </a>
                            <span class="badge"><?php echo $row->tulisan_kategori_nama; ?></span>
                        </div>
                        <div class="news_info">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <h4><?php echo $row->tulisan_judul; ?></h4>
                            </a>
                            <p><?php echo limit_words($row->tulisan_isi, 10) . '...'; ?></p>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> <?php echo $row->tanggal; ?></span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?> -->

        </div>
    </div>
    </div>
    <!-- Article_area_End -->

    <!-- About_area_start -->

    <!-- About_area_end -->
    




    <!-- pet_care_area_start  -->
<!--     <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3><span>Apa itu Zakat </span> 
                                Mal ?</h3>
                            <p>Zakat maal yang dimaksud dalam perhitungan ini adalah zakat yang dikenakan atas uang, emas, surat berharga, dan aset yang disewakan (Al Qur'an Surah At Taubah ayat 103, Peraturan Menteri Agama No 52/2014 dan pendapat Shaikh Yusuf Qardawi). Tidak termasuk harta pertanian, pertambangan, dan lain-lain yang diatur dalam UU No.23/2011 tentang pengelolaan zakat. Zakat maal harus sudah mencapai nishab (batas minimum) dan terbebas dari hutang serta kepemilikan telah mencapai 1 tahun (haul).
                            </p>

                            <p>
                            Standar harga emas yg digunakan untuk 1 gram nya adalah Rp600.000,-. Sementara nishab yang digunakan adalah sebesar 85 gram emas.
                            <br>
                            Adapun cara menghitung zakat maal sebagai berikut:
                            2,5% x Jumlah harta yang tersimpan selama 1 tahun
                            <br>
                            Contoh:
                            <br>
                            Bapak A selama 1 tahun penuh memiliki harta yang tersimpan (emas/perak/uang) senilai Rp100.000.000,-. Jika harga emas saat ini Rp600.000,-/gram, maka nishab zakat senilai Rp51.000.000,-. Sehingga Bapak A sudah wajib zakat. Zakat maal yang perlu Bapak A tunaikan sebesar 2,5% x Rp100.000.000,- = Rp2.500.000,-.
                            </p>
                            <a href="<?=BASEURL;?>/Web/donasi" class="boxed-btn3">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="<?= BASEURL; ?>/assets_web/img/about/zakat_mal.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- pet_care_area_end  -->
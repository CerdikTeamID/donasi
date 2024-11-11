<style type="text/css">
    /* [IMAGE] */
.zoomD {
  width: 600px;
  height: auto;
  cursor: pointer;
}

/* [LIGHTBOX] */
#lb-back {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: rgba(0, 0, 0, 0.5);
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  transition: all 0.4s;
}
#lb-back.show {
  visibility: visible;
  opacity: 1;
}
#lb-img {
  text-align: center;
}

/* [DOES NOT MATTER] */
html, body {
  padding: 0;
  margin: 0;
}
/* choice Area css
============================================================================================ */
.choice_inner {
  margin-bottom: -30px;
}

.choice_item {
  margin-bottom: 30px;
  position: flex;
  margin-left: 10px;
}

.choice_item img.choice {
  width: 270px;
  height: 169px;
}

.choice_item .choice_text {
  margin-top: 20px;
}

.choice_item .choice_text h4 {
  font-size: 18px;
  line-height: 27px;
  color: #222222;
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  margin-bottom: 15px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.choice_item .choice_text h4:hover {
  color: #ff1857;
}

.choice_item .choice_text p {
  margin-bottom: 0px;
}

.choice_text {
  margin-top: 20px;
}

.choice_text h4 {
  font-size: 18px;
  line-height: 27px;
  color: #222222;
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  margin-bottom: 15px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.choice_text h4:hover {
  color: #ff1857;
}

.choice_text p {
  margin-bottom: 0px;
}

.small .choice_text h4 {
  font-size: 14px;
  line-height: 24px;
}

.date {
  margin-bottom: 15px;
}

.date .gad_btn {
  color: #fff;
}

.date a {
  color: #777777;
  font-size: 12px;
  font-family: "Open Sans", sans-serif;
  margin-right: 15px;
}

.date a i {
  padding-right: 8px;
}

.date a:last-child {
  margin-right: 0px;
}

/* End choice Area css
============================================================================================ */

</style>

<!-- library CSS fancybox -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<!-- library JS -->
<script src="//code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- library JS fancybox -->
<script src="fancybox/jquery.fancybox.js"></script>

<!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Kegiatan Mesjid</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->



	<!-- Start Sample Area -->
	<section class="sample-text-area">
		    <div class="container">
      <div class="main_title2">
         <h2>Editor's Choice</h2>
    </div>

    <div class="row choice_inner">
         <?php foreach($data['pnr'] as $pnr) : ?>
            
               <div class="choice_item">
                  <img class="img-fluid choice" src="<?= BASEURL; ?>/<?= $pnr['bukti_donasi']; ?>" alt="">               
           </div>
         <?php endforeach ?>
    </div>



   	</div>

		<div class="container box_1170">
			<!-- <h3 class="text-heading">Text Sample</h3> -->
			<p class="sample-text">
				<b>Zakatin</b> telah berkerjasama dengan beberapa desa dalam memfasilitasi kaum muslimin dalam menunaikan zakatnya. Berikut adalah daftar mesjid-mesjid yang telah berkerjasama dengan <b>Zakatin</b>.

			</p>
			<div class="section-top-border">
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Mesjid</div>
							<div class="visit">Alamat</div>
							<div class="visit">RT</div>
							<div class="percentage">RW</div>
						</div>
						<?php 
						$no=1;
						foreach ($data['mesjid'] as $dt) : ?>
						<div class="table-row">
							<div class="serial"><?= $no++;?></div>
							<div class="country"><?= $dt['nama_mesjid'];?></div>
							<div class="visit"><?= $dt['alamat_mesjid'];?></div>
							<div class="visit"><?= $dt['RT'];?></div>
							<div class="percentage"><?= $dt['RW'];?></div>
						</div>
						<?php endforeach;?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Sample Area -->
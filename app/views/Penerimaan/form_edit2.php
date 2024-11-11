<?php foreach ($data['pnr'] as $dt): ?>
<?php endforeach; ?>

<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcome-heading">
                                &nbsp;
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="<?= BASEURL; ?>/home_index">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Penerimaan Zakat</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->

<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 des-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                &nbsp;
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><a href="<?= BASEURL; ?>/home_index">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Penerimaan Zakat</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Form Edit Penerimaan Zakat</h1>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="all-form-element-inner">
                                        <form action="<?= BASEURL; ?>/Penerimaan/edit_data" method="POST">
                                            <input type="hidden" id="last-name" name="id_penerimaan" required="required"
                                                class="form-control" value="<?= $dt['id_penerimaan'] ?>">
                                            <h3>
                                                <center>Data Penerima</center>
                                            </h3>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Nama
                                                            Penerima</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-select-list">
                                                            <input type="text" name="nama_penerima" required="required"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Kategori</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-select-list">
                                                            <select name="kategori" class="form-control">
                                                                <option value="Kosong">--Pilih Jenis--</option>
                                                                <option value="Ranap">Rawat Inap</option>
                                                                <option value="Rajal">Rawat Jalan</option>
                                                                <option value="icu">ICU</option>
                                                                <option value="igd">IGD</option>
                                                                <option value="picu">PICU</option>
                                                                <option value="nicu">NICU</option>
                                                                <option value="hcu">HCU</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Alamat
                                                            Penerima</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-select-list">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="alamat_penerima">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Total
                                                            Donasi</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-select-list">
                                                            <input id="middle-name" class="form-control" type="text"
                                                                name="total">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-9">
                                                            <div class="login-horizental cancel-wp pull-left">
                                                                <button class="btn btn-sm btn-primary login-submit-cs"
                                                                    type="submit">Save Change</button>
                                                                <button class="btn btn-warning"
                                                                    type="reset">Reset</button>
                                                                <a href="<?= BASEURL; ?>/Penerima/" button type="button"
                                                                    class="btn btn-primary">Kembali</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
</div>
</div>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('backend/core/header'); ?>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <?php $this->load->view('backend/core/menu'); ?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?=$halaman?></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <!-- <li><a href="#"><?=$halaman?></a></li> -->
                            <li>
                                <a href="<?=base_url('admin/tambah_produk')?>" class="btn btn-md btn-success">
                                   <div class="text-white">
                                   <i class="fa fa-plus"></i> Tambah Produk
                                   </div> 
                                </a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="">
                        <!-- <pre> -->
                            <table class="table" id="dtBasicExample" cellspacing="0" width="100%">
                                <thead class="white-box">
                                    <tr>
                                        <th>Produk</th>
                                        <th>Gambar</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data_produk as $dp): ?>
                                <?php $gambar = explode(',', $dp->gambar); ?>
                                    <tr class="white-box">
                                        <td>
                                            <a href="<?=base_url('home/detail')?>/<?=$dp->id_produk?>" target="_blank">
                                                <p class="text-success h5"><?=ucwords($dp->nama_produk)?></p>
                                            </a>
                                            <p><?=$dp->kategori?></p>
                                            <p><?=$dp->sub_kategori?></p>
                                            <p class="text-warning"><?='Rp '.number_format($dp->harga)?></p>
                                            <p><?=strtoupper($dp->ukuran)?></p>
                                        </td>
                                        <td>
                                            <img class="img-thumbnail" src="<?=base_url()?>assets/gambar/<?=$gambar[0]?>" height="10px" width="100px">
                                        </td>
                                        <td>
                                            <a href=""><i class="fa fa-edit"></i></a>
                                            <a href=""><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><?=$halaman?></h3>
                            <a href="<?=base_url('admin/tambah_produk')?>" class="btn btn-info"><i class="fa fa-plus-square-o"></i></a>
                           
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Sub Kategori</th>
                                            <th>Harga</th>
                                            <th>Ukuran</th>
                                            <th>Setting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($data_produk as $dp): ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td class="txt-oflo">
                                                <a href="<?=base_url('admin/edit_produk')?>/<?=$dp->id_produk?>"><?=$dp->nama_produk?></a>
                                            </td>
                                            <td><?=$dp->kategori?></td>
                                            <td class="txt-oflo"><?=str_replace(',', '<br>', $dp->sub_kategori)?></td>
                                            <td><span class="text-success"><?='Rp. '.number_format($dp->harga)?></span></td>
                                            <td><?=str_replace(',', '<br>', $dp->ukuran)?></td>
                                            <td>
                                                <a href="http://" class="btn btn-sm btn-rounded btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $i++; endforeach; ?>
                                    </tbody>
                                </table> -->
                            <!-- </div> -->
                        <!-- </div>
                    </div>
                </div> -->
            </div>
            <!-- /.container-fluid -->
            <?php $this->load->view('backend/core/footer'); ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php $this->load->view('backend/core/jquery'); ?>
</body>

</html>

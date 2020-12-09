<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $this->load->view($header); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('/admin_bl/assets/vendor/jquery/jquery.min.js'); ?>"></script>
</head>
<style>
    .btn-warning {
        color: #fff;
        background-color: #CB8341;
        border-color: #CB8341;
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #D69D69;
        border-color: #D69D69;
    }

    .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
    .show > .btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #D69D69;
        border-color: #D69D69;
    }

    .btn-success {
        color: #fff;
        background-color: #399B8D;
        border-color: #399B8D;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #4ABDAC;
        border-color: #4ABDAC;
    }

    .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
    .show > .btn-success.dropdown-toggle {
        color: #fff;
        background-color: #4ABDAC;
        border-color: #4ABDAC;
    }
</style>
<body>

    <!-- mian-content -->
    <div class="main-banner inner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">

                <?php echo $this->load->view($left_content); ?>

            </div>
        </header>
        <!-- //header -->

    </div>
    <!--//main-content-->
    <!---->

    <div id="titlenama"></div>

    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <div class="left-ads-display col-lg-12">
                    <div class="row">
                        <div class="col-md-4">

                            <div id="displayImage" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#displayImage" data-slide-to="0" class="active"></li>
                                <li data-target="#displayImage" data-slide-to="1"></li>
                                <li data-target="#displayImage" data-slide-to="2"></li>
                                <li data-target="#displayImage" data-slide-to="3"></li>
                                <li data-target="#displayImage" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo base_url('/admin_bl/assets/img/barang/');  ?>s1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="<?php echo base_url('/admin_bl/assets/img/barang/');  ?>s2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="<?php echo base_url('/admin_bl/assets/img/barang/');  ?>s3.jpg" alt="Third slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="<?php echo base_url('/admin_bl/assets/img/barang/');  ?>s4.jpg" alt="Fourth slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="<?php echo base_url('/admin_bl/assets/img/barang/');  ?>s5.jpg" alt="Five slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#displayImage" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#displayImage" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="desc1-right col-md-6 pl-lg-4">
                    <div id="namabrg"></div><br>
                    <div id="hargabrg"></div>
                    <br>
                    <div class="share-desc">
                        <div class="share">
                            <h4>Ukuran :</h4>

                            <ul class="w3layouts_social_list list-unstyled">
                                <li>
                                    S
                                </li>
                                <li class="mx-2">
                                   M
                               </li>
                               <li>
                                L
                            </li>
                            <li class="ml-2">
                               XL
                           </li>
                       </ul>
                   </div>
                   <div class="clearfix"></div>
               </div>
               <br>
               <div class="share-desc">
                <div class="share">
                    <h4>Warna :</h4>

                    <ul class="w3layouts_social_list list-unstyled">
                        <li>
                            Biru
                        </li>
                        <li class="mx-2">
                           Merah
                       </li>
                       <li>
                        Kuning
                    </li>
                    <li class="ml-2">
                       Hijau
                   </li>

               </ul>
           </div>
           <br>
           <div class="share-desc">
            <div class="share">
                <ul class="w3layouts_social_list list-unstyled">
                    <h4>Pesan Lewat :</h4>
                    <div id="btnpesan"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<div class="row sub-para-w3layouts mt-5">

    <h3 class="shop-sing">Deskripsi Barang</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
</div>


</section>
<!-- //contact -->

<?php echo $this->load->view($footer); ?>

<script>
    $(document).ready(function(){
        $.ajax({
            url: 'ajaxbarang',
            type: "POST",
            data: {
                idbarang: '3',
            },
            success: function (res) { 
                var obj = JSON.parse(res);

                var nama = obj[0]['nama'];
                var angka = obj[0]['harga'];
                var reverse = angka.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');
                var link = obj[0]['link'];
                var jumlahukuran = obj[0]['ukuran_id'].split(';');
                var jumlahwarna = obj[0]['warna_id'].split(';');

            //title nama barang
            var title = '';
            title += '<ol class="breadcrumb">';
            title += '<li class="breadcrumb-item">';
            title += '<a href="';
            title += "<?= site_url('/') ?>";
            title += '">Home</a></li>';
            title += '<li class="breadcrumb-item active">'+nama+'</li>';
            title += '</ol>';
            
            $('#titlenama').html(title);
            $('#namabrg').html('<h2>'+nama+'</h2>');
            $('#hargabrg').html('<h5>Rp. '+ribuan+',-</h5>');

            var btnpesan = '';
            btnpesan += '<li><button type="button" class="btn btn-success" onclick="directwa(';
            btnpesan += "'"+nama+"','";
            btnpesan += "Rp. "+ribuan+"')";
            btnpesan += '"><img src="';
            btnpesan += "<?php echo base_url('/admin_bl/assets/img/wa.png');  ?>";
            btnpesan += '" height="25px" width="25px">    Whatsapp</button>';
            btnpesan += '</li><li class="mx-2"><button type="button" class="btn btn-warning" onclick="';
            btnpesan += "window.open('"+link+"','_blank');";
            btnpesan += '"><img src="';
            btnpesan += "<?php echo base_url('/admin_bl/assets/img/shopee.png');  ?>";
            btnpesan += '" height="25px" width="25px">    Shopee</button></li>';

            $('#btnpesan').html(btnpesan);

            //detail barang


        }
    }); 
    });

    function directwa(brg, harga) {
        var brgakhir = brg.replace(" ", "%20");
        var hargakhir = harga.toLocaleString('IND', {style: 'currency', currency: 'IDR'}).replace(" ", "%20");

        var wa = 'https://api.whatsapp.com/send?phone=6281222334054&text=Saya%20tertarik%20dengan%20'+brgakhir+'%20-%20'+hargakhir;
        window.open(wa,'_blank');
    }
    
</script>

</body>

</html>
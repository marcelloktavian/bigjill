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
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('/admin_bl/assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
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
    pre {
        white-space: pre-wrap; 
        word-wrap: break-word;
        font-size: 17px;
        font-family: unset;
        color: #62676B;

    }
    textarea {
        width: 100%;
        height: 100%;
        border-color: #fff;
        resize:none;
    }
    .chip {
      display: inline-block;
      padding: 0 25px;
      height: 30px;
      font-size: 14px;
      line-height: 30px;
      border-radius: 25px;
      background-color: #f1f1f1;
      margin-right: 5px;
  }
  .closebtn {
      padding-left: 10px;
      color: #888;
      font-weight: bold;
      float: right;
      font-size: 15px;
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

                                <div id="pagination"></div>
                                <div id="carousel"></div>

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

                                    <div id="kategori"></div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="share-desc">
                                <div class="share">

                                    <div id="ukuran"></div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            <div class="share-desc">
                                <div class="share">

                                    <div id="warna"></div>

                                </div>
                                <br>
                                <div class="share-desc">
                                    <div class="share">
                                        <ul class="w3layouts_social_list list-unstyled">

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


                        <div id="deskripsi"></div>

                    </div>
                    <!--  -->
                    <h3 class="shop-sing">Recommended Products</h3>
                    <!--  -->
                    <div class="row m-0">
                        <?php foreach($random as $rand): ?>
                            <div class="col-md-4 product-men">
                                <div class="product-shoe-info shoe text-center">
                                    <div class="men-thumb-item">
                                        <img src="<?= base_url("/admin_bl/assets/img/barang/").$rand->foto_utama ?>" class="img-fluid" alt="">
                                        <span class="product-new-top">Recommended</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="<?php echo site_url('/detail/');echo $rand->barang_id; ?>"><?= $rand->nama ?> </a>
                                        </h4>

                                        <div class="product_price">
                                            <div class="grid-price">
                                                <span class="money"><?= $rand->harga ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--  -->
                    </div>
                </div>
                <!--  -->

            </section>
            <!-- //contact -->
            <!-- Modal -->
            <div class="modal fade" id="option_wa" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Pilih Nomer Whatsapp</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <input type="hidden" id="tmpdat">
                    <table class="table table-responsive-md">
                            <tr>
                                <th><div class="">Nomer Admin</div></th>
                                <th><div class="">Kirim</div></th>
                            </tr>
                            <tr>
                            <?php foreach ($wa as $wa): ?>
                                <td><?= $wa->nomor; ?></td>
                                <td><button class="btn btn-primary" onclick="pesanWa('<?= $wa->nomor ?>','<?= $wa->message ?>')">Kirim Pesan</button></td>
                            <?php endforeach; ?>
                            </tr>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
                </div>
            </div>
            <!--  -->
            
            <script>
                $(document).ready(function(){
                    var id = window.location.pathname.split("/").pop();
                    var url = '/bigjill/index.php/Search/Detail/';
                    $.ajax({
                        url: url+'ajaxbarang',
                        type: "POST",
                        data: {
                            idbarang: id,
                        },
                        success: function (res) { 
                            var obj = JSON.parse(res);

                            var nama = obj[0]['nama'];
                            var angka = obj[0]['harga'];
                            var reverse = angka.toString().split('').reverse().join(''),
                            ribuan = reverse.match(/\d{1,3}/g);
                            ribuan = ribuan.join('.').split('').reverse().join('');
                            var link = obj[0]['link'];
                            var deskripsi = obj[0]['deskripsi'];
                            var jumlahukuran = [""];
                            if (obj[0]['ukuran_id'] != null && obj[0]['ukuran_id'].trim() != "") {
                              var jumlahukuran = obj[0]['ukuran_id'].split(',');
                          }
                          var jumlahwarna = obj[0]['warna_id'].split(',');

            //foto 
            var fotoutama = obj[0]['foto'];
            var foto1 = obj[0]['foto1'];
            var foto2 = obj[0]['foto2'];
            var foto3 = obj[0]['foto3'];
            var foto4 = obj[0]['foto4'];

            var baris = 0;

            var carousel = '';
            carousel += '<div class="carousel-inner">';

            if (fotoutama!='' && fotoutama!=null && fotoutama!='null.png' && fotoutama!='0') {
                baris += 1;
                carousel += '<div class="carousel-item active"><img class="d-block w-100" src="';
                carousel += "<?php echo base_url('/admin_bl/assets/img/barang/');  ?>" + fotoutama;
                carousel += '" alt="First slide"></div>';
            }
            if (foto1!='' && foto1!=null && foto1!='null.png' && foto1!='0') {
                baris += 1;
                carousel += '<div class="carousel-item"><img class="d-block w-100" src="';
                carousel += "<?php echo base_url('/admin_bl/assets/img/barang/');  ?>" + foto1;
                carousel += '" alt="Second slide"></div>';
            }
            if (foto2!='' && foto2!=null && foto2!='null.png' && foto2!='0') {
                baris += 1;
                carousel += '<div class="carousel-item"><img class="d-block w-100" src="';
                carousel += "<?php echo base_url('/admin_bl/assets/img/barang/');  ?>" + foto2;
                carousel += '" alt="Third slide"></div>';
            }
            if (foto3!='' && foto3!=null && foto3!='null.png' && foto3!='0') {
                baris += 1;
                carousel += '<div class="carousel-item"><img class="d-block w-100" src="';
                carousel += "<?php echo base_url('/admin_bl/assets/img/barang/');  ?>" + foto3;
                carousel += '" alt="Fourth slide"></div>';
            }
            if (foto4!='' && foto4!=null && foto4!='null.png' && foto4!='0') {
                baris += 1;
                carousel += '<div class="carousel-item"><img class="d-block w-100" src="';
                carousel += "<?php echo base_url('/admin_bl/assets/img/barang/');  ?>" + foto4;
                carousel += '" alt="Five slide"></div>';
            }
            carousel += '</div>';

            var nomor = '';
            nomor += '<ol class="carousel-indicators">';
            for (var i = 0; i < baris; i++) {
                if (i==0) {
                    // console.log(i);
                    nomor += '<li data-target="#displayImage" data-slide-to="'+i+'" class="active"></li>';
                }else{
                    // console.log(i);
                    nomor += '<li data-target="#displayImage" data-slide-to="'+i+'"></li>';
                }                                  

            }
            nomor += '</ol>';
            
            $('#carousel').html(carousel);
            $('#pagination').html(nomor);



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
            $('#hargabrg').html('<h2>Rp. '+ribuan+',-</h2>');


            var btnpesan = '<h4>Pesan Lewat :</h4>';
            btnpesan += '<li><button type="button" class="btn btn-success" onclick="directwa(';
            btnpesan += "'"+nama+"','";
            btnpesan += "Rp. "+ribuan+"','"+obj[0]['kategori']+"')";
            btnpesan += '"><img src="';
            btnpesan += "<?php echo base_url('/admin_bl/assets/img/wa.png');  ?>";
            btnpesan += '" height="25px" width="25px">    Whatsapp</button>';
            btnpesan += '</li><li class="mx-2"><button type="button" class="btn btn-warning" onclick="';
            btnpesan += "window.open('"+link+"','_blank');";
            btnpesan += '"><img src="';
            btnpesan += "<?php echo base_url('/admin_bl/assets/img/shopee.png');  ?>";
            btnpesan += '" height="25px" width="25px">    Shopee</button></li>';

            $('#btnpesan').html(btnpesan);


            var isidesc = '';
            isidesc += '<h2 class="shop-sing">Deskripsi Barang</h2><br>';
            isidesc += '<pre>'+deskripsi+'</pre>';

            $('#deskripsi').html(isidesc);


            var kategori = '<h4>Kategori : <b>'+obj[0]['kategori']+'</b></h4>';

            $('#kategori').html(kategori);


            var htmlwarna = '<h4>Warna :</h4>';
            htmlwarna += '<ul class="w3layouts_social_list list-unstyled">';
            for (var j = 0; j < jumlahwarna.length; j++) {
                // console.log(j);
                var warna = 0;
                $.ajax({
                  url: url+'ajaxwarna',
                  type: "POST",
                  data: {
                    idwarna: jumlahwarna[j],
                },
                success: function (res3) {
                    var obj3 = JSON.parse(res3);
                    // console.log(obj3.length);
                    if (obj3.length > 0) {
                       if (j==0 || j % 3 == 0) {
                        htmlwarna += '<div class="chip"><span class="closebtn">'+obj3[0]['nama']+'</span></div></li>';
                    } else if (j==1 || j % 4 == 0) {
                        htmlwarna += '<div class="chip"><span class="closebtn">'+obj3[0]['nama']+'</span></div></li>';
                    } else {
                        htmlwarna += '<div class="chip"><span class="closebtn">'+obj3[0]['nama']+'</span></div></li>';
                    }
                    
                } 
                warna += 1;

                if (warna==jumlahwarna.length) {
                    $('#warna').html(htmlwarna+'</ul>');
                }

            }
        });
            }

            if (obj[0]['ukuran']=='Y'  &&  (obj[0]['ukuran_id'] != null && obj[0]['ukuran_id'].trim() != "")) {
               var htmlukuran = '<br><h4>Ukuran :</h4>';
               htmlukuran += '<ul class="w3layouts_social_list list-unstyled">';
               for (var j = 0; j < jumlahukuran.length; j++) {
                // console.log(j);
                var ukuran = 0;
                $.ajax({
                  url: url+'ajaxukuran',
                  type: "POST",
                  data: {
                    idukuran: jumlahukuran[j],
                },
                success: function (res2) {
                    var obj2 = JSON.parse(res2);
                    if (obj2.length > 0) {
                        if (j==0 || j % 3 == 0) {
                            htmlukuran += '<div class="chip"><span class="closebtn">'+obj2[0]['nama']+'</span></div></li>';
                        } else if (j==1 || j % 4 == 0) {
                            htmlukuran += '<div class="chip"><span class="closebtn">'+obj2[0]['nama']+'</span></div></li>';
                        } else {
                            htmlukuran += '<div class="chip"><span class="closebtn">'+obj2[0]['nama']+'</span></div></li>';
                        }
                    }
                    ukuran += 1;

                    if (ukuran==jumlahukuran.length) {
                        $('#ukuran').html(htmlukuran+'</ul>');
                    }
                }
            });
            }
        }

    }
}); 
});

function directwa(brg, harga,kategori) {
    // var brgakhir = brg.replace(" ", "%20");
    // var hargakhir = harga.toLocaleString('IND', {style: 'currency', currency: 'IDR'}).replace(" ", "%20");

    // var wa = 'https://api.whatsapp.com/send?phone=6281222334054&text=Saya%20tertarik%20dengan%20'+brgakhir+'%20-%20'+hargakhir;
    // window.open(wa,'_blank');
    $("#tmpdat").val(brg+';'+harga+';'+kategori);
    $("#option_wa").modal('show');
}

function pesanWa(nomer,message){
    var detail = $("#tmpdat").val().split(';');
    var message_name = message.replace("#nama", detail[0]);
    var harga = detail[1].toLocaleString('IND', {style: 'currency', currency: 'IDR'});
    var message_harga = message_name.replace("#harga", harga);
    var message_kat = message_harga.replace("#kategori", detail[2]);

    var fixpesan = encodeURI(message_kat);
    // console.log(fixpesan);

    var wa = 'https://api.whatsapp.com/send?phone='+detail[0]+'&text='+fixpesan;
    window.open(wa,'_blank');
}
</script>
<?php echo $this->load->view($footer); ?>
</body>

</html>
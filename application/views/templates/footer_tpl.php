<!-- footer -->
<footer>
  <div class="container">
   <div class="row footer-top">
    <div class="col-lg-4 footer-grid_section_w3layouts">
     <h2 class="logo-2 mb-lg-4 mb-3">
      <a href="<?php echo site_url('/'); ?>"><img src="<?= base_url('/admin_bl/assets/img/logo/logo3.png') ?>" width="150px"></a>
    </h2>
    <p>BigJill collections can help you to always be cool! Colorful basic shirts, tops, pants, and bags, are all made from good quality materials.</p>
    <h4 class="sub-con-fo ad-info my-4">Catch on Social</h4>
    <ul class="w3layouts_social_list list-unstyled">
      <li>
       <a href="https://www.facebook.com/bigjillofficialbandung" class="w3pvt_facebook" target="_blank">
        <span class="fa fa-facebook-f"></span>
      </a>
    </li>
    <li class="mx-2">
     <a href="https://api.whatsapp.com/send?phone=6281222334054&fbclid=IwAR113_4-tRy1_uNzxfIcU_eqHc4krvdpCrZaTWkl9ZJiIrwf4OfeRX-V4fE" class="w3pvt_twitter" target="_blank">
      <span class="fa fa-whatsapp"></span>
    </a>
  </li>
  <li>
   <a href="https://www.instagram.com/bigjillofficial/" class="w3pvt_dribble" target="_blank">
    <span class="fa fa-instagram"></span>
  </a>
</li>
<li class="ml-2">
 <a href="https://shopee.co.id/bigjillofficial" class="w3pvt_google" target="_blank">
  <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
</a>
</li>
</ul>
</div>
<div class="col-lg-8 footer-right">
  <div class="row mt-lg-4 bottom-w3layouts-sec-nav mx-0">
   <div class="col-md-4 footer-grid_section_w3layouts">
    <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Information</h3>
    <ul class="list-unstyled w3layouts-icons">
     <li>
      <a href="<?php echo site_url('/'); ?>">Home</a>
    </li>
    <li class="mt-3">
      <a href="<?php echo site_url('/about'); ?>">About Us</a>
    </li>
  </ul>
  <br> <br>
  <div class="agileinfo_social_icons">
    <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Customer Service</h3>
    <ul class="list-unstyled w3layouts-icons">

     <li>
      <a href="<?php echo site_url('/contact'); ?>">Contact Us</a>
    </li>

  </ul>
</div>

</div>
<div class="col-md-4 footer-grid_section_w3layouts">
 <!-- social icons -->
 <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Info</h3>
 <div class="contact-info">
  <div class="footer-address-inf">
   <h4 class="ad-info mb-2">Whatsapp</h4>
   <!-- Looping dari db -->
   <?php 
   foreach ($wa as $wa): ?>
        <p><a href="https://api.whatsapp.com/send?phone=<?= $wa->nomor ?>&fbclid=IwAR113_4-tRy1_uNzxfIcU_eqHc4krvdpCrZaTWkl9ZJiIrwf4OfeRX-V4fE" target="_blank"><?= $wa->display ?></a></p>
     <?php
   endforeach; ?>

 </div>
 <div class="footer-address-inf my-4">
   <h4 class="ad-info mb-2">Email </h4>
   <!-- Looping dari db -->
   <?php 
   foreach ($email as $ml): ?>
       <p><a href="mailto:<?= $ml->email ?>" target="_blank"><?= $ml->email ?></a></p>
     <?php
   endforeach; ?>
   
 </div>
</div>
<!-- social icons -->
</div>
<div class="col-md-4 footer-grid_section_w3layouts my-md-0 my-5">
 <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Location</h3>
 <div class="contact-info">
   <div class="footer-address-inf">
    <!-- Looping dari db -->
    <?php 
   foreach ($lokasi as $lk): ?>
        <p><a href="<?= $lk->url ?>" target="_blank"><?= $lk->nama ?></a></p>
     <?php
   endforeach; ?>
    
   </div>
 </div>
</div>


</div>
<div class="cpy-right text-left row">
 <p class="col-md-10">© 2020 BigJill Official. All rights reserved | Design by
  <a href="http://w3layouts.com"> W3layouts.</a>
</p>
<!-- move top icon -->
<a href="#home" class="move-top text-right col-md-2"><span class="fa fa-long-arrow-up" aria-hidden="true"></span></a>
<!-- //move top icon -->
</div>
</div>
</div>
</div>
</footer>


<script>
      function cari() {
        var brg = document.getElementById("search").value;
        if (brg!='') {
            var url = "<?php echo site_url('/cari/') ?>";
            window.location.href = url+brg+'#catalog';
        }
    }
</script>
<!-- //footer
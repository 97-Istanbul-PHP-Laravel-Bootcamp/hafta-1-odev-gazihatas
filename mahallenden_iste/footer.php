<footer id="footer"><!--Footer-->
 
  <div class="footer-widget">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Kategoriler</h2>
            <ul class="nav nav-pills nav-stacked">
              <?php $kategori=$baglanti->prepare("SELECT * FROM  kategori  order by kategori_sira ASC limit 6");
               $kategori->execute();
               while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
              <li><a class="beyazyazi" href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_adi'] ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Sayfalar</h2>
            <ul class="nav nav-pills nav-stacked">
               <li><a href="index.php">Anasayfa</a></li>
               <li><a href="hakkimizda.php">Hakkımızda</a></li>
               <li><a href="soru.php">Sık sorulan sorular</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Policies</h2>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privecy Policy</a></li>
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">Billing System</a></li>
              <li><a href="#">Ticket System</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Adres</h2>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#"> <?php echo $ayarcek['adres'] ?></a></li> 
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
          <div class="single-widget">
            <h2>Abone Ol</h2>
            <form action="#" class="searchform">
              <input type="text" placeholder="Email adresinizi giriniz" />
              <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
              
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <div class="header_top"><!--header_top-->
    </div><!--/header_top-->
  	<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> <?php echo $ayarcek['telefon']; ?></a></li>
								<li><a href="mailto:<?php echo $ayarcek['email'] ?>"><i class="fa fa-envelope"></i> <?php echo $ayarcek['email'] ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo $ayarcek['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $ayarcek['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $ayarcek['youtube'] ?>"><i class="fa fa-youtube"></i></a></li>
								<li><a href="<?php echo $ayarcek['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <p class="pull-left">Copyright © 2021 <?php echo $ayarcek['baslik'] ?> Inc. All rights reserved.</p>
       
      </div>
    </div>
  </div>

</footer><!--/Footer-->



  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>

</body>
</html>

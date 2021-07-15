<?php
 require_once 'header.php'; 
 
 ?>
			
			
	<section id="form" align="center" style="background-color:#E1E8EB;"><!--form-->
	<div align="center">
				<figure>
					<img src="Admin/resimler/logo/Mahallemden_logo.png" alt="" width="250px" heigth="250px" style="border-radius: 125px;" alt="">
				</figure>
			</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
				
				<form  action="islem.php" method="post">
					<div class="login-form"><!--login form-->
						<h2>Giriş Yap
						<?php if (@$_GET['durum']=="hata") { ?>
                                 <i style="color:red">    Kullanıcı adı ya da şifre hatalı</i>
                               	<?php     } ?>

								<?php if (@$_GET['durum']=="gulegule") { ?>
                                 <i style="color:#FF6347">   Görüşmek üzere yine bekleriz</i>
                               	<?php     } ?>

								<?php if (@$_GET['durum']=="girisyap") { ?>
                                 <i style="color:#FF6347">  Lütfen giriş yapınız</i>
                               <?php     } ?>
						</h2>
						
						<input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı adınızı giriniz.">
						<br>
						<br>
						<input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi giriniz.">
							<br>
							<br>
							
							<button type="submit" name="login" class="btn btn-default">Giriş Yap</button>
						</form>
					</div><!--/login form-->
				</div>
				
				<div class="col-sm-1">
					<h2 class="or">Ya Da</h2>
				</div>
				
				<div class="col-sm-4">
				<form  action="islem.php" method="post">
					<div class="signup-form"><!--sign up form-->
						<h2>Kayıt Olun!
						<?php if (@$_GET['durum']=="kullanicivar") { ?>
                                        <i style="color:red">Bu kullanıcı sistemde kayıtlı</i>
                                  <?php    }  elseif(@$_GET['durum']=="sifrehata"){ ?> 

 									<i style="color:red">Şifreniz uyuşmuyor lütfen iki şifreyi de aynı girin</i>
									<?php } elseif (@$_GET['durum']=="sifreeksik") { ?>
   									<i style="color:red">Lütfen minimum 8 karakter olacak şekilde şifre girin</i>
									<?php } elseif (@$_GET['durum']=="basarisiz") { ?>
									<i style="color:red">İşlem başarısız</i>
						<?php } ?>

						</h2>
						
						<input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı adınızı giriniz.">
						<br>
						<br>
						<input name="adsoyad" required="" class="mb-0" type="text" placeholder="Ad soyadınızı giriniz.">
						<br>
						<br>
						<input name="email" required="" class="mb-0" type="email" placeholder="Email adresinizi giriniz.">
						<br>
						<br>
						<input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi giriniz.">
						<br>
						<br>
						<input name="sifretekrar" required="" class="mb-0" type="password" placeholder="Şifrenizi tekrar giriniz.">
						<br>
						<br>
						<button type="submit" name="register" class="btn btn-default">Kayıt Ol</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
<?php require_once 'footer.php'; ?>

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
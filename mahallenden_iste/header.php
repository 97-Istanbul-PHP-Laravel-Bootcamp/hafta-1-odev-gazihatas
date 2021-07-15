<?php
error_reporting(0);
session_start();
ob_start();
require_once 'database.php';
require_once 'function.php';

$ayar=$baglanti->prepare("SELECT * FROM  ayarlar where id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

 
$hakkimizda=$baglanti->prepare("SELECT * FROM  hakkimizda where hakkimizda_id=?");
$hakkimizda->execute(array(1));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);

 
 $kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi  ");
 $kullanicisor->execute(array(
'kullanici_adi'=>$_SESSION['normalgiris']
 ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$var=$kullanicisor->rowCount();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Anasayfa | Mahallenden İste</title>
	
	<!-- CSS-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>


	<header id="header"><!--header-->
	

  



		<div class="header-middle"><!--header-middle-->
		
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<!-- LOGO -->
							<a href="index.php"><img src="Admin/resimler/logo/Mahallemden_logo.png" alt="" width="150px" heigth="150px" style="border-radius:300px;" /></a>
						</div>
	
					</div>

					
					

					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="giris.php"><i class="fa fa-user"></i>Hesabım</a></li>
								<li><a href="giris.php"><i class="fa fa-lock"></i> Giriş Yap</a></li>
 								
								<!-- Akordiyon menu sepet -->
								<li><a href="#"><button class="btn btn-primary-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   								 SEPETİM</button>
								</p>
<div class="collapse" id="collapseExample">
					  			<div class="card card-body">
  										<div class="minicart">
                                                <ul class="minicart-product-list">
                                                <?php foreach ($_COOKIE['sepet'] as $key => $value) { 
                                                    $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id  order by urun_sira ASC");
                                                    $urunler->execute(array('urun_id'=>$key));
                                                    $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);
                                                    $sepettoplam+=$value * $urunlercek['urun_fiyat'] ;
                                                     ?>     
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html"><?php echo $urunlercek['urun_baslik'] ?></a></h6>
                                                            <span><?php echo $urunlercek['urun_fiyat'] ?>₺</span>
                                                        </div>
                                                      <a href="islem?sepetsil&id=<?php echo  $key ?>"><button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button></a>
                                                    </li>
                                               <?php } ?>
                                                </ul>
                                                <p class="minicart-total">Toplam fİyat: <span><?php      
                                              echo $sepettoplam;
                                                 ?>
                                                     
                                                 </span></p>
                                                <div class="minicart-button">
                                                    <a href="sepet" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Sepeti görüntüle</span>
                                                    </a>
                                                    <a href="alisveris" class="li-button li-button-fullwidth">
                                                        <span>Alışverişi tamamla</span>
                                                    </a>
                                                </div>
                                            </div>
  </div>
</div>
								</a></li>						
								
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->

		
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">





								<li><a href="index.php" class="active">Ana Sayfa</a></li>
								
								<li class="dropdown"><a href="#">Hesabım<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										
										<li><a href="kullanici.php">Hesabım</a></li>
                                   		<li><a href="sepet.php">Sepetim</a></li>
                                    	<li><a href="siparisler.php">Almış olduğum ürünler</a></li>
                                    	<li><a href="sifremidegistir.php">Şifremi değiştir</a></li>
                                    </ul>
                                </li>
								
								<li class="dropdown"><a href="#">Kategoriler<i class="fa fa-angle-down"></i></a>
                                <!-- Menu ye kategorilerin çekilmesi -->    
								<ul role="dropdown-menu" class="sub-menu">
									
									
													<li>
                                                        <ul>
                                                             <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori  where kategori_durum=:kategori_durum and  kategori_sira  between 1 and 10 limit 8 ");
                  $kategori->execute(array('kategori_durum'=>1));
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo  $kategoricek['kategori_adi'] ?></a></li>
                                                        <?php } ?>
                                                        </ul>
                                                    </li>


													<li>
                                                        <ul>
                  <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori   where  kategori_durum=:kategori_durum and kategori_sira  between 10 and 20 limit 8 ");
                  $kategori->execute(array('kategori_durum'=>1));
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo  $kategoricek['kategori_adi'] ?></a></li>
                                                        <?php } ?>

                                                        </ul>
                                                    </li>


                                                    <li>
                                                        <ul>
                                                               <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori  where  kategori_durum=:kategori_durum and  kategori_sira  between 20 and 30 limit 8 ");
                  $kategori->execute(array('kategori_durum'=>1));
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                    <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo  $kategoricek['kategori_adi'] ?></a></li>
                                                        
                                                        <?php } ?> 
														</ul>
                                                    </li>

                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">Sepetim<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="sepet.php">Sepeti Görüntüle</a></li>
										<li><a href="alisveris.php">Alışverişi Tamamla</a></li>
                                    </ul>
                                </li>
 								
								

								<li><a href="hakkimizda.php">Hakkimizda</a></li>
								<li><a href="iletisim.php">İletişim</a></li>
							</ul>
						</div>
					</div>
					<!-- SEARCH -->
					<div class="col-sm-3">
						<form action="arama" method="post" class="hm-searchbox">
						
								<div class="pull-right">
									<select name="" id="" class="nice-select select-search-category">
									<?php  
                                        $kategori=$baglanti->prepare("SELECT * FROM  kategori  order by kategori_sira ASC");
                                        $kategori->execute();
                                         while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <option value="<?php echo $kategoricek['kategori_id'] ?>" ><?php echo $kategoricek['kategori_adi'] ?></option>                          
                                        <?php  } ?>
									</select>
									<br>
									<input type="text"name="aranacakkelime" placeholder="Aradığınız kelimeyi giriniz"/>

									<button name="kelimearama" type="submit"><i class="fa fa-search"></i></button>
								</div>
								


						</form>
					</div>
					<!-- SEARCH FINISH -->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->



<?php
require_once 'header.php';
require_once 'slider.php';
?>


	<section>
		<div class="container">
			<div class="row">




				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--YENİ ÜRÜNLER BAŞLANGIÇ-->
						<h2 class="title text-center">YENİ ÜRÜNLER</h2>
						
						
						<?php
                                // yeni ürün sorgusu 
                                $urunler=$baglanti->prepare("SELECT * FROM  urunler  order by urun_id DESC");
                                $urunler->execute();
                                while ($urunlercek=$urunler->fetch(PDO::FETCH_ASSOC)) { 
                                ?>
						<div class="col-sm-4">						
						<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img  src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="" width="200px"  height="200px" />
											<a href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>">
											<h4><a class="product_name" href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>"><?php echo $urunlercek['urun_baslik'] ?></a></h4>
											<h2><?php echo $urunlercek['urun_fiyat'] ?>₺</h2>

											<a  href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ürün Detay</a>
											
										</div>


								</div>

							</div>
						</div>
						<?php } ?>


					</div><!--YENİ ÜRÜNLER BİTİŞ-->




				</div>
			</div>
		</div>
	</section>

  <?php
  require_once 'footer.php';
  ?>

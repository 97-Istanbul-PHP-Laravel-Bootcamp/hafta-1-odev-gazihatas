<?php require_once 'header.php' ?>


<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Anasayfa</a></li>
				  <li class="active">Alışveriş Sepeti</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
                        <th class="li-product-remove"></th>
							<td class="image">Resim</td>
							<td class="description">Ürün</td>
							<td class="price">Fiyat</td>
							<td class="quantity">Adet</td>
							<td class="total">Toplam Fiyat</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                    <?php 
                     foreach ($_COOKIE['sepet'] as $key => $value) {
                     $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id  order by urun_sira ASC");
                     $urunler->execute(array('urun_id'=>$key));
                     $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);
                     ?>




						<tr>

							<td class="cart_product">
								<a href="#"><img src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim']; ?>" width="200px" height="200px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="#"><?php echo $urunlercek['urun_baslik'] ?></a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p><?php echo $urunlercek['urun_fiyat']; ?>₺</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text"  value="<?php echo $value ?>"  value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $value * $urunlercek['urun_fiyat'] ?>₺</p>
							</td>

							<td class="cart_delete">
								<a class="cart_quantity_delete" href="islem?sepetsil&id=<?php echo  $key ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>

                         <?php } ?>
                         <?php
                          $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id  order by urun_sira ASC");
                          $urunler->execute(array('urun_id'=>$key));
                          $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);

                         $sepettoplam+=$value * $urunlercek['urun_fiyat'];
                         $kdv=$sepettoplam * 18/100;
                         $geneltoplam=$sepettoplam + $kdv;

                          ?>



					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Alışveriş Sepeti</h3>

			</div>
			<div class="row">



				<div class="col-sm-6">
					<div class="total_area">
                        <h2>Toplam Fiyat</h2>
						<ul>
							<li>Toplam Fiyat <span><?php  echo $sepettoplam; ?>₺</span></li>
							<li>Kdv <span><?php echo $kdv ?>₺</span></span></li>
							<li>Genel toplam <span><?php echo $geneltoplam ?>₺</span></li>
						</ul>

							<a class="btn btn-default check_out" hhref="alisveris?toplamfiyat=<?php echo $geneltoplam ?>">Alışverişi Tamamla</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php require_once 'footer.php'; ?>
<?php require_once 'header.php'; ?>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Bize <strong>Ulaşın</strong></h2>    			    				    				
					<div id="gmap">
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Bize Yazın</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="mail.php">
				            <div class="form-group col-md-6">
				                <input type="text" name="customerName" class="form-control" required="required" placeholder="Adınız">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="konu" class="form-control" required="required" placeholder="Konu">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınızı giriniz"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="mailgonder" class="btn btn-primary pull-right" value="Gönder">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">İletişim Bilgileri</h2>
	    				<address>
	    					<p>Mahalleden İste Inc.</p>
							<p><?php $ayarcek['adres']; ?></p>
							<p>Mobile: <?php $ayarcek['telefon']; ?></p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: <?php $ayarcek['email'] ?></p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Medya</h2>
							<ul>
								<li>
									<a  href="<?php echo $ayarcek['facebook'] ?>"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a  href="<?php echo $ayarcek['twitter'] ?>"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a  href="<?php echo $ayarcek['instagram'] ?>"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a  href="<?php echo $ayarcek['youtube'] ?>"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php require_once 'footer.php'; ?>

	

  
    <script src="js/jquery.js"></script>script
	<script src="js/bootstrap.min.js"></>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php defined('DIR') OR exit();
$storage = Storage::instance();
    if (empty($storage->product)) {
        $section = $storage->section;
    } else {
        $section = $storage->product;
    }
    $section['pid'] = $storage->product['id'];
    $section['id'] = $storage->section['id'];
    empty($section["meta_keys"]) AND $section["meta_keys"] = s('keywords');
    empty($section["meta_desc"]) AND $section["meta_desc"] = s('description');
?>
<?php
	$url="";
	$urlparts=array();
	foreach($_GET as $k=>$v) {
        if($k!='product')
		  $urlparts[]=$k."=".$v;
	}
	if(count($urlparts)>0)
		$url='?'.implode("&",$urlparts);
    $product=NULL;
    if(isset($_GET["product"])) 
        $product=$_GET["product"];

	$photo = "";
	$desc = "";
	$producttitle = "";
	$prod = 0;
	if(isset($_GET["product"])) {
		$prod = $_GET["product"];
		$cat = db_fetch("select * from catalogs where id = '".$_GET["product"]."' and language = '".l()."'");
		$photo = $cat["photo1"];
		$producttitle = $cat["title"];
		$desc = $cat["description"];
		if($desc=="") $desc = $producttitle;
	}
	if($photo=="") $photo = href().WEBSITE."/images/logo.png";
	$pageid = href($storage->section['id']).(($prod>0) ? "?product=".$_GET["product"]:"");
?>
<!-- .ChangeHeader  SmallHeader -->
<div class="HeaderDiv ChangeHeader  SmallHeader">
	<div class="LogoDivParent wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
		<div class="LogoDiv ">
			<div class="InfoRotate"> 
				<div class="LogoParent">
					<a href="<?php echo href('1'); ?>" class="Logo Logo_<?php echo l();?> wow SlideHeight" data-wow-duration="1s" data-wow-delay="0.5s"></a>
				</div>
				<div class="HeaderTextParent">
					<div class="Text wow slideInDown" data-wow-duration="1.3s" data-wow-delay="1.1s">
						<?php echo s('slogan'); ?>
					</div>
				</div>
				<div class="HomeSlideControl SlideControl">
					<div class="Numbers DisplayInline">
					</div>
					<div class="HomeSliderArrows DisplayInline">
						<div class="leftArrow DisplayInline"></div>
						<div class="RightArrow DisplayInline"></div>
					</div>
				</div>
				<div class="Language wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
					<a href="<?php echo href($storage->section['id'], array(), 'ge', $product).$url;?>" <?php echo ((l()!= 'ge') ? '' : ' class="active"'); ?>>Ge</a> -
					<a href="<?php echo href($storage->section['id'], array(), 'en', $product).$url;?>" <?php echo ((l()!= 'en') ? '' : ' class="active"'); ?>>en</a> -
					<a href="<?php echo href($storage->section['id'], array(), 'ru', $product).$url;?>" <?php echo ((l()!= 'ru') ? '' : ' class="active"'); ?>>ru</a> 
				</div>
			</div>
		</div>
	</div>
	<div class="RequestCallButtonParent"><a href="#myModal" data-toggle="modal" class="RequestCallButton wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"><i class="fa fa-phone"></i> <?php echo l('call');?></a></div>
	<div class="RightHeader">
		<div class="ShareDiv"></div>
		<div class="HamburgerDiv ShowHideMenu wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s"></div>
	</div>	
</div>

<!-- .ChangeMenu -->
<div id="BellevueMenu" class="ChangeMenu">
	<div class="MenuHead">
		<div class="MenuSocial">
			<a href="<?php echo s('facebook');?>" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo s('instagram');?>" target="_blank"><i class="fa fa-instagram"></i></a>
		</div>
		<div class="MenuClose ShowHideMenu">
			<i class="fa fa-times"></i>
		</div>
	</div>
	<div class="MenuItems MenuRightShow">
    	<?php echo main_menu(); ?>
	</div>
</div>





<div class="ContactPageDiv">
	<div class="TextAndImageDiv TextAndImageDiv_4">
		<div class="container Container1">
			<div class="col-sm-5">
				<div class="Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
					<div class="Title"><?php echo l('info');?></div>
					<div class="Text"><?php echo $content ?> 
						<div class="List">
							<li>Tel: <a href="tel:<?php echo s('telephone');?>"><?php echo s('telephone');?></a></li>
							<li>Viber: <a href="viber://chat?number=<?php echo s('mobile');?>"><?php echo s('mobile');?></a></li>
							<li>WhatsApp: <a href="https://api.whatsapp.com/send?phone=<?php echo s('mobile');?>"><?php echo s('mobile');?></a></li>
							<li><a href="mailto:<?php echo s('mail');?>?Subject=From%20WebSite"><?php echo s('mail');?></a></li>
						</div>
						<div class="Links">
                            <a href="<?php echo s('facebook');?>" target="_blank">Facebook</a>
                            <a href="<?php echo s('instagram');?>" target="_blank">Instagram</a>
                            <a href="<?php echo s('linkedin');?>" target="_blank">LinkedIn</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-7" id="ContactMap">
                <div class="ImageDiv wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.3112833565806!2d41.62345731543387!3d41.64901597924103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067866bdb9fb5a1%3A0x4c575c7f8ae9be2a!2sBelle+Vue+Batumi+Residence!5e0!3m2!1ska!2sge!4v1523554118378" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                
<!--                    <div id="contact_map"></div>
					<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmSpIaxT77UGVUsx0jtkFX5LDYah6NbtI&callback=initMap">
					</script>
                    <script>
                
                    function initMap() {
						
                        var uluru = {lat: 41.649238, lng: 41.625660};
                
                        var map = new google.maps.Map(document.getElementById('contact_map'), {
                
                          zoom: 15,
                
                          center: uluru
                
                        });
                
                        var marker = new google.maps.Marker({
                
                          position: uluru,
                
                          map: map
                
                        });
                
                      }
                
                    </script>-->
                </div>
			</div>
		</div>
	</div>
</div>

			<div class="FooterContact">
				<div class="container Container1">  
					<div class="ContactInfo">
						<div class="ListDiv">
							 <div class="col-sm-4 text-left"><i class="fa fa-envelope"></i> <?php echo s('mail');?></div>
							 <div class="col-sm-4 text-center"><i class="fa fa-phone"></i> <?php echo s('telephone');?></div>
							 <div class="col-sm-4 text-right"><i class="fa fa-map-marker"></i> <?php echo s('address');?></div>
						</div>
					</div>
				</div>

				<div class="FooterBottom">
					<div class="col-sm-6">
						<div class="CopyRight"><?php echo s('CopyRight');?></div>
					</div>

					<div class="col-sm-6 text-right">
						<div class="PowerBy">created by <a href="http://shindi.ge/" target="_blank"><img src="_website/img/shindi_logo.png" alt="ShinDi"/></a></div>
					</div>
				</div>
			</div>	
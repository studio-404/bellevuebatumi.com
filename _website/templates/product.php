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
					<a href="<?php echo href('1'); ?>" class="Logo wow SlideHeight" data-wow-duration="1s" data-wow-delay="0.5s"></a>
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
	<div class="HeaderButtons">
    	<a href="#myModal" data-toggle="modal" class="RequestCallButton wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"><i class="fa fa-phone"></i> <?php echo l('call');?></a>
	</div>
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

<div class="FloorPageDiv wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
	 <div class="FloorInfo">
	 	<div class="FloorSliderDiv">
	 		<div class="leftArrow"></div>
	 		<div class="RightArrow"></div>
			<div class="BigImageSLider">
				<div class="Item">
					<div class="Image">
						<a href="<?php echo $image1 ?>" class="RotateBackground fancybox" rel="group"><div class="Background" style="background:url('<?php echo $image1 ?>');"></div></a>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<a href="<?php echo $image2 ?>" class="RotateBackground fancybox" rel="group"><div class="Background" style="background:url('<?php echo $image2 ?>');"></div></a>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<a href="<?php echo $image3 ?>" class="RotateBackground fancybox" rel="group"><div class="Background" style="background:url('<?php echo $image3 ?>');"></div></a>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<a href="<?php echo $image4 ?>" class="RotateBackground fancybox" rel="group"><div class="Background" style="background:url('<?php echo $image4 ?>');"></div></a>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<a href="<?php echo $image5 ?>" class="RotateBackground fancybox" rel="group"><div class="Background" style="background:url('<?php echo $image5 ?>');"></div></a>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<a href="<?php echo $image6 ?>" class="RotateBackground fancybox" rel="group"><div class="Background" style="background:url('<?php echo $image6 ?>');"></div></a>
					</div>
				</div>                
			</div>

			<div class="SlideThumbnail">
				<div class="Item">
					<div class="Image">
						<div class="Background BackgroundStyle" style="background:url('<?php echo $image1 ?>');"></div>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<div class="Background BackgroundStyle" style="background:url('<?php echo $image2 ?>');"></div>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<div class="Background BackgroundStyle" style="background:url('<?php echo $image3 ?>');"></div>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<div class="Background BackgroundStyle" style="background:url('<?php echo $image4 ?>');"></div>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<div class="Background BackgroundStyle" style="background:url('<?php echo $image5 ?>');"></div>
					</div>
				</div>
				<div class="Item">
					<div class="Image">
						<div class="Background BackgroundStyle" style="background:url('<?php echo $image6 ?>');"></div>
					</div>
				</div>                
			</div>
	 	</div>

	 	<div class="FloorRightInfo MobileRIghtInfo">
 			<div class="TopTitle">
	 			<?php echo (int)$title; ?>
	 		</div>
	 		<div class="LeftInfo2">
		 		<div class="SpaceDiv">
		 			<span><?php echo l('total');?></span>
		 			<div><?php echo $space ?> m<label>2</label></div>
		 		</div>
		 		<div class="ApartamentParameters">
		 				<div class="Item">
		 					<span><?php echo l('space');?></span>
		 					<div><?php echo $apartment ?> m<label>2</label></div>
		 				</div>
		 				<div class="Item">
		 					<span><?php echo l('balcony');?></span>
		 					<div><?php echo $balcony ?> m<label>2</label></div>
		 				</div> 
		 		</div>

		 		<a href="javascript: history.go(-1)"><div class="OrangeButton"><i class="fa fa-chevron-left"></i> <span><?php echo l('back');?></span></div></a>
		 		<div class="SocialLinks">
					<div class="sharethis-inline-share-buttons"></div>
		 		</div>
		 	</div>

 		</div>
	 </div>
 
	 <div class="StageRightDiv StageRightDiv222" id="StageRightDivID">
	 	<ul class="Title" id="InsideMenu2"><a href="#ScrollStage"><?php echo l('choose'); ?></a></ul> 
	 	<div id="ScrollStage">
			<li><a href="<?php echo href('53'); ?>">20 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('54'); ?>">19 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('55'); ?>">18 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('56'); ?>">17 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('57'); ?>">16 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('58'); ?>">15 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('59'); ?>">14 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('60'); ?>l">13 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('61'); ?>l">12 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('62'); ?>">11 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('63'); ?>">10 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('64'); ?>">9 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('65'); ?>">8 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('66'); ?>">7 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('67'); ?>">6 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('68'); ?>">5 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('69'); ?>">4 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('70'); ?>">3 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('71'); ?>">2 <span><?php echo l('floor'); ?></span></a></li>
			<li><a href="<?php echo href('72'); ?>">1 <span><?php echo l('floor'); ?></span></a></li>
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
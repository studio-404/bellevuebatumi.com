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
<!--
<div id="preloader"></div>
-->



<div id="preloader">
  <div id="status">&nbsp;</div>
</div>





<!-- .ChangeHeader  SmallHeader -->
<div class="HeaderDiv">
	<div class="LogoDivParent wow slideInDown" data-wow-duration="1s" data-wow-delay="0s">
		<div class="LogoDiv">
			<div class="InfoRotate"> 
				<div class="LogoParent">
					<a href="<?php echo href('1'); ?>" class="Logo Logo_<?php echo l();?> wow SlideHeight" data-wow-duration="1s" data-wow-delay="1s"></a>
				</div>
				<div class="HeaderTextParent">
					<div class="Text wow slideInDown" data-wow-duration="1.0s" data-wow-delay="0.5s">
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

				<div class="Language wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
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
		<div class="HamburgerDiv ShowHideMenu wow slideInDown" data-wow-duration="1s" data-wow-delay="1s"></div>
	</div>

</div>

<!-- .ChangeMenu -->
<div id="BellevueMenu" class="">
	<div class="MenuHead">
		<div class="MenuSocial">
			<a href="<?php echo s('facebook');?>" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo s('instagram');?>" target="_blank"><i class="fa fa-instagram"></i></a>
		</div>
		<div class="MenuClose ShowHideMenu">
			<i class="fa fa-times"></i>
		</div>
	</div>

	<div class="MenuItems MenuRightShow wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.6s">		
		<?php echo main_menu(); ?>
	</div>

</div>

<div id="BellevuePages">
	<div class="section" id="section0">
		<a href="<?php echo href('2'); ?>" class="ChooseApartament wow slideInLeftWidth" data-wow-duration="1s" data-wow-delay="0s"><?php echo menu_title('2'); ?></a>
		<div id="HomeFirstPageDiv" class="HomeFirstPageDiv Full100">
			<div class="HomeFirstDiv Full100">
            	<?php echo slide();?>
			</div>
			<a href="/ge/home#AboutUs" class="DiveDrep"></a>
		</div>
	</div>

	<div class="section" id="section1">
		<div class="HomePage2">
			<div class="container">
				<div class="TextAndImageDiv TextAndImageDiv_9">
					<div class="container">
						<div class="col-sm-6">
							<div class="TitleDiv Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
								<div class="Title"><?php echo menu_title('4');?></div>
								<div class="Text"><?php echo text('4');?></div>
							</div>
						</div>
						<div class="col-sm-6 padding_0">
							<div class="ImageDiv">
								<div class="ImageSlideUp1 wow" data-wow-duration="1s" data-wow-delay="0s">
									<div class="RotateBackgroundBottom"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('45');?>');"></div></div>
								</div>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="section2">
		<div class="HomeRoomsDiv">
			<div class="container Container1">				
				<div class="RoomsHomeSlide">
					<div class="RoomTopDiv">
						<div class="Title1"><?php echo menu_title('46');?></div>
						<div class="Text1"><?php echo l('luxury.living');?></div>
						
					</div>
					<div class="row">
						<a href="#" class="col-sm-4">
							<div class="Item">
								<div class="Image">
									<div class="ImageSlideUp2 wow slideInUp2" data-wow-duration="1s" data-wow-delay="0s">
										<div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('47');?>');"></div></div>
									</div>
								</div>
								<div class="Info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
									<div class="Title"><?php echo menu_title('47');?></div> 
									<div class="Text"><?php echo text('47');?></div>
								</div>
							</div>
						</a>
						<a href="#" class="col-sm-4">
							<div class="Item">
								<div class="Image">
									<div class="ImageSlideUp2 wow slideInUp2" data-wow-duration="1s" data-wow-delay="0s">
										<div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('48');?>');"></div></div>
									</div>
								</div>
								<div class="Info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
									<div class="Title"><?php echo menu_title('48');?></div> 
									<div class="Text"><?php echo text('48');?></div>
								</div>
							</div>
						</a>
						<a href="#" class="col-sm-4">
							<div class="Item">
								<div class="Image">
									<div class="ImageSlideUp2 wow slideInUp2" data-wow-duration="1s" data-wow-delay="0s">
										<div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('49');?>');"></div></div>
									</div>
								</div>
								<div class="Info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
									<div class="Title"><?php echo menu_title('49');?></div> 
									<div class="Text"><?php echo text('49');?></div>
								</div>
							</div>
						</a>
						<a href="#" class="col-sm-4">
							<div class="Item">                           
								<div class="Image">
									<div class="ImageSlideUp2 wow slideInUp2" data-wow-duration="1s" data-wow-delay="0s">
										<div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('50');?>');"></div></div>
									</div>
								</div>
								<div class="Info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
									<div class="Title"><?php echo menu_title('50');?></div> 
									<div class="Text"><?php echo text('50');?></div>
								</div>
							</div>
						</a>
					</div>
					<a href="<?php echo href('2'); ?>" class="ChooseApartament ChooseApartament222  wow slideInLeftWidth animated animated animated animated animated" data-wow-duration="1s" data-wow-delay="0s"><?php echo menu_title('2'); ?></a>
					
					<div class="RoomSlideControl SlideControl BlueControl" style="display:none">
						<div class="Numbers DisplayInline">
						</div>
						<div class="HomeSliderArrows DisplayInline">
							<div class="leftArrow DisplayInline"></div>
							<div class="RightArrow DisplayInline"></div>
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
		</div>
	</div> 
</div>
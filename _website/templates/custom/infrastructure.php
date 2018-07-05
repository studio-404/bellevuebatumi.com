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


<div class="InfrastructurePageDiv">

	<ul id="InsideMenu" class="InsideMenu">
		<div class="ForDesktop">
			<li class="current"><a href="#Spa"><?php echo menu_title('10')?></a></li>
			<li><a href="#CafeBar"><?php echo menu_title('11')?></a></li> 
			<li><a href="#Parking"><?php echo menu_title('12')?></a></li> 
			<li><a href="#Shopping"><?php echo menu_title('13')?></a></li> 
		</div>

		<div class="ForMobile">
			<div id="SelectOnChangeValue" class=" wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
				<select id="">								
					<option value="Spa" selected><?php echo menu_title('3')?></option>
					<option value="Spa"><?php echo menu_title('10')?></option>
					<option value="CafeBar"><?php echo menu_title('11')?></option>
					<option value="Parking"><?php echo menu_title('12')?></option>
					<option value="Shopping"><?php echo menu_title('13')?></option> 
				</select>
			</div>
		</div>
	</ul>

	<!-- Start Spa -->
	<div id="Spa">
		<div class="TextAndImageDiv TextAndImageDiv_11">
			<div class="container Container1">
            	
				<div class="PageTitleOrange wow fadeIn SmallTextWIdth SmallTextWIdth2" data-wow-duration="1s" data-wow-delay="0.2s">						
					<div>
						<span><?php echo text('3')?></span>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="Icon"><img src="_website/img/icons/icon_10.png"/></div>
						<div class="Title"><?php echo menu_title('10')?></div>
						<div class="Text"><?php echo text('10')?></div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="ImageDiv ResponsivePosition wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="RotateBackgroundBottom"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('10')?>');"></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- End Spa -->	

	<!-- Start Cafe Bar -->
	<div id="CafeBar">
		<div class="TextAndImageDiv TextAndImageDiv_7 BackgroundColor">
			<div class="container Container1">
				<div class="col-sm-5">
					<div class="Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="Icon"><img src="_website/img/icons/icon_11.png"/></div>
						<div class="Title"><?php echo menu_title('11')?></div>
						<div class="Text">
							<div id="BellAccordionContent" class="BellAccordionContent">
								<article class="Content open">
									<h4 class="TItle"><?php echo menu_title('41')?> <i class="fa fa-angle-down"></i></h4>
									<div class="MoreText" style="display:block;">
										<?php echo text('41')?>
									</div>
								</article>

								<article class="Content">
									<h4 class="TItle"><?php echo menu_title('43')?> <i class="fa fa-angle-down"></i></h4>
									<div class="MoreText">
										<?php echo text('43')?>
									</div>
								</article>

								<article class="Content">
<!--									<h4 class="TItle"><?php echo menu_title('41')?> <i class="fa fa-angle-down"></i></h4>
									<div class="MoreText">
										<?php echo text('41')?>
									</div>-->
									<!--/.MoreText-->
								</article>

								<article class="Content">
<!--									<h4 class="TItle"><?php echo menu_title('43')?> <i class="fa fa-angle-down"></i></h4>
									<div class="MoreText">
										<?php echo text('43')?>
									</div>-->
									<!--/.MoreText-->
								</article>
							</div> 
						</div>
					</div>
				</div>
				<div class="col-sm-7">				
					<div class="TextAndImageSlide ImageDiv ResponsivePosition wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="SlideItem"><div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('39')?>');"></div></div></div>
						<div class="SlideItem"><div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('40')?>');"></div></div></div> 
						<div class="SlideItem"><div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('41')?>');"></div></div></div>
						<div class="SlideItem"><div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('42')?>');"></div></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Cafe Bar -->

	<!-- Start Parking -->
	<div id="Parking">
		<div class="TextAndImageDiv TextAndImageDiv_6 TextAndImageDiv_11">
			<div class="container Container1">
				<div class="col-sm-5">
					<div class="Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="Icon"><img src="_website/img/icons/icon_12.png"/></div>
						<div class="Title"><?php echo menu_title('12')?></div>
						<div class="Text"><?php echo text('12')?></div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="ImageDiv wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('12')?>');"></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Parking -->

	<!-- Start Shopping -->
	<div id="Shopping">
		<div class="TextAndImageDiv TextAndImageDiv_5 BackgroundColor">
			<div class="container Container1">
				<div class="col-sm-5">
					<div class="Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="Icon"><img src="_website/img/icons/icon_13.png"/></div>
						<div class="Title"><?php echo menu_title('13')?></div>
						<div class="Text"><?php echo text('13')?></div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="ImageDiv Position1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('13')?>');"></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- End Shopping -->
    
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
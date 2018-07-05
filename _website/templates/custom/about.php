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
            
            <div class="AboutPageDiv">
                <ul id="InsideMenu" class="InsideMenu">
                
                    <div class="ForDesktop">
                        <li class="current"><a href="#Overview"><?php echo menu_title('6')?></a></li>
                        <li><a href="#Project"><?php echo menu_title('23')?></a></li> 
                        <li><a href="#BenefitsDiv"><?php echo menu_title('8')?></a></li> 
                        <li><a href="#TechnilDetailsDiv"><?php echo menu_title('9')?></a></li>
                        <li><a href="#Safety"><?php echo menu_title('34')?></a></li> 
                    </div>
            
                    <div class="ForMobile">
                        <div id="SelectOnChangeValue" class=" wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                            <select id="">								
                                <option value="Overview" selected><?php echo menu_title('4')?></option>
                                <option value="Overview"><?php echo menu_title('6')?></option>
                                <option value="Project" ><?php echo menu_title('23')?></option>
                                <option value="BenefitsDiv" ><?php echo menu_title('8')?></option>
                                <option value="TechnilDetailsDiv" ><?php echo menu_title('9')?></option>
                                <option value="Safety" ><?php echo menu_title('34')?></option>
                            </select>
                        </div>
                    </div>
            
                </ul>
            
                <!-- Start Overview -->
                <div id="Overview">
                    <div class="TextAndImageDiv TextAndImageDiv_11">
                        <div class="container Container1">
                            <div class="col-sm-5 padding_0">
                                <div class="Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                    <div class="Title"><?php echo menu_title('6')?></div>
                                    <div class="Text">
                                        <?php echo text('6')?>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-sm-7">
                                <div class="ImageDiv wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                    <div class="RotateBackgroundBottom"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('6')?>');"></div></div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>	
                <!-- End Overview -->
            
                <!-- Start Project -->
                <div id="Project">
                    <div class="TextAndImageDiv TextAndImageDiv_5 BackgroundColor">
                        <div class="container Container1">
                            <div class="col-sm-5">
                                <div class="Info wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"> 
                                    <div class="Title"><?php echo menu_title('23')?></div>
                                    <div class="Text"><?php echo text('23')?></div>
                                </div>
                            </div>
            
                            <div class="col-sm-7">
                                <div class="ImageDiv Position1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="RotateBackground"><div class="Background BackgroundStyle" style="background:url('<?php echo imagen('23')?>');"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- End Project -->
            
                <!-- Start Benefits -->
                <div id="BenefitsDiv">
                    <div class="BenefitsDiv">
                        <div class="container-fluid padding_0">
                            <div class="PageTitleBlue wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"><?php echo menu_title('8')?></div>
                            <div class="BenefitsListDiv">
                                <div class="container Container1">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                                <div class="Title"><?php echo menu_title('17')?></div>
                                                <div class="Text"><?php echo text('17')?></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                                <div class="Title"><?php echo menu_title('18')?></div>
                                                <div class="Text"><?php echo text('18')?></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                                <div class="Title"><?php echo menu_title('22')?></div>
                                                <div class="Text"><?php echo text('22')?></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                                <div class="Title"><?php echo menu_title('52')?></div>
                                                <div class="Text"><?php echo text('52')?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="FullImageDiv">
                        <div class="ParallaxBackground" data-parallax="scroll" data-image-src="http://bellevuebatumi.com/files/about/ParallaxBackground1.jpg"></div>
                    </div>
                </div>	
                <!-- End Benefits -->
            
                <!-- Start TechnilDetailsDiv -->
                <div id="TechnilDetailsDiv">
                    <div class="TechnilDetailsDiv">
                        <div class="container-fluid padding_0">
                            <div class="PageTitleOrange"><div><?php echo menu_title('9')?></div></div>
                            <div class="TechnilDetailsListDiv">
                                <div class="container Container1">
                                    <div class="row">
                                        <div class="col-sm-12 padding_0">
                                            <div class="col-sm-3"> 
                                                <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <div class="Icon"><img src="_website/img/icons/icon_7.png"/></div>
                                                    <div class="Title"><?php echo menu_title('27')?></div>
                                                    <div class="Text"><?php echo text('27')?></div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-3"> 
                                                <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                                    <div class="Icon"><img src="_website/img/icons/icon_18.png"/></div>
                                                    <div class="Title"><?php echo menu_title('24')?></div>
                                                    <div class="Text"><?php echo text('24')?></div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-3"> 
                                                <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                                    <div class="Icon"><img src="_website/img/icons/icon_19.png"/></div>
                                                    <div class="Title"><?php echo menu_title('25')?></div>
                                                    <div class="Text"><?php echo text('25')?></div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-3"> 
                                                <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                                    <div class="Icon"><img src="_website/img/icons/icon_20.png"/></div>
                                                    <div class="Title"><?php echo menu_title('26')?></div>
                                                    <div class="Text"><?php echo text('26')?></div>
                                                </div> 
                                            </div>
                                        </div>
            
                                        <div class="col-sm-12 padding_0">
                                            <div class="col-sm-3"> 
                                                <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <div class="Icon"><img src="_website/img/icons/icon_8.png"/></div>
                                                    <div class="Title"><?php echo menu_title('30')?></div>
                                                    <div class="Text"><?php echo text('30')?></div>
                                                </div> 
                                            </div>
            
                                            <div class="col-sm-3"> 
                                                <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                                    <div class="Icon"><img src="_website/img/icons/icon_6.png"/></div>
                                                    <div class="Title"><?php echo menu_title('29')?></div>
                                                    <div class="Text"><?php echo text('29')?></div>
                                                </div> 
                                            </div>
            
                                            <div class="col-sm-3"> 
                                                <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                                    <div class="Icon"><img src="_website/img/icons/icon_21.png"/></div>
                                                    <div class="Title"><?php echo menu_title('28')?></div>
                                                    <div class="Text"><?php echo text('28')?></div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="FullImageDiv">
                        <div class="ParallaxBackground" data-parallax="scroll" data-image-src="http://bellevuebatumi.com/files/about/ParallaxBackground2.jpg"></div>
                    </div>
                    
                </div>
                <!-- End TechnilDetailsDiv -->
            
                <!-- Start Safety -->
                <div id="Safety">
                    <div class="BenefitsDiv">
                        <div class="container-fluid padding_0">
                            <div class="PageTitleOrange wow fadeIn SmallTextWIdth" data-wow-duration="1s" data-wow-delay="0.2s">						
                                <div class=" wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <?php echo menu_title('34')?>
                                    <span>
                                        <?php echo text('34')?>
                                    </span>
                                </div>
                            </div>
                            <div class="BenefitsListDiv">
                                <div class="container Container1">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                                <div class="Title"><?php echo menu_title('35')?></div>
                                                <div class="Text"><?php echo text('35')?></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                                <div class="Title"><?php echo menu_title('36')?></div>
                                                <div class="Text"><?php echo text('36')?></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                                <div class="Title"><?php echo menu_title('37')?></div>
                                                <div class="Text"><?php echo text('37')?></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="Item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                                <div class="Title"><?php echo menu_title('38')?></div>
                                                <div class="Text"><?php echo text('38')?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
                <!-- End Safety -->
            
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
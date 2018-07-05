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
	<a href="#myModal" data-toggle="modal" class="RequestCallButton wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"><i class="fa fa-phone"></i> <?php echo l('call');?></a>
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
	 	<div class="ApartmentInsideDiv">
 			<div class="MapAreaImage" id="MapAreaImageID">
	 			<img src="_website/img/hd_1_1.png" class="Background map" usemap="#features" alt="<?php echo $title; ?> <?php echo l('floor'); ?>"/>
	 			<map name="features">
					<area shape="poly" coords="399, 271, 124, 214, 121, 173, 249, 217, 399, 250" flor="#flor_20" stage="#Stage_20" href="<?php echo href('53'); ?>"/>
				    <area shape="poly" coords="124, 215, 400, 275, 400, 291, 400, 297, 124, 244" flor="#flor_19" stage="#Stage_19" href="<?php echo href('54'); ?>"/>
				    <area shape="poly" coords="124, 244, 124, 270, 400, 320, 400, 297" flor="#flor_18" stage="#Stage_18" href="<?php echo href('55'); ?>"/>
				    <area shape="poly" coords="124, 270, 124, 296, 400, 345, 400, 320" flor="#flor_17" stage="#Stage_17" href="<?php echo href('56'); ?>" />
				    <area shape="poly" coords="124, 296, 124, 323, 400, 368, 400, 345" flor="#flor_16" stage="#Stage_16" href="<?php echo href('57'); ?>"/>
				    <area shape="poly" coords="124, 323, 124, 349, 400, 391, 400, 368" flor="#flor_15" stage="#Stage_15" href="<?php echo href('58'); ?>"/>
				    <area shape="poly" coords="124, 349, 124, 376, 400, 415, 400, 391" flor="#flor_14" stage="#Stage_14" href="<?php echo href('59'); ?>"/>
				 	<area shape="poly" coords="124, 376, 124, 402, 400, 440, 400, 415" flor="#flor_13" stage="#Stage_13" href="<?php echo href('60'); ?>"/>
				    <area shape="poly" coords="125, 402, 125, 429, 401, 465, 401, 440" flor="#flor_12" stage="#Stage_12" href="<?php echo href('61'); ?>"/>
				    <area shape="poly" coords="125, 429, 125, 456, 401, 489, 401, 465" flor="#flor_11" stage="#Stage_11" href="<?php echo href('62'); ?>"/>
				    <area shape="poly" coords="125, 456, 125, 482, 401, 512, 401, 489" flor="#flor_10" stage="#Stage_10" href="<?php echo href('63'); ?>"/> 
				    <area shape="poly" coords="125, 482, 125, 509, 401, 536, 401, 512" flor="#flor_9" stage="#Stage_9" href="<?php echo href('64'); ?>"/>
				    <area shape="poly" coords="125, 509, 125, 536, 401, 560, 401, 536" flor="#flor_8" stage="#Stage_8" href="<?php echo href('65'); ?>"/>
				    <area shape="poly" coords="125, 536, 125, 563, 401, 584, 401, 560" flor="#flor_7" stage="#Stage_7" href="<?php echo href('66'); ?>"/>
				    <area shape="poly" coords="126, 563, 126, 590, 402, 609, 402, 584" flor="#flor_6" stage="#Stage_6" href="<?php echo href('67'); ?>" data-maphilight='{"alwaysOn":true}' class="masterTooltip"/>
				    <area shape="poly" coords="126, 590, 126, 617, 402, 632, 402, 609" flor="#flor_5" stage="#Stage_5" href="<?php echo href('68'); ?>"/>
				    <area shape="poly" coords="126, 617, 126, 643, 402, 657, 402, 632" flor="#flor_4" stage="#Stage_4" href="<?php echo href('69'); ?>"/>
				    <area shape="poly" coords="126, 643, 126, 669, 402, 683, 402, 657" flor="#flor_3" stage="#Stage_3" href="<?php echo href('70'); ?>"/>
				    <area shape="poly" coords="126, 669, 126, 695, 402, 709, 402, 683" flor="#flor_2" stage="#Stage_2" href="<?php echo href('71'); ?>"/>

					<div class="FloorInfoWindow"> 
						<div class="hidden AllFlor" id="flor_20">
							<div class="InfoWindow"><span><?php echo menu_title('53');?> <?php echo l('floor'); ?></span><br/><div><?php echo l('reserved'); ?></div></div>
						</div>
						<div class="hidden AllFlor" id="flor_19">
							<div class="InfoWindow"><span><?php echo menu_title('54'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_18">
							<div class="InfoWindow"><span><?php echo menu_title('55'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_17">
							<div class="InfoWindow"><span><?php echo menu_title('56'); ?> <?php echo l('floor'); ?></span><br/><div><?php echo l('available'); ?></div></div>
						</div>
						<div class="hidden AllFlor" id="flor_16">
							<div class="InfoWindow"><span><?php echo menu_title('57'); ?> <?php echo l('floor'); ?></span><br/><div><?php echo l('available'); ?></div></div>
						</div>
						<div class="hidden AllFlor" id="flor_15">
							<div class="InfoWindow"><span><?php echo menu_title('58'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_14">
							<div class="InfoWindow"><span><?php echo menu_title('59'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_13">
							<div class="InfoWindow"><span><?php echo menu_title('60'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_12">
							<div class="InfoWindow"><span><?php echo menu_title('61'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_11">
							<div class="InfoWindow"><span><?php echo menu_title('62'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_10">
							<div class="InfoWindow"><span><?php echo menu_title('63'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div> 
						<div class="hidden AllFlor" id="flor_9">
							<div class="InfoWindow"><span><?php echo menu_title('64'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_8">
							<div class="InfoWindow"><span><?php echo menu_title('65'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>
						<div class="hidden AllFlor" id="flor_7">
							<div class="InfoWindow"><span><?php echo menu_title('66'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>            
						<div class="AllFlor" id="flor_6">
							<div class="InfoWindow"><span><?php echo menu_title('67'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>            
						<div class="hidden AllFlor" id="flor_5">
							<div class="InfoWindow"><span><?php echo menu_title('68'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>            
						<div class="hidden AllFlor" id="flor_4">
							<div class="InfoWindow"><span><?php echo menu_title('69'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>            
						<div class="hidden AllFlor" id="flor_3">
							<div class="InfoWindow"><span><?php echo menu_title('70'); ?> <?php echo l('floor'); ?></span><br/><div><?php echo l('available'); ?></div></div>
						</div>            
						<div class="hidden AllFlor" id="flor_2">
							<div class="InfoWindow"><span><?php echo menu_title('71'); ?> <?php echo l('floor'); ?></span><!--<br/><div>available 3 flats</div><label>from <i>$850</i></label>--></div>
						</div>                  
					</div>
				</map>
	 		</div>
	 	</div>

	 	<div class="FloorRightInfo Height100">
 			<div class="TopTitle">
	 			<?php echo $title; ?> <?php echo l('floor'); ?>
	 			<!--<span> Available 3 apartments</span>-->
	 		</div>

	 		<div class="LeftInfo"> 
		 		<div class="FloorInfoList" id="FloorInfoList">
					<?php
                        foreach ($items as $item):
                            $link = href($id,array(), l(), $item['id']);
                    ?>
                    <?php if($item['sold']=='1'){?>
                    <a href="javascript:;" class="Item Item2" id="Apart_<?php echo $item['id'];?>"><div class="RoomNumber"><?php echo l('apartment');?> - <?php echo (int)$item['title'];?></div><div class="ApartSize"><?php echo $item['space'];?> m<span>2</span> <label><?php echo l('available');?></label></div></a>
                    <?php }else{ ?>
                    <a href="<?php echo $link; ?>" class="Item" id="Apart_<?php echo $item['id'];?>"><div class="RoomNumber"><?php echo l('apartment');?> - <?php echo (int)$item['title'];?></div><div class="ApartSize"><?php echo $item['space'];?> m<span>2</span></div></a>                    
                    <?php } ?>                    
                    <?php endforeach; ?>  
		 		</div> 
		 		<!--<div class="GrayButton ForDesktop">all apartments</div>-->
		 	</div>

		 	<div class="FloorImages FloorImagesMobile">
		 		<div class="FloorMapArea" id="FloorMapArea">
				
					<div class="ApartSoldDiv">
						<?php
                            foreach ($items as $item):
                                $link = href($id,array(), l(), $item['id']);
                        ?>
						<?php if($item['sold']=='1'){?>
                        <div id="Sold_<?php echo (int)$item['title'];?>" class="active">sold</div>
                        <?php }else{ ?>
                        <div id="Sold_<?php echo (int)$item['title'];?>">sold</div>              
                        <?php } ?>                     
                        <?php endforeach; ?>
					</div>
				
					<div class="ApartView">
						<div class="Item Item1"><div class="Icon Seaicon"></div><span><?php echo l('sea');?></span></div>
						<div class="Item Item2"><div class="Icon Mountainsicon"></div><span><?php echo l('mountains');?></span></div>
						<div class="Item Item3"><div class="Icon Mountainsicon"></div><span><?php echo l('mountains');?></span></div>
						<div class="Item Item4"><div class="Icon Seaicon"></div><span><?php echo l('sea');?></span></div>
					</div>
		 			<img src="_website/floor/6.png" class="Background MapInside" usemap="#FloorMapAreaName" alt="<?php echo $title; ?>"/>
		 			<map name="FloorMapAreaName">
						<?php
                            foreach ($items as $item):
                                $link = href($id,array(), l(), $item['id']);
                        ?>
						<?php if($item['sold']=='1'){?>
						<area title="<?php echo $item['space'];?> m2 - <?php echo l('available');?>" class="" shape="poly" coords="<?php echo $item['poly'];?>" apartament="#Apart_<?php echo $item['id'];?>" href="javascript:;"  data-maphilight='{"alwaysOn":"true"}'/>
                        <?php }else{ ?>
                        <area title="<?php echo $item['space'];?> m2" class="" shape="poly" coords="<?php echo $item['poly'];?>" apartament="#Apart_<?php echo $item['id'];?>" href="<?php echo $link; ?>" />                 
                        <?php } ?>                     
                        <?php endforeach; ?>   
					</map>
		 		</div>
		 	</div>
 		</div>
	 </div>
	 <div class="StageRightDiv" id="StageRightDivID">
	 	<ul class="Title" id="InsideMenu2"><a href="#ScrollStage"><?php echo l('choose'); ?></a></ul> 
	 	<div id="ScrollStage">
			<li id="Stage_20" area="Stage_20"><a href="<?php echo href('53');?>">20 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_19" area="Stage_19"><a href="<?php echo href('54');?>">19 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_18" area="Stage_18"><a href="<?php echo href('55');?>">18 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_17" area="Stage_17"><a href="<?php echo href('56');?>">17 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_16" area="Stage_16"><a href="<?php echo href('57');?>">16 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_15" area="Stage_15"><a href="<?php echo href('58');?>">15 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_14" area="Stage_14"><a href="<?php echo href('59');?>">14 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_13" area="Stage_13"><a href="<?php echo href('60');?>">13 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_12" area="Stage_12"><a href="<?php echo href('61');?>">12 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_11" area="Stage_11"><a href="<?php echo href('62');?>">11 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_10" area="Stage_1"><a href="<?php echo href('63');?>">10 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_9" area="Stage_9"><a href="<?php echo href('64');?>">9 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_8" area="Stage_8"><a href="<?php echo href('65');?>">8 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_7" area="Stage_7"><a href="<?php echo href('66');?>">7 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_6" area="Stage_6"><a href="<?php echo href('67');?>">6 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_5" area="Stage_5"><a href="<?php echo href('68');?>">5 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_4" area="Stage_4"><a href="<?php echo href('69');?>">4 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_3" area="Stage_3"><a href="<?php echo href('70');?>">3 <span><?php echo l('floor'); ?></span></a></li>
			<li id="Stage_2" area="Stage_2"><a href="<?php echo href('71');?>">2 <span><?php echo l('floor'); ?></span></a></li>
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
<?php defined('DIR') OR exit();
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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="theme-color" content="#2c537e"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <link rel="shortcut icon" type="image/x-icon" href="_website/img/favicon.ico"> 
    <base href="<?php echo href(); ?>" />
    <title><?php echo strip_tags(s('sitetitle').' - '.$section["title"]); ?></title>
    <meta name="keywords" content="<?php echo s('keywords').', '.$section["meta_keys"] ?>" />
    <meta name="description" content="<?php echo s('description').', '.$section["meta_desc"] ?>" />
    <meta name="robots" content="index, follow" />
    
    <meta property="og:title" content="<?php echo strip_tags($section["title"]).' - '.s('sitetitle');?>" />
    <meta property="og:image" content="<?php echo (!empty($section["image1"])) ? $section["image1"] : href().WEBSITE."/_website/img/logo.png";?>" />
    <meta property="og:description" content="<?php echo $section["meta_desc"] ?>"/>
    <meta property="og:url" content="<?php echo href($storage->section['id'], array(), '', $section["pid"]);?>" />
    <meta property="og:site_name" content="<?php echo s('sitetitle'); ?>" />
    <meta property="og:type" content="Website" />

<script src="_website/js/jquery-2.2.4.min.js" ></script>
<!-- <script src="https://code.jquery.com/jquery-3.1.0.js" ></script> -->
<script src="_website/js/jquery.easing.min.js"></script>
<script src="_website/js/bootstrap.js" type="text/javascript"></script>
<script src="_website/js/slick.min.js" type="text/javascript"></script>
<script src="_website/js/jquery.fullPage.js" type="text/javascript"></script>
<script src="_website/js/wow.js" type="text/javascript"></script>
<script src="_website/js/parallax.js" type="text/javascript"></script>
<script src="_website/js/jquery.nav.js" type="text/javascript"></script>
<script src="_website/js/pace.min.js" type="text/javascript"></script>
<script src="_website/js/fancybox.min.js" type="text/javascript"></script>

<script src="_website/js/jquery.rwdImageMaps.min.js" type="text/javascript"></script>
<script src="_website/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="_website/js/jquery.maphilight.js" type="text/javascript"></script>
<script src="_website/js/scripts.js" type="text/javascript"></script>
<link rel="stylesheet" href="_website/css/jquery.fullPage.css">
<link rel="stylesheet" href="_website/css/font-awesome.css">
<link rel="stylesheet" href="_website/css/bootstrap.css">
<link rel="stylesheet" href="_website/css/fonts.css">
<link rel="stylesheet" href="_website/css/slick.css">
<link rel="stylesheet" href="_website/css/animate.css">
<link rel="stylesheet" href="_website/css/fancybox.min.css">
<link rel="stylesheet" href="_website/css/style.css">
<link rel="stylesheet" href="_website/css/custom_res.css">
<link rel='stylesheet' href='_website/css/effects.css' type='text/css' media='all'>
<?php if(l()=='ge'){ ?>
<link rel="stylesheet" href="_website/css/geo.css">
<?php } else if(l()=='ru') { ?>
<link rel="stylesheet" href="_website/css/rus.css">
<?php } ?>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ad5b3e4d0b9d300137e39b8&product=inline-share-buttons' async='async'></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65421160-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65421160-23');
</script>


</head>

<body<?php echo (($storage->section['id']!= '1') ? '' : ' class="OverflowHidden"'); ?>>

<div id="myModal" class="modal fade BellevueModal">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-body">
            	<div class="RequestCallDiv">
	                <div class="ModalTitle"> 
	                	<?php echo l('call');?>
	                	<button type="button" class="close" data-dismiss="modal">&times;</button>
	                </div>
	                <div class="form-group col-sm-12 padding_0 g-message-text">&nbsp;</div>
	                <div class="form-group col-sm-12 padding_0">
	                	<div class="InputGroup">
							<input type="text" name="firstname" placeholder="<?php echo l('name');?>" required class="g-firstname" /> 
							<label><?php echo l('name');?></label>
						</div>
	                </div>
	                <div class="form-group col-sm-12 padding_0">
	                	<div class="InputGroup FontClass">
							<input type="text" name="phone" placeholder="<?php echo l('telephone.number');?>" required class="g-phone" /> 
							<label><?php echo l('telephone.number');?></label>
						</div>
	                </div>
	                <div class="form-group col-sm-12 padding_0">
	                	<div class="OrangeButton2 g-submit-button"><?php echo l('send');?></div>
	                </div>
	            </div>
            </div>
        </div>
    </div>
</div>

<?php echo html_decode($storage->content); ?>
<script>
// $(document).ready(function() {	
// 	if (document.documentElement.clientWidth < 992) { 
// 	    $(window).scroll(function () {
// 	        if ($(this).scrollTop() != 0) {
// 	            $(".HeaderDiv").addClass("ChangeHeader");   
// 	            $("#BellevueMenu").addClass("ChangeMenu"); 
// 	            $(".HeaderDiv").addClass("SmallHeader");  
// 	        } else {
// 	           $(".HeaderDiv").removeClass("ChangeHeader");   
// 	            $("#BellevueMenu").removeClass("ChangeMenu"); 
// 	            $(".HeaderDiv").removeClass("SmallHeader");   
// 	        }
// 	    }); 
// 	}
// });	
</script>
</body>
</html>
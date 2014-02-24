<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>POLO360</title>

<LINK rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/css.css" type="text/css">
<LINK rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/grid.css" type="text/css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
 <?php Loader::element('header_required'); ?>
</head>

<body>

<div class ="pure-g">
<div class="pure-u-1-3" style="margin-top:30px;"  align="right">
				<img src="<?php echo $this->getThemePath();?>/Images/logo.png" border="0" />
</div>



<div class="pure-u-2-3">
	<div class="menuhaut">
    <div class="pure-menu pure-menu-open pure-menu-horizontal">
     <?php 
      $a = new GlobalArea('menu');
      $a->display();
     ?>
	 </div>
 </div>
</div>

</div>
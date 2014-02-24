<?php $this->inc('elements/header.php'); ?>
<div class="background">
			
<?php $h = new Area('DEFAULT'); 
			$h->display($c); ?>



<?php Loader::element('footer_required'); ?>	
</body>

<?php  $this->inc('elements/footer.php');?>



</html>
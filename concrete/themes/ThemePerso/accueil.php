<?php $this->inc('elements/header.php'); ?>
<div class="background">
			

<div class="bandeau">
</div>

<div class="images">
	<?php $j = new Area('Diapo'); 
	$j->display($c); ?>
</div>
<div class="titre">
</br>
<?php $j = new Area('title'); 
$j->display($c); ?>
</div>

<div class="sephor" align="center">
<img  class="image" src="<?php echo $this->getThemePath();?>/Images/sephorizon.jpg"/>
</div>

</br>
</br>

<div class="article">
			<div class="pure-g">
								<div class="pure-u-1-5">
								</div>
								
								
								<div class="pure-u-1-5">
								<div class="pure-g">
								<div class="pure-u-3-4">
								<?php $a = new Area('Contenu'); 
								$a->display($c); ?>
								</div>
								<div class="pure-u-1-4">
								</div>
								</div>
								</div>
								
								&nbsp;
			
			
								<div class="pure-u-1-5">
								<?php $b = new Area('Contenu2'); 
								$b->display($c); ?>
								</div>
			
								<div class="pure-u-1-5">
								<?php $z = new Area('Contenu3'); 
								$z->display($c); ?>
								
								</div>
								<div class="pure-u-1-5">
								</div>
			</div>

</div>
<br><br><br>

<div class="sephor" align="center">
<img  class="image" src="<?php echo $this->getThemePath();?>/Images/sephorizon.jpg"/>
</div>
<br><br>

	<div class="menubassocial">
		<div class="pure-g">
			<div class="pure-u-1-5">
			</div>
			
		<div class="pure-u-1-5">
			<?php $h = new Area('Social'); 
			$h->display($c); ?>
		 
		</div>

		<div class="pure-u-1-5">
			<?php $i = new Area('Contactform'); 
			$i->display($c); ?>
		</div>
			
			<div class="pure-u-1-5">
			<?php $j = new Area('Update'); 
			$j->display($c); ?>
			</div>
			
			<div class="pure-u-1-5">
			
			</div>
		</div>
	</div>
</body>

<?php Loader::element('footer_required'); ?>

<?php $this->inc('elements/footer.php'); ?>



</html>
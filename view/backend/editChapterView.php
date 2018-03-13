<?php $title = 'Administration - Chapitre'; ?>

<?php ob_start(); ?>

<header>
	<h3 class="center">CHAPITRE</h3>

</header>

<section>
	<div class="container">
	    <table class="striped">
	        <thead>
	          <tr>
	              <th>Name</th>
	              <th>Item Name</th>
	              <th>Item Price</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>Alvin</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	          </tr>
	          <tr>
	            <td>Alan</td>
	            <td>Jellybean</td>
	            <td>$3.76</td>
	          </tr>
	          <tr>
	            <td>Jonathan</td>
	            <td>Lollipop</td>
	            <td>$7.00</td>
	          </tr>
	        </tbody>
	      </table>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
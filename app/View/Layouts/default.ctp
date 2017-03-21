<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Teste cakePHP');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	//echo $this->Html->meta('icon');
	echo $this->Html->meta('favicon.ico','img/choco.icon.png',array('type' => 'icon'));


	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('sb-admin-2');
	echo $this->Html->css('font-awesome/css/font-awesome.min');
	echo $this->Html->css('metisMenu/metisMenu.min');

	echo $this->Html->script('jquery/jquery.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('metisMenu/metisMenu.min');
	echo $this->Html->script('sb-admin-2');


	echo $this->fetch('meta');
	echo $this->fetch('css');

	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1></h1>
		</div>
		<div id="content">

			<?php echo $this->element('menu')?>

			<div id="page-wrapper">
				
				<br>
				<?php echo $this->Flash->render(); ?>
				

				<?php echo $this->element('topo-pagina')?>
				<!-- /.row -->
				<?php echo $this->fetch('content'); ?>
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		
	</div>
	<div id="footer">
		<?php echo $this->fetch('script'); ?>
	</div>
</div>
</body>
</html>

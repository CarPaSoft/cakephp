<?php
/**
 *
 * PHP 5
 *
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('smoothness/jquery-ui.min');
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('jquery-ui.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		<?php if(!$this->Session->read('Auth.User.id') == null) {
			
			echo "<div id='hdrPrfl'>" . $this->Html->link('Perfil', '/profiles/home', array('class' => 'button', 'target' => '_blank')) . "</div>";
			
			echo "<div id='hdrPrjct'>" . $this->Html->link('Proyectos', '/projects/home', array('class' => 'button', 'target' => '_blank')) . "</div>";
			
			echo "<div id='hdrLgt'>" . $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => 'logout', 'border' => '0')),
					'/users/logout',
					array('target' => '_self', 'escape' => false)
				) . "</div>";
			
			
		} ?>
			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer_container">
			<div id="footer">
				<?php echo $this->Html->link(
						$this->Html->image('cake.power.gif', array('alt' => 'logout', 'border' => '0')),
						'/users/logout',
						array('target' => '_self', 'escape' => false)
					);
					echo sizeof($recentArticles);
					echo array_values($recentArticles);
				?>
				
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump');
	      echo $this->Js->writeBuffer(); 
	?>
</body>
</html>

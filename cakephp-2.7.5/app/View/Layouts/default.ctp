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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "ZER0ES" ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array ('materialize.css', 'cake.generic', 'zeroes.css'));
		echo $this->Html->css(array ('syntax/shCore.css', 'syntax/shCoreDefault.css', 'syntax/shThemeDefault.css'));
        echo $this->Html->script(array ('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js','bootstrap.min.js'));
		echo $this->Html->script(array ('syntax/shCore.js', 'syntax/shBrushPython.js'));
		echo $this->Html->script(array ('syntax/shBrushPlain.js', 'syntax/shBrushJava.js'));
		echo '<script type="text/javascript">SyntaxHighlighter.all(); SyntaxHighlighter.defaults.toolbar = false;</script>';
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<nav>
	<div class="nav-wrapper grey darken-2">
	  <a href="#" class="brand-logo" id="code">ZER0ES</a>
	  <ul id="nav-mobile" class="right hide-on-med-and-down">
	  </ul>
	</div>
	</nav>
	<div id="container">
		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>

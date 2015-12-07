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

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
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
		//'materialize.css',
		echo $this->Html->css(array ('cake.generic','bootstrap-theme.min.css','bootstrap.min.css', 'zeroes.css'));
		echo $this->Html->css(array ('syntax/shCore.css', 'syntax/shCoreDefault.css', 'syntax/shThemeDefault.css'));
        echo $this->Html->script(array ('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js','bootstrap.min.js'));
		echo $this->Html->script(array ('syntax/shCore.js', 'syntax/shBrushPython.js'));
		echo $this->Html->script(array ('syntax/shBrushPlain.js', 'syntax/shBrushJava.js'));
		echo '<script type="text/javascript">SyntaxHighlighter.all(); SyntaxHighlighter.defaults.toolbar = false;</script>';
        echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php
		if (!$authUser) {
		    echo $this->element('menu');
		} else {
			echo $this->element('authmenu');
		}
	?>
	
	<?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>
</body>
</html>

<?php
/**
 * Copyright 2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="users form">
	<fieldset>
		<legend><?php __d('users', 'Login') ?></legend>
		<?php
			echo $this->Form->create($model, array('url' => array('action' =>  'login')));
			echo $this->Form->input('email', array('label' => __d('users', 'Email', true)));
			echo $this->Form->input('passwd',  array('label' => __d('users', 'Password', true)));
			echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' => __d('users', 'Remember Me', true)));
			echo $this->Form->hidden('User.return_to', array('value' => $return_to));
			echo $this->Form->end(__d('users', 'Submit', true));
		?>
	</fieldset>
</div>
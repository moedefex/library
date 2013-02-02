 <ul>
	<li>
		<?php
			echo $this->Html->link( __('Show all users'),
			array(
				'controller' => 'users',
				'action' => 'index'
			) );
		?>
	</li>
	<li>
		<?php
			echo $this->Html->link( __('Show all books'),
			array(
				'controller' => 'books',
				'action' => 'index'
			) );
		?>
	</li>
	<li>
		<?php
			echo $this->Html->link( __('Show all loans'),
			array(
				'controller' => 'loans',
				'action' => 'index'
			) );
		?>
	</li>
	<li>
		<?php
			echo $this->Html->link( __('Show all categories'),
			array(
				'controller' => 'categories',
				'action' => 'index'
			) );
		?>
	</li>
</ul>
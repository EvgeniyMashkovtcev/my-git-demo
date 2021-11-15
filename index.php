<?php
		require_once 'Class/Revert.php';

		$str = new Revert('Hello I am Evgeniy');
		echo $str->revert_characters();

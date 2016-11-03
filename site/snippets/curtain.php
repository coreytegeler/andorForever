<?php
$about = $pages->find( 'home' )->about();
$email = $pages->find( 'home' )->email();
echo '<div id="curtain">';
	echo '<div class="inner">';
		echo '<div class="about">';
			echo $about;
		echo '</div>';
		echo '<a class="email" href="mailto:' . $email . '">';
			echo $email;
		echo '</a>';
	echo '</div>';
echo '</div>';
?>
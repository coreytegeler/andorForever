<?php
$projects = $pages->find('projects')->children()->visible();
echo '<div id="stairs">';
	echo '<div class="inner">';
	$i = 0;
	$size = sizeof( $projects );
	foreach( $projects as $project )	{
		$margin = ( $size - $i ) * 50;
		echo '<div class="project" style="margin-left:' . $margin . 'px">';
			echo '<div class="stair">';
				echo '<a href="' . $project->url() . '">';
					echo $project->title();
				echo '</a>';
				echo '<div class="content">';

				echo '</div>';
				echo '<div class="gap"></div>';
			echo '</div>';
		echo '</div>';
		$i++;
	}
	echo '</div>';
echo '</div>';
?>
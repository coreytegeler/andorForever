<?php
$projects = $pages->find('projects')->children()->visible();
echo '<div id="stairs">';
	echo '<div class="inner">';
	$i = 0;
	$size = sizeof( $projects );
	foreach( $projects as $project )	{
		$margin = ( $size - $i ) * 50;
		$tags = $project->tags()->split( ',' );
		$materials = $project->materials()->split( ',' );
		echo '<div class="project" style="margin-left:' . $margin . 'px">';
			echo '<div class="stair">';
				echo '<a href="' . $project->url() . '">';
					echo $project->title();
				echo '</a>';
				echo '<div class="content">';
					echo '<div class="block">';
						echo $project->text()->kirbytext();
						echo $project->text()->kirbytext();
						echo $project->text()->kirbytext();
					echo '</div>';
					echo '<div class="block tags">';
						echo 'Tags: ';
						foreach( $tags as $ii => $tag ) {
							echo $tag;
							if( $ii < sizeof( $tags ) ) {
								echo ', ';
							}
						}
						if( !sizeof( $tags ) ) {
							echo '<em>None yet</em>';
						}
					echo '</div>';
					echo '<div class="block materials">';
						echo 'Materials: ';
						foreach( $materials as $iii => $material ) {
							echo $material;
							if( $iii < sizeof( $materials ) ) {
								echo ', ';
							}
						}
						if( !sizeof( $materials ) ) {
							echo '<em>None yet</em>';
						}
					echo '</div>';
				echo '</div>';
				echo '<div class="gap"></div>';
			echo '</div>';
		echo '</div>';
		$i++;
	}
	echo '</div>';
echo '</div>';
?>
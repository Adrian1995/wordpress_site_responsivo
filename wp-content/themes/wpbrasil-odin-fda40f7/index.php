<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
		
			<?php
			query_posts("cat=3");
			while(have_posts()) : the_post();
			?>
				<a href="<?php the_permalink(); ?>">
				<?php 
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo "<img src='".$url."' class='img-responsive center-block'>";
				?>
				<div class="titulo-noticia-principal"><?php the_title(); ?></div>
				</a>
			<?php
			endwhile;
			wp_reset_query();
			?>
		 
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
				
				<?php
				query_posts("cat=4");
				while(have_posts()) : the_post();
				?>
					<a href="<?php the_permalink(); ?>">
					<?php 
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					echo "<img src='".$url."' class='img-responsive center-block' >";
					?>
					<div class="titulo-noticia-subprincipal"><?php the_title(); ?></div>
					</a>
				<?php
				endwhile;
				wp_reset_query();
				?>
				
				</div>
				<div class="col-md-6">
					Espaço publicitário
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				
				<?php
				query_posts("cat=5");
				while(have_posts()) : the_post();
				?>
					<a href="<?php the_permalink(); ?>">
					<?php 
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					echo "<img src='".$url."' class='img-responsive center-block' >";
					?>
					<div class="titulo-noticia-subprincipal"><?php the_title(); ?></div>
					</a>
				<?php
				endwhile;
				wp_reset_query();
				?>
				
				</div>
				<div class="col-md-6">
				
				<?php
				query_posts("cat=6");
				while(have_posts()) : the_post();
				?>
					<a href="<?php the_permalink(); ?>">
					<?php 
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					echo "<img src='".$url."' class='img-responsive center-block' >";
					?>
					<div class="titulo-noticia-subprincipal"><?php the_title(); ?></div>
					</a>
				<?php
				endwhile;
				wp_reset_query();
				?>
				
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<?php
		query_posts("cat=7");
		while(have_posts()) : the_post();
		?>
		<div class="col-md-3">
		
			<a href="<?php the_permalink(); ?>">
			<?php 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			echo "<img src='".$url."' class='img-responsive center-block' >";
			?>
			<div class="titulo-noticia"><?php the_title(); ?></div>
			<div class="descricao-noticia"><?php $excerpt = get_the_excerpt(); echo substr($excerpt, 0, 100 )."..."; ?></div>
			</a>
		 
		</div> 
		<?php
		endwhile;
		wp_reset_query();
		?>
	</div>
</div>
<br>
<br>
	
<?php
get_footer();

<?php get_header(); ?>
	<div class="container content">
		<div class="main block">
			<?php if(have_posts()): ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="page">
						<h2><?php the_title(); ?></h2>
						<div class="well"> Company Phone: 555-555-555</div>
												<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<?php echo apautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</div>

		<div class="side">
			<div class="block">
			<h3>Sidebar Head</h3>
			<p>Praesent aliquet tellus mauris. Donec eget justo a turpis auctor sagittis et non erat. Proin at tincidunt enim, at ultricies orci. Donec et leo eu tortor maximus pretium. Mauris ac enim nulla.</p>
			<a class="button"> More </a>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
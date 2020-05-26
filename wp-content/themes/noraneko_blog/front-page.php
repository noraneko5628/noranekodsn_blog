<?php

/**
 * PHP file for front page.
 */

get_header(); ?>

<main id="main" class="main">
	<section class="mv">
		<div class="mv__inner">
			<div class="mv__site-info">
				<h1 class="mv__site-info__title">
					<?php
					if (has_custom_logo()) {
						the_custom_logo();
					} else {
						bloginfo('name');
					}
					?>
				</h1>
				<p class="mv__site-info__description">
					<?php bloginfo('description'); ?>
				</p>
			</div>
			<div class="mv__pickup">
				<h2 class="mv__pickup__head">
					PICKUP
				</h2>
				<div class="mv__pickup__article-content">
					<h3 class="mv__pickup__article-content__title">
						Illustratorと仲良くなろう！可愛いアイコン作りのポイント
						あああああああああああああ
					</h3>
					<p class="mv__pickup__article-content__description">
						Illustratorと仲良くなろう！可愛いアイコン作りのポイント
						あああああああああああああ
					</p>
					<div class="mv__pickup__article-content__info">
						<p class="mv__pickup__article-content__date">2019.10.27</p>
						<p class="mv__pickup__article-content__tag"><span>デザイン</span><span>Illustrator</span></p>
					</div>
				</div>
				<div class="mv__pickup__slider">
					<div class="mv__pickup__slider__inner">
						<img src="" alt="" class="mv__pickup__slider__thumbnail">
					</div>
				</div>
			</div>
	</section>

	<?php
	if ( have_posts() ) :
	?>
		<section class="main-blog">
			<div class="main-blog__inner">
				<h2 class="main-blog__head">
					Web / デザイン記事
				</h2>
				<ul class="main-blog__article-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="main-blog__article-list__item">
							<a href="<?php the_permalink(); ?>" class="main-blog__article-list__item__inner">
								<figure class="main-blog__article-list__thumbnail">
									<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} else {
										echo '<img src="https://dummyimage.com/600x400/d3d3d3/fff">';
									}
									?>
								</figure>
								<div class="main-blog__article-list__content">
									<h3 class="main-blog__article-list__content__title">
										<?php the_title(); ?>
									</h3>
									<p class="main-blog__article-list__content__description">
										<?php the_excerpt(); ?>
									</p>
									<div class="main-blog__article-list__content__info">
										<p class="main-blog__article-list__content__date">
											<time datetime="<?php the_time('F jS, Y'); ?>">
												<?php the_time('F jS, Y'); ?>
											</time>
										</p>
										<p class="main-blog__article-list__content__tag"><span></span><span></span></p>
									</div>
								</div>
							</a>
						</li>
						<?php
					endwhile;
					?>
				</ul>
				<button class="button button-more">もっと見る</button>
			</div>
		</section>
		<?php
	endif;
	?>
	<?php
	$args     = array(
		'post_type'      => 'noraneko_tweet',
		'posts_par_page' => 4,
	);
	$my_posts = get_posts( $args );
	if ( $my_posts ) :
		?>
		<section class="sub-blog">
			<div class="sub-blog__inner">
				<h2 class="sub-blog__head">
					のらねこのつぶやき
				</h2>
				<ul class="sub-blog__article-list">
					<?php
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>
					<li class="sub-blog__article-list__item">
						<a href="<?php the_permalink(); ?>" class="sub-blog__article-list__inner">
							<figure class="sub-blog__article-list__thumbnail">
									<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} else {
										echo '<img src="https://dummyimage.com/600x400/d3d3d3/fff">';
									}
									?>
							</figure>
							<div class="sub-blog__article-list__content">
								<p class="sub-blog__article-list__content__date">
									<time datetime="<?php the_time( 'F jS, Y' ); ?> ">
										<?php
										the_time( 'F jS, Y' );
										?>
									</time>
								</p>
								<h3 class="sub-blog__article-list__content__title">
									<?php the_title(); ?>
								</h3>
								<div class="sub-blog__article-list__content__info">
								</div>
							</div>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
				<button class="button button-more">もっと見る</button>
			</div>
		</section>
		<?php
		wp_reset_postdata();
	endif;
	?>
</main>


<?php
get_footer();

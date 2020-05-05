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
	if (have_posts()) :
	?>
		<section class="main-blog">
			<div class="main-blog__inner">
				<h2 class="main-blog__head">
					Web / デザイン記事
				</h2>
				<div class="main-blog__article-list">
					<ul class="main-blog__article-list__wrapper">
						<?php while (have_posts()) : the_post(); ?>
							<li class="main-blog__article-list__item">
								<a href="<?php the_permalink(); ?>" class="main-blog__article-list__item__inner">
									<figure class="main-blog__article-list__thumbnail">
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
				</div>
			</div>
		</section>
	<?php
	endif;
	?>
</main>


<?php
get_footer();

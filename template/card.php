<li class="col-md-6 col-xl-4 news_main-item" data-category="<?php echo $args['thisCategoryId']; ?>" data-id="<?php echo $args['id']; ?>">
	<div class="news_card">
		<div class="inner">
			<div class="news_card-pic">
				<div class="news-pic img_div"><img src="<?php echo $args['coverImage']["url"]; ?>"></div>
			</div>
			<div class="news_card-content news-content">
				<div class="news-content-hd">
					<div class="news-tag">
						<div class="icon svgicon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
							<path fill="#72705B" d="M15.1,7.7L8.3,0.9C8,0.7,7.6,0.5,7.2,0.5H2c-0.4,0-0.8,0.2-1.1,0.4C0.7,1.2,0.5,1.6,0.5,2v5.2
							c0,0.2,0,0.4,0.1,0.6C0.7,8,0.8,8.2,0.9,8.3l6.8,6.8c0.3,0.3,0.7,0.4,1.1,0.4c0.4,0,0.8-0.2,1.1-0.4l5.2-5.2
							c0.3-0.3,0.4-0.7,0.4-1.1c0-0.2,0-0.4-0.1-0.6C15.3,8,15.2,7.8,15.1,7.7z M8.8,14L2,7.2V2h5.2L14,8.8L8.8,14z M3.9,2.8
							c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.3,0.4,0.5C5,3.7,5,3.9,5,4.1c0,0.2-0.2,0.4-0.3,0.6C4.5,4.8,4.3,4.9,4.1,5
							C3.9,5,3.7,5,3.4,4.9C3.2,4.8,3.1,4.7,2.9,4.5C2.8,4.3,2.8,4.1,2.8,3.9c0-0.3,0.1-0.6,0.3-0.8C3.3,2.9,3.6,2.8,3.9,2.8z"/>
							</svg>
						</div>
						<div class="txt"><?php echo the_category(" "); ?></div>
					</div>
					<div class="news-time">
						<div class="icon svgicon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
							<path fill="#72705B" d="M8,14c3.3,0,6-2.7,6-6s-2.7-6-6-6S2,4.7,2,8S4.7,14,8,14z M8,0.5c4.1,0,7.5,3.4,7.5,7.5s-3.4,7.5-7.5,7.5
							S0.5,12.1,0.5,8S3.9,0.5,8,0.5z M11.8,7.6v1.1H7.2V4.2h1.1v3.4H11.8z"/>
							</svg>
						</div>
						<div class="txt"><?php echo the_time('Y/m/d'); ?></div>
					</div>
				</div>
				<div class="news-content-bd">
					<div class="news-title"><?php the_title(); ?></div>
					<div class="news-brief"><?php the_excerpt(); ?></div>
				</div>
				<div class="news-content-ft"><a class="lizz_link news-link" href="<?php echo get_permalink(); ?>">閱讀全文</a></div>
			</div>
		</div>
	</div>
</li>
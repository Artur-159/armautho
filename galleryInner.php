<!DOCTYPE HTML>
<html lang="hy">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, viewport-fit=cover" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="description" content="some description about project">

	<title>HAYHEGHINAK</title>

	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
	<link rel="stylesheet" href="css/videoGallery/index.css">
	<link rel="stylesheet" media="screen and (min-width: 1025px)" href="css/videoGallery/index-l.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" href="css/videoGallery/index-m.css">
	<?php
	include 'templates/favicons.php'
	?>
</head>

<body>
	<?php
	include 'templates/header.php'
	?>
	<div class="content" style="background-image: url(css//images/background_img.png);">
		<div class="galleryInner_page">
			<div class="breadcrumbs">
				<div class="page_container">
					<ul>
						<li><a href="index.php" class="icon_left">Գլխավոր էջ</a></li>
						<li><a href="videoGallery.php" class="icon_left">Պատկերասրահ</a></li>
						<li>
							<div class="icon_left">
								<span class="text_content">
									Սեմինար-քննարկում Marriott Armenia հյուրանոցում
								</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="page_container">
				<h2 class="page_title">Սեմինար-քննարկում Marriott Armenia հյուրանոցում</h2>
				<div class="gallery_inner">
					<picture>
						<source media="(min-width:1200px)" width="1440" height="637" srcset="images/tab_img1.jpg 1x, images/tab_img1@x2.jpg x2">
						<source media="(min-width:1025px)" width="1170" height="410" srcset="images/tab_img1.jpg 1x, images/tab_img1@x2.jpg x2">
						<source media="(min-width:769px)" width="994" height="350" srcset="images/tab_img1.jpg 1x, images/tab_img1@x2.jpg x2">
						<source media="(min-width:576px)" width="738" height="260" srcset="images/tab_img1.jpg 1x, images/tab_img1@x2.jpg x2">
						<!--size x2-->
						<img src="images/tab_img1.jpg" width="300" height="105" alt="" title="" /> <!--size x2-->
					</picture>
				</div>
				<ul class="inner_list">
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img2.jpg" srcset="images/tab_img2.jpg 1x, images/tab_img2.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img3.jpg" srcset="images/tab_img3.jpg 1x, images/tab_img3.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img4.jpg" srcset="images/tab_img4.jpg 1x, images/tab_img4.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img5.jpg" srcset="images/tab_img5.jpg 1x, images/tab_img5.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img6.jpg" srcset="images/tab_img6.jpg 1x, images/tab_img6.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img3.jpg" srcset="images/tab_img3.jpg 1x, images/tab_img3.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img4.jpg" srcset="images/tab_img4.jpg 1x, images/tab_img4.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="news_block">
							<span class="img_block">
								<img src="images/tab_img6.jpg" srcset="images/tab_img6.jpg 1x, images/tab_img6.jpg 2x" alt="" width="345" height="331" />
							</span>
						</a>
					</li>
				</ul>
				<div class="news_gallery">
					<div class="head_block">
						<div class="page_title">Նորություններ</div>
						<a href="#">Տեսնել բոլորը</a>
					</div>
					<div class="tab_section">
						<ul class="tab_btns">
							<li><button type="button" data-tab="gallery" aria-label="gallery" class="selected">Պատկերասրահ</button></li>
							<li><button type="button" data-tab="videos" aria-label="videos">Տեսանյութեր</button></li>
						</ul>
						<div class="tabs_container">
							<div class="tab_block gallery selected">
								<ul class="gallery_list">
									<li>
										<a href="#" class="news_block">
											<span class="img_block">
												<img src="images/tab_img1.jpg" srcset="images/tab_img1.jpg 1x, images/tab_img1.jpg 2x" alt="" width="710" height="331" />
											</span>
											<span class="title_block">
												Սեմինար-քննարկում Marriott Armenia հյուրանոցում
											</span>
										</a>
									</li>
									<li>
										<a href="#" class="news_block">
											<span class="img_block">
												<img src="images/tab_img2.jpg" srcset="images/tab_img2.jpg 1x, images/tab_img2.jpg 2x" alt="" width="345" height="331" />
											</span>
											<span class="title_block">
												ՄՍ իրավունքի ոլորտի միջազգային կոնֆերանս
											</span>
										</a>
									</li>
									<li>
										<a href="#" class="news_block">
											<span class="img_block">
												<img src="images/tab_img3.jpg" srcset="images/tab_img3.jpg 1x, images/tab_img3.jpg 2x" alt="" width="345" height="331" />
											</span>
											<span class="title_block">
												Տարեվերջյան հանդիպումը հեղինակային խորհրդի հետ
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="tab_block videos">
								<ul class="video_list">
									<li>
										<div class="video_block">
											<a href="https://www.youtube.com/watch?v=aWCwKi9bJyM&t=1238s" class="video_btn icon_play" data-fancybox="gallery">
												<img src="images/video_img1.svg" srcset="images/video_img1.svg 1x, images/video_img1.svg 2x" alt="" title="" width="710" height="339" />
											</a>
											<div class="title_block">
												Սեմինար-քննարկում Marriott Armenia հյուրանոցում
											</div>
										</div>
									</li>
									<li>
										<div class="video_block">
											<a href="https://www.youtube.com/watch?v=aWCwKi9bJyM&t=1238s" class="video_btn icon_play" data-fancybox="gallery">
												<img src="images/video_img2.svg" srcset="images/video_img2.svg 1x, images/video_img2.svg 2x" alt="" title="" width="710" height="399" />
											</a>
											<div class="title_block">
												Սեմինար-քննարկում Marriott Armenia հյուրանոցում
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php
	include 'templates/footer.php'
	?>

	<script src="js/swiper.min.js"></script>
	<script src="js/fancybox.js"></script>
	<script type="module" src="js/index.js"></script>
</body>

</html>
<div class="placebooking-single placebooking-place">
	<div class="row">
		<div class="col-lg-8 main-place-info">
			<div class="placebooking-gallery place-gallery">
				<!-- MAIN SLIDES -->
				<div class="slider">
					<figure>
						<img src="http://placehold.it/1200x600&text=one" alt="One">
						<figcaption>Caption for image one. <a href="#one">Read more</a>
						</figcaption>
					</figure>
					<figure>
						<img src="http://placehold.it/1200x600&text=two" alt="One">
						<figcaption>Caption for image two. <a href="#two">Read more</a>
						</figcaption>
					</figure>
					<figure>
						<img src="http://placehold.it/1200x600&text=three" alt="One">
						<figcaption>Caption for image three. <a href="#three">Read more</a>
						</figcaption>
					</figure>
					<figure>
						<img src="http://placehold.it/1200x600&text=four" alt="One">
						<figcaption>Caption for image four. <a href="#four">Read more</a>
						</figcaption>
					</figure>
					<figure>
						<img src="http://placehold.it/1200x600&text=five" alt="One">
						<figcaption>Caption for image five. <a href="#five">Read more</a>
						</figcaption>
					</figure>
				</div>

				<!-- THUMBNAILS -->
				<div class="slider-nav-thumbnails">
					<div><img src="http://placehold.it/1200x600&text=one" alt="One">
					</div>
					<div><img src="http://placehold.it/1200x600&text=two" alt="Two">
					</div>
					<div><img src="http://placehold.it/1200x600&text=three" alt="Three">
					</div>
					<div><img src="http://placehold.it/1200x600&text=four" alt="Four">
					</div>
					<div><img src="http://placehold.it/1200x600&text=five" alt="Five">
					</div>
				</div>

			</div>
			<div class="placebooking-summary summary">
				<?php the_content(); ?>
			</div>
			<div class="placebooking-space">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
							aria-controls="home" aria-selected="true">Phòng sảnh</a>
					</li>
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
						aria-controls="profile" aria-selected="false">Tiện ích/ dịch vụ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
							aria-controls="contact" aria-selected="false">Các loại sự kiện phù hợp</a>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="antd-pro-app-src-components-venue-detail-venue-room-list-index-imgWrapper"><img
								class="antd-pro-app-src-components-venue-detail-venue-room-list-index-imgResponsive"
								src="https://vdes.vn/images/small/uploads/venues/rooms/b402e78a9eaef5c2263d234b73be894d.jpg"
								alt="Event Space"></div>
						<div class="ant-col ant-col-xs-24 ant-col-sm-19">
							<div class="antd-pro-app-src-components-venue-detail-venue-room-list-index-roomListDetail">
								<h3
									class="ant-typography antd-pro-app-src-components-venue-detail-venue-room-list-index-roomListTitle">
									Event Space</h3>
								<div class="ant-row-flex">
									<div class="ant-col ant-col-xs-8" style="margin-top: 10px;">
										<div
											class="antd-pro-app-src-components-venue-detail-venue-room-list-index-iconTable">
											<i class="antd-pro-app-src-icons-icon_round_tables"></i></div><span
											class="ant-typography">Bàn Tròn: 210</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<h3>Các loại sự kiện phù hợp</h3>
						<ul>
							<li>
								MICEs
							</li>
							<li>
								Greet & meet/Offline
							</li>
							<li>
								Coaching/Training
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 additional">
			<h1 class="place-name"><?php the_title(); ?></h1>
			<div class="location">
				Bình Thạnh, Hồ Chí Minh
			</div>
			<div class="seats">
				Sức chứa tối đa: ~210 người
			</div>
			<div class="prices">
				Giá trung bình: 4,620,000đ - 38,500,000đ
			</div>

			<div class="short-description">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="services">
			<h3 class="placebooking-services">Gói dịch vụ</h3>

			<div class="services">
				<?php ob_start(); ?>
				<div class="service">
					<h4 class="service-name">Thuê địa điểm (1 giờ cho nhóm khách 100-210)</h4>
					<div class="price">6,050,000/ Giờ</div>
					<div class="promotion">
						Có 1 ưu đãi
					</div>

					<div class="bottom">
						<div class="seats">
							<div class="label">Số lượng người</div>
							<div class="value">10 người/bàn</div>
						</div>
					</div>
				</div>
				<?php
				$html = ob_get_clean();
				echo str_repeat($html, 10);
				?>
			</div>
		</div>
	</div>
</div>

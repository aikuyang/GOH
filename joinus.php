<?php
/*
 Template Name: 加入勵馨
*/
get_header();

// 分所資料 api
$response = wp_remote_get( 'http://goh.designhu-demo.com/wp-json/twmap/v1/volunteers' );
$apiResponse = json_decode( wp_remote_retrieve_body( $response ), true );

// Default branch info 
$res = wp_remote_get( 'http://goh.designhu-demo.com/wp-json/twmap/v1/volunteer/485' );
$apiRes = json_decode( wp_remote_retrieve_body( $res ), true );

$detail = (new Dev)->pageGetAcf(get_the_ID());

?>
<div class="joinUsContainer">
	<div class="container joinus">
		<div class="joinusTitle">
			<?php 
				if ( wp_is_mobile() ) {
					echo (new Dev)->sectionTitle('block', '加入勵馨', 'Join Us'); 
				} else {
					echo (new Dev)->sectionTitle('null', '加入勵馨', 'Join Us'); 
				} 
			?>
			<div class="joinUsSubtitle"><?php echo $detail['content_1']; ?></div>
		</div>
	</div>
</div>
<div class="applyContainer">
	<div class="container apply">
		<div class="aContainer">
			<div class="aCol-6">
				<?php  
					if ( wp_is_mobile() ) {
						echo (new Dev)->sectionTitle('block', $detail['title_2'], $detail['subtitle_2']); 
					} else {
						echo (new Dev)->sectionTitle('null', $detail['title_2'].'／'.$detail['subtitle_2'], '');
					}
				?>
				<div class="aInfo"><?php echo $detail['content_2']; ?></div>
				<div class="aForms">
					<h5>實習辦法/申請表</h5>
					<div class="aFormContainer">
						<?php
							$forms = $detail['applyForms'];
							foreach ( $forms as $form ) {
								$title = $form['title'];
								$file = $form['file'];
								?>
								<a class="afItem" href="" target="_blank">
									<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 0L24 9V27C24 27.7956 23.6839 28.5587 23.1213 29.1213C22.5587 29.6839 21.7956 30 21 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H15ZM21 27V10.5H13.5V3H3V27H21ZM10.38 15.465C10.02 14.31 9.225 10.62 11.325 10.56C13.425 10.5 12.045 15.24 12.045 15.24C12.63 17.475 15.075 19.08 15.075 19.08C15.825 18.855 20.1 18.36 19.5 20.58C18.855 22.8 14.25 20.715 14.25 20.715C11.325 20.925 9.135 21.705 9.135 21.705C7.44 24.87 5.46 26.25 4.65 24.915C3.645 23.25 7.845 21.105 7.845 21.105C10.02 17.58 10.35 15.525 10.38 15.465ZM11.355 16.725C10.755 18.675 9.555 20.76 9.555 20.76C10.83 20.25 13.62 19.665 13.62 19.665C11.91 18.165 11.385 16.74 11.355 16.725ZM16.065 19.98C16.065 19.98 18.69 20.955 18.75 20.565C18.855 20.16 16.755 19.8 16.065 19.98ZM7.575 22.215C6.42 22.665 5.31 24.585 5.58 24.585C5.85 24.6 6.945 23.685 7.575 22.215ZM11.355 13.89C11.355 13.815 12 11.37 11.355 11.295C10.905 11.25 11.34 13.83 11.355 13.89Z" fill="#E50057"/></svg>
									<span><?php echo $title;?></span>
								</a>
								<?php
							}
						?>
					</div>
				</div>
				<div class="aBtn">
					<a href="<?php echo $detail['applyFormFile'];?>" target="_blank">下載勵馨實習申請表<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 5.5L1 9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
				</div>
			</div>
			<div class="aCol-6" style="background-image: url(<?php echo $detail['img_2'];?>); background-size:cover; background-position: center; background-repeat: no-repeat; height: 416px;"></div>
		</div>
	</div>
</div>
<div class="volunteersContainer"> 
	<div class="volunteersContainer">
		<div class="vCol-6" style="background-image: url(<?php echo $detail['img_3'];?>); background-size:cover; background-position: center; background-repeat: no-repeat; height: 551px;"></div>
		<div class="vCol-6">
			<div class="vInner">
				<?php

					if ( wp_is_mobile() ) {
						echo (new Dev)->sectionTitle('block', $detail['title_3'], $detail['subtitle_3']); 
					} else {
						echo (new Dev)->sectionTitle('null', $detail['title_3'].'／'.$detail['subtitle_3'], '');
					}
 
				?>
				<div class="vInfo"><?php echo $detail['content_3']; ?></div>
				<div class="vBtns">
					<div class="vTB">
						<a href="<?php echo $detail['singleVLink'];?>">單場活動志工報名<svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.25 1L6.25 5L1.25 9" stroke="transparent" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
						<a href="<?php echo $detail['onlineVLink'];?>">志工招募線上報名<svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.25 1L6.25 5L1.25 9" stroke="transparent" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
					</div>
					<div class="vSB">各地分所連絡窗口<svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.25 1L6.25 5L1.25 9" stroke="transparent" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
				</div>
			</div>
		</div>
	</div> 
</div>
<div class="gohInfoContainer">
	<div class="container gohInfo">
		<div class="branchInfoContainer">
			<div class="biCol-4">
				<div class="locationList">
					<?php 
						foreach ( $apiResponse as $api ) {
							$id = $api['id'];
							$title = $api['title'];
							?>
							<div class="biItem" data-id="<?php echo $id;?>"><?php echo $title; ?></div>
							<?php
						}
					?>
				</div>
			</div>
			<div class="biCol-8">
				<div class="branchInfoDetail">
					<h5><?php echo $apiRes['title'];?></h5>
					<div class="locationInfo">
						<?php
						if ( $apiRes['contact'] ) {
							?> 
							<div class="liItem">
								<div class="title">志工聯絡人</div>
								<div class="content"><?php echo $apiRes['contact'];?></div>
							</div>
							<?php
						}
						if ( $apiRes['tel'] ) {
							?> 
							<div class="liItem">
								<div class="title">聯絡電話</div>
								<div class="content"><?php echo $apiRes['tel'];?></div>
							</div>
							<?php
						}
						if ( $apiRes['email'] ) {
							?> 
							<div class="liItem">
								<div class="title">報名E-mail</div>
								<div class="content"><?php echo $apiRes['email'];?></div>
							</div>
							<?php
						}
						?>
					</div>
					<?php
						if ( $apiRes['service'] ) {
							?>
							<h5>志工服務內容</h5>
							<div class="locationInfo"> 
								<?php
									foreach ( $apiRes['service'] as $r ) {
										$rTitle = $r['title'];
										$rContent = $r['content'];
										?> 
										<div class="liItem">
											<div class="title"><?php echo $rTitle; ?></div>
											<div class="content"><?php echo $rContent; ?></div>
										</div>
										<?php
									}
								?>
							</div>
							<?php
						} 
						if ( $apiRes['serviceTime'] ) {
							?>
							<h5>志工服務時間</h5>
							<div class="serviceTime"><?php echo $apiRes['serviceTime']; ?></div>
							<?php
						}
					?> 
				</div>
			</div>
		</div> 
	</div>
</div>
<div class="hrContainer">
	<div class="container hr">
		<div class="hrContainer">
			<div class="hrCol-6">
				<?php 

					if ( wp_is_mobile() ) {
						echo (new Dev)->sectionTitle('block', $detail['title_4'], $detail['subtitle_4']); 
					} else {
						echo (new Dev)->sectionTitle('null', $detail['title_4'].'／'.$detail['subtitle_4'], '');
					} 

				?>
				<div class="hrInfo"><?php echo $detail['content_4']; ?></div>
				<div class="hrBtns">
					<div class="sBtn">
						<a href="#">查看勵馨職缺<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 5.5L1 9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
					</div>
					<div class="fBtns">
						<a href="<?php echo $detail['jobBtn_1'];?>" target="_blank">104人力銀行<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 5.5L1 9.5" stroke="transparent" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
						<a href="<?php echo $detail['jobBtn_2'];?>"target="_blank">台灣就業通<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 5.5L1 9.5" stroke="transparent" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
						<a href="<?php echo $detail['jobBtn_3'];?>"target="_blank">1111人力銀行<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 5.5L1 9.5" stroke="transparent" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
						<a href="<?php echo $detail['jobBtn_4'];?>"target="_blank">台灣社會工作專業人員協會<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 5.5L1 9.5" stroke="transparent" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
					</div>
				</div>
			</div>
			<div class="hrCol-6" style="background-image: url(<?php echo $detail['img_4'];?>); background-size:cover; background-position: center; background-repeat: no-repeat; height: 416px;"></div>
		</div>
	</div>
</div>
<div class="memberContainer"> 
	<div class="memberContainer">
		<div class="mCol-6" style="background-image: url(<?php echo $detail['img_5'];?>); background-size:cover; background-position: center; background-repeat: no-repeat; height: 551px;"></div>
		<div class="mCol-6">
			<div class="mInner">
				<?php 

					if ( wp_is_mobile() ) {
						echo (new Dev)->sectionTitle('block', $detail['title_5'], $detail['subtitle_5']); 
					} else {
						echo (new Dev)->sectionTitle('null', $detail['title_5'].'／'.$detail['subtitle_5'], '');
					}
				?>
				<div class="mInfo"><?php echo $detail['content_5']; ?></div>
				<div class="mBtns">
					<a href="#">登入/成為會員<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 5.5L1 9.5" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
				</div>
			</div>
		</div>
	</div> 
</div>
<?php
get_footer();
<?php
/*
 Template Name: 分所
*/

get_header();
$current = get_queried_object();
$pageTitle = $current->post_title; 
$detail = (new Dev)->branchOffice(get_the_ID());
$banner = $detail['banner'];
$content = $detail['content'];
$serviceList = $detail['serviceList'];

$num = $detail['number'];
$obj = $detail['obj'];
$note = $detail['note'];
$sObj = $detail['sObj'];

$ytb = $detail['ytb'];

$otherOz = $detail['otherOz'];
$map = $detail['map'];
$contactInfo = $detail['contactInfo'];
$accountList = $detail['accountList'];

$posts = $detail['posts'];

$mono = $detail['mono'];
$money = $detail['money'];
?>
<div class="branchBannerContainer" style="background-image: url(<?php echo $banner;?>);background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; margin-top: -40px;">
	<div class="branchTitle">
		<h1><?php echo $pageTitle;?></h1>
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<!------------------- 分所介紹 ---------------------->
<div class="branchSectionContainer">
	<div class="container branch">
		<div class="branchInfoContainer">
			<div class="biCol-6">
				<?php 
				echo (new Dev)->sectionTitle('null', '分所介紹', ''); 
				echo $content;
				?>

			</div>
			<div class="biCol-6">
				<div class="biSlide">
				<?php
					foreach ( $serviceList as $sl ) {
						$img = $sl['img'];
						$title = $sl['title'];
						$content = $sl['content']; 
						?>
						<div class="biContent" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover; height: 500px;">
							<div class="bic">
								<?php echo (new Dev)->sectionTitle('block', $title, ''); ?>
								<span><?php echo $content;?></span>
							</div>
						</div>
						<?php
					}
				?>
				</div>
			</div>
		</div>
		
	</div>
</div>
<!------------------- 服務對象 ---------------------->
<div class="branchSectionContainer">
	<div class="container branch">
		<div class="serviceObject">
			<div class="soCol-6">
				<?php echo (new Dev)->sectionTitle('null', '服務對象', ''); ?>
				<h1><span><?php echo $num;?></span>+</h1>
				<h4><?php echo $obj; ?></h4>
				<span><?php echo $note; ?></span>
			</div>
			<div class="soCol-6">
				<div class="objectList">
					<?php 
						foreach ( $sObj as $s ) {
							$icon = $s['icon'];
							$title = $s['title'];
							$content = $s['content'];
							?>
							<div class="olItem">
								<div class="olImg" style="background-image: url(<?php echo $icon; ?>); background-position: center; background-repeat: no-repeat; background-size: contain; height: 100px;"></div>
								<div class="olContent">
									<h3><?php echo $title;?></h3>
									<span><?php echo $content;?></span>
								</div>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div>
		<div class="notSureContact">
			<div class="nscContainer">
				<span>不確定自己的狀況嗎？</span>歡迎聯絡我們來幫助您了解該怎麼做
			</div>
		</div>
	</div>
</div>

<?php
	if ( $ytb ) {
	?>
	<!------------------- 影片 ---------------------->
	<div class="branchSectionContainer">
		<div class="container branch">
			<div class='embedContainer'>
				<iframe src='https://www.youtube.com/embed/<?php echo $ytb;?>' frameborder='0' allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<?php
	}
?>

<!------------------- 機構外展服務 ---------------------->
<div class="branchSectionContainer">
	<div class="container branch">
		<div class="outServiceContainer">
			<?php echo (new Dev)->sectionTitle('null', '機構外展服務', ''); ?>
			<div class="osContainer">
				<?php 
				foreach ( $otherOz as $oz ) { 
					$logo = $oz['logo'];
					$title = $oz['title'];
					$content = $oz['content'];
					?>
					<div class="osItem">
						<div class="osLogo" style="background-image: url(<?php echo $logo; ?>); background-position: center; background-repeat: no-repeat; background-size:cover; height: 165px;"></div>
						<div class="osContent">
							<h6><?php echo $title;?></h6>
							<span><?php echo $content;?></span>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<!------------------- 聯絡資訊 ---------------------->
<div class="branchSectionContainer">
	<div class="container branch">
		<div class="contactInfoContainer">
			<?php echo (new Dev)->sectionTitle('null', '聯絡資訊', ''); ?>
			<div class="ciContainer">
				<div class="ciCol-6"><?php echo $map;?></div>
				<div class="ciCol-6">
					<div class="ciContent">
						<div class="ciInfo">
							<div class="ciItem">
								<span class="title">地址</span>
								<span class="content"><?php echo $contactInfo['add'];?></span>
							</div>
							<div class="ciItem">
								<span class="title">電話</span>
								<span class="content"><?php echo $contactInfo['tel'];?></span>
							</div>
							<div class="ciItem">
								<span class="title">傳真</span>
								<span class="content"><?php echo $contactInfo['fax'];?></span>
							</div>
							<div class="ciItem">
								<span class="title">信箱</span>
								<span class="content"><?php echo $contactInfo['mail'];?></span>
							</div>
							<div class="ciItem">
								<span class="title">服務時間</span>
								<span class="content"><?php echo $contactInfo['time'];?></span>
							</div>
							<div class="ciItem">
								<span class="title">劃撥戶名</span>
								<span class="content"><?php echo $contactInfo['accountName'];?></span>
							</div>
							<div class="ciItem">
								<span class="title">劃撥帳號</span>
								<span class="content"><?php echo $contactInfo['account'];?></span>
							</div>
							<div class="ciItem">
								<span class="title">粉絲專頁</span>
								<span class="content"><a href="<?php echo $contactInfo['fanpageLink'];?>" target="_blank"><?php echo $contactInfo['fanpage'];?></a></span>
							</div>
						</div>
						<div class="ciInfo"> 
							<div class="ciItem">
								<span class="title">劃撥帳號1</span>
								<span class="content"><?php echo $accountList['account_1']; ?></span>
							</div>
							<div class="ciItem">
								<span class="title">劃撥帳號2</span>
								<span class="content"><?php echo $accountList['account_2']; ?></span>
							</div>
							<div class="ciItem">
								<span class="title">劃撥帳號3</span>
								<span class="content"><?php echo $accountList['account_3']; ?></span>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>
<!------------------- 分所消息 ---------------------->
<div class="branchSectionContainer">
	<div class="container branch">

		<?php echo (new Dev)->sectionTitle('null', '分所消息', ''); ?>
	</div>
	<div class="branchNewsContainer">
		<div class="container bn">
			<?php
				$response = wp_remote_get( 'http://goh.designhu-demo.com/wp-json/wp/v2/latestnews?_embed=1&latestnews-category=50' );
				$apiResponse = json_decode( wp_remote_retrieve_body( $response ), true );
				foreach ( $apiResponse as $ar ) {
					$id = $ar['id'];
					$title = $ar['title']['rendered'];
					$tax = $ar['taxonomy'][0];
					$taxName = $ar['taxonomy'][0]['name'];
					$termLink = get_term_link($ar['taxonomy'][0]['term_id'], 'latestnews-category');
					$img = get_the_post_thumbnail_url($id, 'full');
					$excerpt = get_the_excerpt($id);
					$link = get_the_permalink($id); 
					 
					?>
					<div class="postGrid">
						<a href="<?php echo $link; ?>">
							<div class="pgImg" style="background-image:url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size:cover; height: 270px;">
								<div class="pgOverylay"><span>閱讀全文</span></div>
							</div>
							<div class="pgContent">
								<div class="pgMeta">
									<?php echo $taxName; ?>
								</div>
								<h4><?php echo $title;?></h4>
								<div class="pgExcerpt"><?php echo $excerpt; ?></div>
							</div>
						</a>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>

<!------------------- 支持勵馨公眾教育行動 ---------------------->
<div class="branchSectionContainer">
	<div class="container branch">
		<?php echo (new Dev)->sectionTitle('null', '支持勵馨公眾教育行動', ''); ?>
		<div class="donateContainer"> 
			<div class="dnContainer">
				<div class="dnImage" style="background-image:url(http://goh.designhu-demo.com/wp-content/uploads/Rectangle-39.png); background-repeat: no-repeat; background-position: center; background-size:cover; height:343px;"></div>
				<div class="dnContent">
					<h5>一杯咖啡 支持倡議更進一步</h5>
					<div class="dnInner">勵馨基金會三十多年來，秉持著服務與倡議同行的理念，持續在各大發聲，推動相關法案進行，近年來，我們促成了法案法案法案法案法案法案法案法案，如果您也一樣在意社會公眾利益，我們想邀請您...</div>
					<a href="/" class="dnBtn"><span>前往介紹頁面</span></a>
				</div>
			</div>
		</div>		
	</div>
</div>

<?php
	if ( $mono || $money ) {
		?>
		<!------------------- 徵信 ---------------------->
		<div class="branchSectionContainer">
			<div class="container branch">
				<div class="fileListTitle">徵信</div>
				<div class="fileList">
					<div class="monoList">
						<?php 
							foreach ( $mono as $m ) {
								$title = $m['title'];
								$file = $m['file'];
								?><a href="<?php echo $file?>" target="_blank"><svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 0L24 9V27C24 27.7956 23.6839 28.5587 23.1213 29.1213C22.5587 29.6839 21.7956 30 21 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H15ZM21 27V10.5H13.5V3H3V27H21ZM10.38 15.465C10.02 14.31 9.225 10.62 11.325 10.56C13.425 10.5 12.045 15.24 12.045 15.24C12.63 17.475 15.075 19.08 15.075 19.08C15.825 18.855 20.1 18.36 19.5 20.58C18.855 22.8 14.25 20.715 14.25 20.715C11.325 20.925 9.135 21.705 9.135 21.705C7.44 24.87 5.46 26.25 4.65 24.915C3.645 23.25 7.845 21.105 7.845 21.105C10.02 17.58 10.35 15.525 10.38 15.465ZM11.355 16.725C10.755 18.675 9.555 20.76 9.555 20.76C10.83 20.25 13.62 19.665 13.62 19.665C11.91 18.165 11.385 16.74 11.355 16.725ZM16.065 19.98C16.065 19.98 18.69 20.955 18.75 20.565C18.855 20.16 16.755 19.8 16.065 19.98ZM7.575 22.215C6.42 22.665 5.31 24.585 5.58 24.585C5.85 24.6 6.945 23.685 7.575 22.215ZM11.355 13.89C11.355 13.815 12 11.37 11.355 11.295C10.905 11.25 11.34 13.83 11.355 13.89Z" fill="#E50057"/></svg><span><?php echo $title;?></span></a><?php
							}
						?>
					</div>
					<div class="moneyList">
						<?php 
							foreach ( $money as $mn ) {
								$title = $mn['title'];
								$file = $mn['file'];
								?><a href="<?php echo $file?>" target="_blank"><svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 0L24 9V27C24 27.7956 23.6839 28.5587 23.1213 29.1213C22.5587 29.6839 21.7956 30 21 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H15ZM21 27V10.5H13.5V3H3V27H21ZM10.38 15.465C10.02 14.31 9.225 10.62 11.325 10.56C13.425 10.5 12.045 15.24 12.045 15.24C12.63 17.475 15.075 19.08 15.075 19.08C15.825 18.855 20.1 18.36 19.5 20.58C18.855 22.8 14.25 20.715 14.25 20.715C11.325 20.925 9.135 21.705 9.135 21.705C7.44 24.87 5.46 26.25 4.65 24.915C3.645 23.25 7.845 21.105 7.845 21.105C10.02 17.58 10.35 15.525 10.38 15.465ZM11.355 16.725C10.755 18.675 9.555 20.76 9.555 20.76C10.83 20.25 13.62 19.665 13.62 19.665C11.91 18.165 11.385 16.74 11.355 16.725ZM16.065 19.98C16.065 19.98 18.69 20.955 18.75 20.565C18.855 20.16 16.755 19.8 16.065 19.98ZM7.575 22.215C6.42 22.665 5.31 24.585 5.58 24.585C5.85 24.6 6.945 23.685 7.575 22.215ZM11.355 13.89C11.355 13.815 12 11.37 11.355 11.295C10.905 11.25 11.34 13.83 11.355 13.89Z" fill="#E50057"/></svg><span><?php echo $title;?></span></a><?php
							}
						?>
					</div>
				</div>
			</div> 
		</div>
		<?php
	}
?>


<?php


get_footer();
<?php
/*
 Template Name: 關於勵馨
*/

get_header();
$current = get_queried_object(); 
$detail = (new Dev)->aboutField(get_the_ID());
$kv = $detail['kv'];
$info = $detail['info'];
$aboutList = $detail['aboutList'];
$aboutContent = $detail['aboutContent'];

$missionList = $detail['missionList'];

$gloryList = $detail['gloryList'];
$gloryLink = $detail['gloryLink'];

$ceo = $detail['ceo'];
$members = $detail['members'];

$contentv = $detail['content'];
$link = $detail['link'];

$imgF = $detail['img'];

$newFsList = $detail['newFsList'];
$hsFsList = $detail['hsFsList']; 

?>
<div class="branchBannerContainer" style="background-image: url(<?php echo $kv;?>);background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; margin-top: -40px;">
	<div class="branchTitle">
		<h1>關於勵馨</h1>
		<div class="branchInfo"><?php echo $info;?></div>
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<!------------------------------ 關於勵馨 ------------------------------>
<div class="aboutContainer">
	<div class="container about">
		<div class="aCol-6">
			<div class="aboutGohList">
			<?php
			foreach ( $aboutList as $al ) {
				$icon = $al['icon'];
				$title_1 = $al['title_1'];
				$num = $al['number'];
				$title_2 = $al['title_2'];
				?>
				<div class="agItem">
					<div class="agImg" style="background-image: url(<?php echo $icon; ?>); background-repeat: no-repeat; background-position: center; background-size: contain; "></div>
					<div class="agContent">
						<div class="title_1"><?php echo $title_1;?></div>
						<div class="title_2"><span><?php echo $num;?></span><?php echo $title_2;?></div>
					</div>
				</div>
				<?php
			}   
			?>
			</div>
		</div>
		<div class="aCol-6">
			<div class="aboutContent">
				<svg width="50" height="36" viewBox="0 0 50 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50 35.8031V17.4954C49.3785 17.4954 41.7839 17.4954 41.7839 17.4954C41.7839 17.4954 41.7839 14.3932 41.7839 9.46464C41.7839 4.23075 42.6562 1.15584 50 1.15584V-0.00542831H41.8929C34.4401 -0.00542831 30.2584 5.35386 30.2584 17.7789C30.2584 22.5548 30.2584 35.7976 30.2584 35.7976H50V35.8031Z" fill="#E50057"/><path d="M19.7422 35.8031V17.4954C19.1207 17.4954 11.5261 17.4954 11.5261 17.4954C11.5261 17.4954 11.5261 14.3932 11.5261 9.46464C11.5261 4.23075 12.3984 1.15584 19.7422 1.15584V-0.00542831H11.6351C4.18227 -0.00542831 0.000608444 5.35386 0.000608444 17.7789C0.000608444 22.5548 0.000608444 35.7976 0.000608444 35.7976H19.7422V35.8031Z" fill="#E50057"/></svg>
				<?php echo $aboutContent;?>		
			</div>
		</div>
	</div>
</div>
<!------------------------------ 勵馨使命與發展 ------------------------------>
<div class="missonContainer">
	<div class="container mission">
		<?php echo (new Dev)->sectionTitle('block', '勵馨使命與發展', 'GOHs Vision & Mission'); ?>
		<div class="missionListContainer">
			<?php
			foreach ( $missionList as $ml ) {
				$img = $ml['img'];
				$title = $ml['title'];
				$year = $ml['year'];
				$content = $ml['content'];
				?>
				<div class="mlItem" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size:cover; ">
					<div class="mlInner">
						<div class="readMore">閱讀<br>更多</div>
						<div class="content">
							<h4><?php echo $title;?></h4>
							<span class="year"><?php echo $year; ?></span>
							<div class="inner"><?php echo $content;?></div>
						</div>
					</div>
				</div>
				<?php
			}  
			?>
		</div>
	</div>
</div>
<!------------------------------ 勵馨服務據點 ------------------------------>
<div class="serviceBaseContainer">
	<div class="container service">
		<?php echo (new Dev)->sectionTitle('block', '勵馨服務據點', 'GOHs Service Base'); ?>
		<div class="sbContainer">
			<div class="sCol-6"><?php include('template/taiwan.php'); ?></div>
			<div class="sCol-6">
				<div class="baseContainer"></div>
			</div>
		</div>
	</div>
</div>
<!------------------------------ 勵馨榮耀 ------------------------------>
<div class="gloryContainer">
	<div class="container glory">
		<?php echo (new Dev)->sectionTitle('block', '勵馨榮耀', 'GOHs Glory'); ?>
		<div class="gloryListContainer">
			<div class="gCol-7">
			<?php
				$i = 0;
				foreach ( $gloryList as $gl ) {
					$year = $gl['year'];
					$title = $gl['title'];
					$content = $gl['content']; 
					if ( $i++ <= 2) {
						?>
						<div class="glItemD">
							<div class="glTitle">
								<span class="year"><?php echo $year;?></span>
								<span class="goh">勵馨榮獲</span>
								<span class="title"><?php echo $title; ?></span>
							</div>
							<div class="glContent">
								<?php echo $content; ?>
							</div>
						</div>
					 <?php
					} 
				}
			?>
			</div>
			<div class="gCol-3">
			<?php
				$o = 0;
				foreach ( $gloryList as $gl ) {
					$year = $gl['year'];
					$title = $gl['title'];
					$content = $gl['content']; 
					if ( $o++ > 2) {
						?>
						<div class="glItemD">
							<div class="glTitle">
								<span class="year"><?php echo $year;?></span>
								<span class="goh">勵馨榮獲</span>
								<span class="title"><?php echo $title; ?></span>
							</div>
							<div class="glContent">
								<?php echo $content; ?>
							</div>
						</div>
					 <?php
					} 
				}
			?>
			</div>
		</div>
		<div class="gloryLink"><a href="<?php echo $gloryLink; ?>" target="_blank">查看更多勵馨榮耀</a></div>
	</div>
</div>
<!------------------------------ 組織架構 ------------------------------>
<div class="orgContainer">
	<div class="container org">
		<?php echo (new Dev)->sectionTitle('block', '組織架構', 'GOHs Organization'); ?>
		<div class="ogzContainer">
			<div class="ogCol-6">
				<?php echo (new Dev)->sectionTitle('null', '執行長', 'GOHs CEO'); ?>
				<div class="ceoContainer">
					<div class="ceoCol-3" style="background-image:url(<?php echo $ceo['img'];?>); background-repeat: no-repeat; background-position: center; background-size:cover; "></div>
					<div class="ceoCol-7">
						<h4><?php echo $ceo['name'];?><span>執行長</span></h4>
						<div class="ceoContent"><?php echo $ceo['info']; ?></div>
						<div class="ceoListBtn">
							<div class="ceoList"><?php echo $ceo['list']; ?></div>
							<div class="ceoBtn">
								<a href="<?php echo $ceo['link'];?>" target="_blank"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 0.585938L12 5.08594V14.0859C12 14.4838 11.842 14.8653 11.5607 15.1466C11.2794 15.4279 10.8978 15.5859 10.5 15.5859H1.5C1.10218 15.5859 0.720644 15.4279 0.43934 15.1466C0.158035 14.8653 0 14.4838 0 14.0859V2.08594C0 1.68811 0.158035 1.30658 0.43934 1.02528C0.720644 0.743973 1.10218 0.585938 1.5 0.585938H7.5ZM10.5 14.0859V5.83594H6.75V2.08594H1.5V14.0859H10.5ZM5.19 8.31844C5.01 7.74094 4.6125 5.89594 5.6625 5.86594C6.7125 5.83594 6.0225 8.20594 6.0225 8.20594C6.315 9.32344 7.5375 10.1259 7.5375 10.1259C7.9125 10.0134 10.05 9.76594 9.75 10.8759C9.4275 11.9859 7.125 10.9434 7.125 10.9434C5.6625 11.0484 4.5675 11.4384 4.5675 11.4384C3.72 13.0209 2.73 13.7109 2.325 13.0434C1.8225 12.2109 3.9225 11.1384 3.9225 11.1384C5.01 9.37594 5.175 8.34844 5.19 8.31844ZM5.6775 8.94844C5.3775 9.92344 4.7775 10.9659 4.7775 10.9659C5.415 10.7109 6.81 10.4184 6.81 10.4184C5.955 9.66844 5.6925 8.95594 5.6775 8.94844ZM8.0325 10.5759C8.0325 10.5759 9.345 11.0634 9.375 10.8684C9.4275 10.6659 8.3775 10.4859 8.0325 10.5759ZM3.7875 11.6934C3.21 11.9184 2.655 12.8784 2.79 12.8784C2.925 12.8859 3.4725 12.4284 3.7875 11.6934ZM5.6775 7.53094C5.6775 7.49344 6 6.27094 5.6775 6.23344C5.4525 6.21094 5.67 7.50094 5.6775 7.53094Z" fill="white"/></svg>組織圖</a>
							</div>
						</div>
					</div> 
				</div>
			</div>
			<div class="ogCol-4">
				<?php echo (new Dev)->sectionTitle('null', '現任董事會', 'GOHs'); ?>
				<div class="membersContainer"> 
					<div class="mCol-6">
						<?php 
						$q = 0;
						foreach ( $members as $m ) {
							$jobTitle = $m['jobTitle'];
							$name = $m['name'];
							if ( $q++ <= 4 ) {
								?>
								<div class="mItem">
									<span class="title"><?php echo $jobTitle;?></span>
									<span class="name"><?php echo $name; ?></span>
								</div>
								<?php
							}
						} 
						?>
					</div>
					<div class="mCol-6">
						<?php 
						$qq = 0;
						foreach ( $members as $m ) {
							$jobTitle = $m['jobTitle'];
							$name = $m['name'];
							if ( $qq++ > 4 ) {
								?>
								<div class="mItem">
									<span class="title"><?php echo $jobTitle;?></span>
									<span class="name"><?php echo $name; ?></span>
								</div>
								<?php
							}
						} 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------------------ 誠信經營規範 ------------------------------>
<div class="manageContainer">
	<div class="container manage">
		<?php echo (new Dev)->sectionTitle('block', '誠信經營規範', 'Integrity management norms'); ?>
		<div class="manageContent"><?php echo $contentv;?></div>
		<div class="manageLink"><a href="<?php echo $link;?>" target="_blank"><svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0.585938L12.5 5.08594V14.0859C12.5 14.4838 12.342 14.8653 12.0607 15.1466C11.7794 15.4279 11.3978 15.5859 11 15.5859H2C1.60218 15.5859 1.22064 15.4279 0.93934 15.1466C0.658035 14.8653 0.5 14.4838 0.5 14.0859V2.08594C0.5 1.68811 0.658035 1.30658 0.93934 1.02528C1.22064 0.743973 1.60218 0.585938 2 0.585938H8ZM11 14.0859V5.83594H7.25V2.08594H2V14.0859H11ZM5.69 8.31844C5.51 7.74094 5.1125 5.89594 6.1625 5.86594C7.2125 5.83594 6.5225 8.20594 6.5225 8.20594C6.815 9.32344 8.0375 10.1259 8.0375 10.1259C8.4125 10.0134 10.55 9.76594 10.25 10.8759C9.9275 11.9859 7.625 10.9434 7.625 10.9434C6.1625 11.0484 5.0675 11.4384 5.0675 11.4384C4.22 13.0209 3.23 13.7109 2.825 13.0434C2.3225 12.2109 4.4225 11.1384 4.4225 11.1384C5.51 9.37594 5.675 8.34844 5.69 8.31844ZM6.1775 8.94844C5.8775 9.92344 5.2775 10.9659 5.2775 10.9659C5.915 10.7109 7.31 10.4184 7.31 10.4184C6.455 9.66844 6.1925 8.95594 6.1775 8.94844ZM8.5325 10.5759C8.5325 10.5759 9.845 11.0634 9.875 10.8684C9.9275 10.6659 8.8775 10.4859 8.5325 10.5759ZM4.2875 11.6934C3.71 11.9184 3.155 12.8784 3.29 12.8784C3.425 12.8859 3.9725 12.4284 4.2875 11.6934ZM6.1775 7.53094C6.1775 7.49344 6.5 6.27094 6.1775 6.23344C5.9525 6.21094 6.17 7.50094 6.1775 7.53094Z" fill="white"/></svg>誠信經營規範守則</a></div>
	</div>
</div>
<!------------------------------ 財務報表 ------------------------------>
<div class="finContainer">
	<div class="container fin">
		<?php echo (new Dev)->sectionTitle('block', '財務報表', 'GOHs Financial Statements'); ?>
		<div class="mainFinImg"><img src="<?php echo $imgF;?>"></div>
		<div class="finRepoContainer">
			<div class="frTitle">最新財務收支報表</div>
			<div class="frList">
				<?php
				foreach ( $newFsList as $nList ) {
					$title = $nList['title'];
					$file = $nList['file'];
					?>
					<a href="<?php echo $file;?>" target="_blank"><svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 0L24 9V27C24 27.7956 23.6839 28.5587 23.1213 29.1213C22.5587 29.6839 21.7956 30 21 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H15ZM21 27V10.5H13.5V3H3V27H21ZM10.38 15.465C10.02 14.31 9.225 10.62 11.325 10.56C13.425 10.5 12.045 15.24 12.045 15.24C12.63 17.475 15.075 19.08 15.075 19.08C15.825 18.855 20.1 18.36 19.5 20.58C18.855 22.8 14.25 20.715 14.25 20.715C11.325 20.925 9.135 21.705 9.135 21.705C7.44 24.87 5.46 26.25 4.65 24.915C3.645 23.25 7.845 21.105 7.845 21.105C10.02 17.58 10.35 15.525 10.38 15.465ZM11.355 16.725C10.755 18.675 9.555 20.76 9.555 20.76C10.83 20.25 13.62 19.665 13.62 19.665C11.91 18.165 11.385 16.74 11.355 16.725ZM16.065 19.98C16.065 19.98 18.69 20.955 18.75 20.565C18.855 20.16 16.755 19.8 16.065 19.98ZM7.575 22.215C6.42 22.665 5.31 24.585 5.58 24.585C5.85 24.6 6.945 23.685 7.575 22.215ZM11.355 13.89C11.355 13.815 12 11.37 11.355 11.295C10.905 11.25 11.34 13.83 11.355 13.89Z" fill="#E50057"/></svg><?php echo $title;?></a>

					<?php
				}

				?>
			</div>
		</div>
		<div class="finRepoContainer">
			<div class="frTitle">歷史財務收支報表</div>
			<div class="frList">
				<?php
					foreach ( $hsFsList as $hf ) {
						?><div class="hsList"><?php
						$title = $hf['title'];
						?><strong><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="10" height="10" rx="3" fill="#E50057"/></svg><?php echo $title;?></strong><?php
						$fsContentList = $hf['fsContentList'];
						?><div class="hsItemList"><?php 
						foreach ( $fsContentList as $fcl ) {
							$title = $fcl['title'];
							$file = $fcl['file'];
							?><a href="<?php echo $file;?>" target="_blank"><svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 0L24 9V27C24 27.7956 23.6839 28.5587 23.1213 29.1213C22.5587 29.6839 21.7956 30 21 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H15ZM21 27V10.5H13.5V3H3V27H21ZM10.38 15.465C10.02 14.31 9.225 10.62 11.325 10.56C13.425 10.5 12.045 15.24 12.045 15.24C12.63 17.475 15.075 19.08 15.075 19.08C15.825 18.855 20.1 18.36 19.5 20.58C18.855 22.8 14.25 20.715 14.25 20.715C11.325 20.925 9.135 21.705 9.135 21.705C7.44 24.87 5.46 26.25 4.65 24.915C3.645 23.25 7.845 21.105 7.845 21.105C10.02 17.58 10.35 15.525 10.38 15.465ZM11.355 16.725C10.755 18.675 9.555 20.76 9.555 20.76C10.83 20.25 13.62 19.665 13.62 19.665C11.91 18.165 11.385 16.74 11.355 16.725ZM16.065 19.98C16.065 19.98 18.69 20.955 18.75 20.565C18.855 20.16 16.755 19.8 16.065 19.98ZM7.575 22.215C6.42 22.665 5.31 24.585 5.58 24.585C5.85 24.6 6.945 23.685 7.575 22.215ZM11.355 13.89C11.355 13.815 12 11.37 11.355 11.295C10.905 11.25 11.34 13.83 11.355 13.89Z" fill="#E50057"/></svg><?php echo $title;?></a><?php
						}
						?></div></div><?php
					}

				?>
			</div>
		</div>
	</div>
</div>
<?php

get_footer();
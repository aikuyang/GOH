<?php
/*
 Template Name: 感謝頁
*/

get_header();

?>
<div class="thankyouContainer">
	<div class="container thankyou">
		<div class="tyImgContainer">
			<img src="http://goh.designhu-demo.com/wp-content/uploads/Group-366.svg" alt="" width="100%">
		</div>
		<?php echo (new Dev)->sectionTitle('block', '感謝頁標題', 'Thanks page title'); ?>
		<div class="tyInnerContainer">
			<div class="tyCol-4">
				<div class="tyOrderInfo">
					<div class="tyItem">
						<div class="tyTitle">訂單編號</div>
						<div class="tyContent">1010</div>
					</div>
					<div class="tyItem">
						<div class="tyTitle">報名日期</div>
						<div class="tyContent">2021-11-11</div>
					</div>
					<div class="tyItem">
						<div class="tyTitle">欲參加場次</div>
						<div class="tyContent">13:30-14:00</div>
					</div>
					<div class="tyItem">
						<div class="tyTitle">欲參加人數</div>
						<div class="tyContent">5人</div>
					</div>
				</div>
				<div class="tyNote">
					<h4>活動備註</h4>
					<div class="tyContent">
					·我是活動備註的假文假字，我是活動備註的假文假字。<br>
					·我是活動備註的假文假字我是活動備註的假文假字。<br>
					·我是活動備註的假文假字。</div>	
				</div>
			</div>
			<div class="tyCol-8">
				<div class="tyOrderItemDetail">
					<div class="tyoItem">
						<div class="tyoTitle">報名活動</div>
						<div class="tyoContent">總計</div>
					</div>
					<div class="tyoItem">
						<div class="tyoTitle">勵馨基金會【情感教育】X【情境解謎】體驗活動──台北場</div>
						<div class="tyoContent">NT$500.00</div>
					</div>
					<div class="tyoItem">
						<div class="tyoTitle">付款方式</div>
						<div class="tyoContent">線上ATM</div>
					</div>
					<div class="tyoItem">
						<div class="tyoTitle">總計</div>
						<div class="tyoContent">NT$500.00</div>
					</div>
				</div>
				<div class="tyApplyDetail">
					<div class="tyaItem">
						<div class="tyaTitle">報名資訊</div>
						<div class="tyaContent"></div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">姓名</div>
						<div class="tyaContent">林OO</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">就讀學校</div>
						<div class="tyaContent">臺北市立第一女子高級中學</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">聯絡電話</div>
						<div class="tyaContent">0912-345-678</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">電子郵件</div>
						<div class="tyaContent">Lawrence.Friesen16@gmail.com</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">出生日期</div>
						<div class="tyaContent">2003/11/11</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">身分證字號</div>
						<div class="tyaContent">Q234567891</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">緊急聯絡人/關係</div>
						<div class="tyaContent">林OO/父親</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">緊急聯絡人電話</div>
						<div class="tyaContent">0912-345-676</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">是否願意接受活動側錄</div>
						<div class="tyaContent">考慮中</div>
					</div>
					<div class="tyaItem">
						<div class="tyaTitle">餐點葷素</div>
						<div class="tyaContent">素</div>
					</div>
				</div>
				<div class="tyForm">
					<div class="tyfTitle">
						<?php echo (new Dev)->sectionTitle('null', '問卷填寫', ''); ?>
						<span class="subtitle">本欄位非必填資訊，但如您填寫可以幫助勵馨提供更好的服務</span>
					</div>
					<form action="/">
						<div class="tyRow">
							<span class="title">Q1.請問您透過甚麼管道看到此活動並進⽽參與本次活動？（可複選）</span>
							<div class="tyCheckboxs">
								<span><input type="checkbox" name="tyCb[]" value="社群貼文（FB/IG）" id="tycb_1"><label for="tycb_1">社群貼文（FB/IG）</label></span>
								<span><input type="checkbox" name="tyCb[]" value="LINE@" id="tycb_2"><label for="tycb_2">LINE@</label></span>
								<span><input type="checkbox" name="tyCb[]" value="媒體廣告" id="tycb_3"><label for="tycb_3">媒體廣告</label></span>
								<span><input type="checkbox" name="tyCb[]" value="勵馨官⽅網站" id="tycb_4"><label for="tycb_4">勵馨官⽅網站</label></span>
								<span><input type="checkbox" name="tyCb[]" value="平面廣告(捷運站/廣告/超商文宣...)" id="tycb_5"><label for="tycb_5">平面廣告(捷運站/廣告/超商文宣...)</label></span>
								<span><input type="checkbox" name="tyCb[]" value="親友介紹" id="tycb_6"><label for="tycb_6">親友介紹</label></span>
								<span><input type="checkbox" name="tyCb[]" value="名人推薦" id="tycb_7"><label for="tycb_7">名人推薦</label></span>
								<span><input type="checkbox" name="tyCb[]" value="校園宣導" id="tycb_8"><label for="tycb_8">校園宣導</label></span>
								<span><input type="checkbox" name="tyCb[]" value="教會分享" id="tycb_9"><label for="tycb_9">教會分享</label></span>
								<span><input type="checkbox" name="tyCb[]" value="其他" id="tycb_10"><label for="tycb_10">其他<input type="text" name="tycb_other_10"></label></span>
							</div>
						</div>
						<div class="tyRow">
							<span class="title">Q2.請問您現已加⼊勵馨基⾦會的訊息管道？（可複選）</span>
							<div class="tyCheckboxs">
								<span><input type="checkbox" name="tyCb[]" value="LINE@官方帳號" id="tycb_11"><label for="tycb_11">LINE@官方帳號</label></span>
								<span><input type="checkbox" name="tyCb[]" value="FB粉絲團（勵馨基金會 The Garden of Hope Foundation）" id="tycb_12"><label for="tycb_12">FB粉絲團（勵馨基金會 The Garden of Hope Foundation）</label></span>
								<span><input type="checkbox" name="tyCb[]" value="訂閱營銷電子報" id="tycb_13"><label for="tycb_13">訂閱營銷電子報</label></span>
								<span><input type="checkbox" name="tyCb[]" value="訂閱議題專欄EDM" id="tycb_14"><label for="tycb_14">訂閱議題專欄EDM</label></span>
								<span><input type="checkbox" name="tyCb[]" value="訂閱紙本雙月會訊" id="tycb_15"><label for="tycb_15">訂閱紙本雙月會訊</label></span>
								<span><input type="checkbox" name="tyCb[]" value="IG帳號（Gardenofhope.tw）" id="tycb_16"><label for="tycb_16">IG帳號（Gardenofhope.tw）</label></span>
								<span><input type="checkbox" name="tyCb[]" value="YouTube（勵馨基金會）" id="tycb_17"><label for="tycb_17">YouTube（勵馨基金會）</label></span>
								<span><input type="checkbox" name="tyCb[]" value="其他" id="tycb_18"><label for="tycb_18">其他<input type="text" name="tycb_other_18"></label></span>
							</div>
						</div>
						<div class="tyRow">
							<span class="title">Q3.想對勵馨基金會說的話？</span>
							<div class="tyTextarea">
								<textarea name="tymsg" rows="16"></textarea>
							</div>
						</div>
						<div class="tyRow">
							<input type="submit" value="送出">
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php


get_footer();
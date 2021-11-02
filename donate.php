<?php
/*
 Template Name: 立即捐款
*/

get_header();
?>
<div class="branchBannerContainer" style="background-image: url(http://goh.designhu-demo.com/wp-content/uploads/Rectangle-2-5.png);background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; margin-top: -40px;">
	<div class="branchTitle">
		<h1>立即捐款</h1>
		<div class="branchInfo">勵馨的社會投資報酬率（SROI）總價值為「8」，代表您的每一塊錢投入，勵馨可以創造八倍的社會回饋。</div>
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<div class="donateContainer">
	<div class="container donate">
		<?php // ==================================================================================== 捐款表單 階段一 ============ ?> 
		<div class="donateForm Step1 active">
			<?php echo (new Dev)->sectionTitle('block', '我是登入提示文案',); ?>
			<div class="donateInfoLoginContainer">
				<div class="diInfo">您的每一筆捐款，勵馨將開立捐款收據，請詳細填寫您的個人基本資料，本會將保密您的個人資料。同時我們也邀請您預先登入會員，以減少您填寫基本資料欄位的時間。
	若您在捐款過程中有任何問題，請來電(02)8911-8595，謝謝您。</div>
				<div class="diBtns">
					<div class="register">加入會員</div>
					<div class="login">立即登入</div>	
				</div>
			</div>
			<div class="donateFormContainer">
				<form action=""> 
					<?php // ==================================================================================== 捐款付費資料 Start ============ ?>
					<div class="info">
						<?php echo (new Dev)->sectionTitle('null', '捐款付費資料',); ?>
						<div class="dfRowContainer">
							<div class="dfCol">
								<label for="df_1">
									<span class="title">捐款用途<sup>*</sup></span>
									<span class="content"> 
										<select name="goto">
											<option value="gt_1">借我你的光</option>
											<option value="gt_2">捐款用途2</option>
											<option value="gt_3">捐款用途3</option>
										</select>
									</span>
								</label>
							</div>
							<div class="dfCol">
								<label for="df_2">
									<span class="title">捐款金額<sup>*</sup></span>
									<span class="content"> 
										<span class="dfCost"><input type="number" name="df_2"> 元</span><span>（請自行輸入100元（含）以上之捐款金額，或直接選擇以下捐款金額。</span>
									</span>
								</label>
								<div class="donatePrice">
									<div class="dpItem" data-price="300">NT.300</div>
									<div class="dpItem" data-price="500">NT.500</div>
									<div class="dpItem" data-price="1000">NT.1000</div>
									<div class="dpItem" data-price="2000">NT.2000</div>
									<div class="dpItem" data-price="3000">NT.3000</div>
									<div class="dpItem" data-price="5000">NT.5000</div>
								</div>
							</div>
							<div class="dfCol">
								<label for="df_3">
									<span class="title">贈品需求<sup>*</sup></span>
									<span class="content"> 
										<div class="df_3radio"> 
											<input type="radio" value="yes" name="df_3[]" id="df_31"><label for="df_31">需要贈品：《借我你的光》明信片一組3張</label>
											<input type="radio" value="no" name="df_3[]" id="df_32"><label for="df_32">不需要贈品</label>
										</div>
									</span>
								</label>
							</div>
							<div class="dfCol">
								<label for="df_4">
									<span class="title">捐款類別<sup>*</sup></span> 
									<span class="content"> 
										<div class="df_4radio"> 
											<input type="radio" value="single" name="df_4[]" id="df_41"><label for="df_41">單次扣款</label>
											<input type="radio" value="monthly" name="df_4[]" id="df_42"><label for="df_42">每月定額扣款</label>
										</div>
									</span>
								</label>
							</div>
							<div class="dfCol">
								<label for="df_5">
									<span class="title">捐款方式<sup>*</sup></span> 
									<span class="content"> 
										<div class="df_5radio"> 
											<input type="radio" value="linepay" name="df_5[]" id="df_51"><label for="df_51">LINE Pay</label>
											<input type="radio" value="atm" name="df_5[]" id="df_52"><label for="df_52">ATM轉帳</label>
											<input type="radio" value="cv" name="df_5[]" id="df_53"><label for="df_53">超商條碼捐款</label>
											<input type="radio" value="credit" name="df_5[]" id="df_54"><label for="df_54">信用卡</label>
										</div>
									</span>
								</label>
							</div>
							<div class="dfCol">
								<label for="df_6">
									<span class="title">信用卡別<sup>*</sup></span>
									<span class="content"> 
										<select name="creditType">
											<option value="visa">VISA</option>
											<option value="jcb">JCB</option>
											<option value="master">MASTER</option>
										</select>
										<div class="creditDate">
											有效期限
											<select name="cdYear" id=""><?php for ($i = date('Y'); $i <= date('Y')+10; $i++) { echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>年/<select name="cdMonth" id="cmonth"><?php for ( $i = 1; $i <= 1+11; $i++ ) { echo '<option value="'. $i .'">'.$i.'</option>'; }?></select>月
										</div>
									</span>
								</label>
							</div>
							<div class="dfNotice">
								<ul class="dfn">
									<li>定期定額捐款將於每月的10號或25號進行請款，遇假日將順延。</li>
									<li>定期定額捐款終止日為卡效期到期日，若需異動資料煩請來電或來信告知。</li>
									<li>每一筆捐款手續費均由勵馨支付。</li>
									<li>本系統接受最低捐款金額為100元台幣，低於此金額建議採現金捐款方式。</li>
									<li>贈品如需另寄請於備註欄告知</li>
								</ul> 
							</div>
							<div class="dfOtherDonate">沒有您可以使用的捐款方式嗎?<a href="javascript:void(0);">查看更多捐款方式</a><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.08643L6 6.08643L1 11.0864" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
						</div>
					</div> 
					<?php 
						// ==================================================================================== 捐款付費資料 End ============ 
						// ==================================================================================== 捐款人基本資料 Start ============ 
					?>
					<div class="personalInfo">
						<div class="piTitleContainer">
							<?php echo (new Dev)->sectionTitle('null', '捐款人基本資料',); ?>
							<div class="pitBtns">
								<div class="pb active" data-type="personal">個人捐款</div>
								<div class="pb" data-type="enterprise">企業捐款</div>
							</div>
						</div>
						<?php // ==================================================================================== 個人捐款 Start ============ ?>
						<div class="personalFieldContainer active">
							<div class="pfCol">
								<label for="name">
									<span class="title">姓名<sup>*</sup></span>
									<span class="content"> 
										<input type="text" name="fullname">
									</span>
									<span class="notice">請填寫真實姓名</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="nation">
									<span class="title">國籍別</span> 
									<span class="content">
										<div class="pf_1radio"> 
											<input type="radio" value="tw" name="pf_1[]" id="pf_11"><label for="pf_11">本國籍</label>
											<input type="radio" value="oversea" name="pf_1[]" id="pf_12"><label for="pf_12">外國籍</label> 
										</div>
									</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="id">
									<span class="title">身分證<sup>*</sup></span>
									<span class="content">
										<input type="text" name="id"> 
									</span>
									<span class="notice">境外人士請填寫護照號碼(Passport No.)或英文 ID</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="email">
									<span class="title">E-mail<sup>*</sup></span>
									<span class="content">
										<input type="email" name="email">
									</span>
									<span class="notice"></span>
								</label>
							</div>
							<div class="pfCol">
								<label for="gender">
									<span class="title">性別<sup>*</sup></span> 
									<span class="content"> 
										<div class="pf_2radio"> 
											<input type="radio" value="male" name="pf_2[]" id="pf_21"><label for="pf_21">男</label>
											<input type="radio" value="female" name="pf_2[]" id="pf_22"><label for="pf_22">女</label> 
											<input type="radio" value="other" name="pf_2[]" id="pf_23"><label for="pf_23">開放填寫<input type="text" name="pf_2other"></label>
											<input type="radio" value="no" name="pf_2[]" id="pf_24"><label for="pf_24">不勾選</label> 
										</div>
									</span> 
									<span class="notice">請依照您自我認同的性別填寫即可。</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="birth">
									<span class="title">出生年月日</span>
									<span class="content"> 
										<div id="birthContainer"></div>
									</span>
									<span class="notice"></span>
								</label>
							</div>
							<div class="pfCol">
								<label for="mobile">
									<span class="title">行動電話<sup>*</sup></span>
									<span class="content"> 
										<input type="text" name="mobile">
									</span>
									<span class="notice">範例：0910123456</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="phoneHome">
									<span class="title">聯絡電話（Ｈ）<sup>*</sup></span>
									<span class="content"> 
										<input type="text" name="phoneHome">
									</span>
									<span class="notice">範例：02-89115595</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="phoneOffice">
									<span class="title">聯絡電話（Ｏ）<sup>*</sup></span>
									<span class="content"> 
										<input type="text" name="phoneOffice">
									</span>
									<span class="notice">範例：02-89115595</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="address">
									<span class="title">聯絡地址<sup>*</sup></span>
									<span class="content"> 
										<div class="addThirdContainer">
											<div class="at"></div> 
											<input type="text" name="address"> 
										</div>
									</span>
									<span class="notice">範例：路街樓號</span>
								</label>
							</div>
							<div class="pfCol">
								<span class="createAccount">
									<input type="checkbox" value="create" name="create" id="create"><label for="create">建立帳號？</label>
								</span>
							</div>
							<div class="pfCol">
								<label for="password">
									<span class="title">建立帳號密碼<sup>*</sup></span>
									<span class="content"> 
										<input type="password" name="password">
									</span>
									<span class="notice"></span>
								</label>
							</div>
						</div>
						<?php 
							// ==================================================================================== 個人捐款 Start ============ 
							// ==================================================================================== 企業捐款 Start ============ 
						?>
						<div class="enterpriseFieldContainer">
							<div class="pfCol">
								<label for="companyName">
									<span class="title">公司名稱<sup>*</sup></span>
									<span class="content"> 
										<input type="text" name="companyName">
									</span>
									<span class="notice">請填寫真實姓名</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="contactName">
									<span class="title">聯絡人姓名<sup>*</sup></span>
									<span class="content"> 
										<input type="text" name="contactName">
									</span>
									<span class="notice">請填寫真實姓名</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="companyNum">
									<span class="title">統一編號<sup>*</sup></span>
									<span class="content"> 
										<input type="text" name="companyNum">
									</span>
									<span class="notice"></span>
								</label>
							</div>
							<div class="pfCol">
								<label for="companyEmail">
									<span class="title">E-mail<sup>*</sup></span>
									<span class="content"> 
										<input type="email" name="companyEmail">
									</span>
									<span class="notice"></span>
								</label>
							</div>
							<div class="pfCol">
								<label for="companyMobile">
									<span class="title">行動電話</span>
									<span class="content"> 
										<input type="text" name="companyMobile">
									</span>
									<span class="notice">範例：0910123456</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="companyTel">
									<span class="title">公司電話+分機</span>
									<span class="content"> 
										<input type="text" name="companyTel">
									</span>
									<span class="notice">範例：02-89115595#22</span>
								</label>
							</div>
							<div class="pfCol">
								<label for="companyAdd">
									<span class="title">公司地址</span>
									<span class="content"> 
										<div class="addThirdContainer">
											<div class="at"></div> 
											<input type="text" name="companyAdd"> 
										</div>
									</span>
									<span class="notice">範例：路街樓號</span>
								</label>
							</div>

						</div>
						<?php // ==================================================================================== 企業捐款 End ============ ?>
					</div> 
					<?php 
						// ==================================================================================== 捐款人基本資料 End ============ 
						// ==================================================================================== 捐款收據資訊 Start ============ 
					?>
					<div class="invoiceContainer">
						<div class="ivTitleContainer">
							<?php echo (new Dev)->sectionTitle('null', '捐款收據資訊',); ?>
							<span class="subtitle">本會將開立捐款收據給您，該收據可扣抵所得稅，以利後續報稅使用</span>
						</div>
						<?php // ==================================================================================== 個人捐款收據資訊 Start ============ ?>
						<div class="personalFieldContainer active">
							<div class="icCol">
								<label for="invoiceTitle">
									<span class="title">收據抬頭</span>
									<span class="content"><input type="text" name="invoiceTitle"></span>
									<span class="notice">
										<div class="same" data-type="name">同捐款人姓名</div>
									</span>
								</label>
							</div>
							<div class="icCol">
								<label for="invoiceID">
									<span class="title">身份證</span>
									<span class="content"><input type="text" name="invoiceID"></span>
									<span class="notice">
										<div class="same" data-type="id">同捐款人身分證</div>
									</span>
								</label>
							</div>
							<div class="icCol">
								<label for="taxData">
									<span class="title">捐款資料上傳國稅局</span> 
									<span class="content">
										<div class="ic_1radio"> 
											<input type="radio" value="yes" name="taxData[]" id="ic_11"><label for="ic_11">是</label>
											<input type="radio" value="no" name="taxData[]" id="ic_12"><label for="ic_12">不上傳</label> 
										</div>
									</span>
								</label>
							</div>
							<div class="icCol">
								<label for="taxDataSend">
									<span class="title">捐款收據寄發方式<sup>*</sup></span> 
									<span class="content">
										<div class="ic_2radio"> 
											<input type="radio" value="no" name="taxDataSend[]" id="ic_211"><label for="ic_211">免寄收據</label>
											<input type="radio" value="year" name="taxDataSend[]" id="ic_222"><label for="ic_222">年度收據</label> 
											<input type="radio" value="single" name="taxDataSend[]" id="ic_233"><label for="ic_233">單次收據</label> 
										</div>
									</span>
								</label>
							</div>
							<div class="icCol">
								<label for="taxDataOpen">
									<span class="title">公開徵信錄<sup>*</sup></span> 
									<span class="content">
										<div class="ic_2radio"> 
											<input type="radio" value="yes" name="taxDataOpen[]" id="ic_311"><label for="ic_311">公開</label>
											<input type="radio" value="no" name="taxDataOpen[]" id="ic_322"><label for="ic_322">不同意公開</label> 
											<input type="radio" value="other" name="taxDataOpen[]" id="ic_333"><label for="ic_333">徵信名稱<input type="text" value="愛馨人" name="ic_name"></label> 
										</div>
										<div class="hint">依據「財團法人法」第25條規定，除捐款者事先表示反對外，財團法人勵馨社會福利事業基金會需主動公開捐贈者捐款相關資料。若您不希望公開您的資訊，煩請選擇「不同意公開」，勵馨基金會將以「愛馨人」名稱為您徵信。</div>
									</span>
								</label>
							</div>
							<div class="icCol">
								<label for="note">
									<span class="title">備註<sup>*</sup></span> 
									<span class="content">
										<textarea name="note" rows="16"></textarea> 
									</span>
								</label>
							</div>
						</div>
						<?php 
							// ==================================================================================== 個人捐款收據資訊 Start ============ 
							// ==================================================================================== 企業捐款收據資訊 Start ============ 
						?>
						<div class="enterpriseFieldContainer">
							<div class="icCol">
								<label for="ciTitle">
									<span class="title">收據抬頭(公司名稱)<sup>*</sup></span>
									<span class="content"><input type="text" name="ciTitle"></span>
									<span class="notice"></span>
								</label>
							</div>
							<div class="icCol">
								<label for="ciID">
									<span class="title">統一編號<sup>*</sup></span>
									<span class="content"><input type="text" name="ciID"></span>
									<span class="notice"></span>
								</label>
							</div>
							<div class="icCol">
								<label for="taxDataSend">
									<span class="title">捐款收據寄發方式<sup>*</sup></span> 
									<span class="content">
										<div class="ic_2radio">  
											<input type="radio" value="year" name="taxDataSend[]" id="ic_22"><label for="ic_22">年度收據</label> 
											<input type="radio" value="single" name="taxDataSend[]" id="ic_23"><label for="ic_23">單次收據</label> 
										</div>
									</span>
								</label>
							</div>
							<div class="icCol">
								<label for="taxDataOpen">
									<span class="title">公開徵信錄<sup>*</sup></span> 
									<span class="content">
										<div class="ic_2radio"> 
											<input type="radio" value="yes" name="taxDataOpen[]" id="ic_31"><label for="ic_31">公開</label>
											<input type="radio" value="no" name="taxDataOpen[]" id="ic_32"><label for="ic_32">不同意公開</label> 
											<input type="radio" value="other" name="taxDataOpen[]" id="ic_33"><label for="ic_33">徵信名稱<input type="text" value="愛馨人" name="ic_name"></label> 
										</div>
										<div class="hint">依據「財團法人法」第25條規定，除捐款者事先表示反對外，財團法人勵馨社會福利事業基金會需主動公開捐贈者捐款相關資料。若您不希望公開您的資訊，煩請選擇「不同意公開」，勵馨基金會將以「愛馨人」名稱為您徵信。</div>
									</span>
								</label>
							</div>
							<div class="icCol">
								<label for="note">
									<span class="title">備註<sup>*</sup></span> 
									<span class="content">
										<textarea name="note" rows="16"></textarea> 
									</span>
								</label>
							</div>
						</div>
						<?php // ==================================================================================== 企業捐款收據資訊 End ============ ?>
					</div>
					<?php // ==================================================================================== 相關條款 Start ============ ?>
					<div class="acceptContainer">
						<div class="acInnerContainer">感謝您的愛心捐款，財團法人勵馨社會福利事業基金會向您取得之個人資料，包含個人姓名、電話、信用卡及電子郵件地址等，將僅限使用於本會捐款服務與管理、募款徵信、會務活動等使用。
	<br>本會遵守個人資料保護法與公益勸募條例之規定，妥善保護您的個人資訊。<br>於此前提下，您同意財團法人勵馨社會福利事業基金會得於法律許可之範圍內處理及利用相關資料以提供資訊或服務，而您可依法得就您提供的個人資料向本會請求查詢、閱覽、提供複本、補充或更正、停止及刪除。<br>各項通知服務、相關訊息之停止寄送，可透過訊息內容提供之取消訂閱連結通知。您可於上班時間聯繫機構承辦人。
						</div>
						<div class="termsAccept">
							<input type="checkbox" name="accpect" id="accpect"><label for="accpect">本人確已閱讀並瞭解上述告知事項，並授權貴會於所列目的之必要合理範圍內，蒐集、處理及利用本人之個人資料。*</label>
						</div>
					</div>
					<?php // ==================================================================================== 相關條款 End ============ ?> 
				</form>
			</div>
		</div>
		<?php // ==================================================================================== 捐款表單 階段二 ============ 確認捐款資料 ?> 
		<div class="donateForm Step2">
			<div class="confirmDonateDataContainer">
				<div class="cddContainer">
					<?php echo (new Dev)->sectionTitle('null', '確認捐款資料',); ?>
					<div class="cddItemContainer">
						<div class="cddItem">
							<span class="title">捐款用途</span>
							<span class="content">借我你的光</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款金額</span>
							<span class="content">新台幣 100 元</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款類別</span>
							<span class="content">單次扣款/一般信用卡</span>
						</div>
						<div class="cddItem">
							<span class="title">收據抬頭</span>
							<span class="content">林OO</span>
						</div>
						<div class="cddItem">
							<span class="title">身分證</span>
							<span class="content">H123456789</span>
						</div>
						<div class="cddItem">
							<span class="title">E-mail</span>
							<span class="content">Abraham.Hermiston85@hotmail.com</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php // ==================================================================================== 捐款表單 階段三 ============  ?> 
		<div class="donateForm Step3">
			<div class="paymentConfirmContainer">
				<div class="pcInfo">
					<?php echo (new Dev)->sectionTitle('null', '付款資訊',); ?>
					<div class="inner">我是假文架假字我是假文架假字我是假文架假字，我是假文架假字我是假文架假字我是假文架假字，我是假文架假字我是假文架假字我是假文架假字，我是假文架假字我是假文架假字我是假文架假字，我是假文架假字我是假文架假字我是假文架假字，我是假文架假字我是假文架假字我是假文架假字，我是假文架假字我是假文架假字我是假文架假字。</div>
					<div class="pcInfoBtn"><span>線上刷卡付款</span></div>		
				</div>
				<div class="pcOrderInfo">
					<?php echo (new Dev)->sectionTitle('null', '捐款單資訊',); ?>
					<div class="cddItemContainer">
						<div class="cddItem">
							<span class="title">捐款日期</span>
							<span class="content">2021-10-10</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款單號</span>
							<span class="content">354093782035</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款金額</span>
							<span class="content">新台幣 100 元</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款類別</span>
							<span class="content">單次扣款/一般信用卡</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款用途</span>
							<span class="content">借我你的光</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款人姓名</span>
							<span class="content">林OO</span>
						</div>
						<div class="cddItem">
							<span class="title">捐款人電子信箱</span>
							<span class="content">Abra*******miston85@ho****.com</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php // ==================================================================================== 捐款表單 階段按鈕 ============ ?> 
		<div class="stepBtnContainer">
			<div class="next" data-index="1">下一步</div>
		</div>

	</div>
</div>
<?php
get_footer();
jQuery(document).ready(function($) {
	let ajaxUrl = 'http://goh.designhu-demo.com/wp-admin/admin-ajax.php';
 
	
 
	// ============================================= ＲＷＤ選單
 
	
	
	// ============================================= 側邊捐款, 分享
	$('.sfTitle').click(function(){
		$(this).parents('.sf').toggleClass('active');
	});
	
	
	// ============================================= 文章次選單 
	$('.newNavContainer > .nnItem').click(function(){
		//e.preventDefault();
		$('.nnItem.active').removeClass('active');
		$(this).addClass('active');
	});
	
	
	// ============================================== 叢書 
	$('.publicationsContainer > .postGrid').click(function(){
		let postid = $(this).attr('data-id');
		$.ajax({
			type: 'POST',
			url: ajaxUrl,
			data: {
				action: 'getBook',
				post_id: postid, 
			},
			success: function(response){
				$('#modal-container').removeAttr('class').addClass('active');
				$('body').addClass('modal-active');
				$('#modal-container').click(function(){
					$(this).addClass('out');
					$('body').removeClass('modal-active');
				});
				$('div#modal-container .modal').html(response);
				console.log(response);
				
			}
		});
	});
	
	$('.publicationsContainer').masonry({
		// options 
		itemSelector: '.postGrid', 
		gutter: 30,
		percentPosition: true
	});
	 
 	$('.loadMore').click(function(){
		let data = {
			'action': 'loadMoreBook', 
			'page': loadMoreBook.current_page,
			'query': loadMoreBook.posts,
		} 
		$.ajax({
			url: ajaxUrl,
			type: 'POST',
			data: data,
			success: function(response, textStatus){
				if ( textStatus == 'success' ) {
					$('.publicationsContainer').append( response ).masonry( 'appended', response );
					loadMoreBook.current_page++;
				}
				if ( loadMoreBook.current_page == loadMoreBook.max_page ) {
					$('.loadMoreContainer').hide();
				} 
				
			}, 
			complete: function(response){ 
				setTimeout(function () {
					$('.publicationsContainer').masonry('reloadItems');
					$('.publicationsContainer').masonry();
				}, 100);
			}
		}); 
	});

	
	// ============================================= 常見問題
	$('.fcItem').click(function(){
		let status = $(this).attr('data-status'); 
		
		if ( $(this).hasClass('hasChild') ) { 
			if ( status == 'open' ) {
				$(this).attr('data-status', 'close');
				$(this).next('.fcItemSubContainer').hide();
			} else {
				$(this).attr('data-status', 'open');
				$(this).next('.fcItemSubContainer').show();
			}
		} else {
			if ( status == 'open' ) {
				$(this).attr('data-status', 'close');
				$(this).find('.content').hide();
			} else {
				$(this).attr('data-status', 'open');
				$(this).find('.content').show();
			}
		} 
		
	});

	
	// ============================================= 分所 
	$('.biSlide').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<div class="prev"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="white"/><path d="M28 15L18 25L28 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="next"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="25" transform="matrix(-1 0 0 1 25 25)" fill="white"/><path d="M22 15L32 25L22 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
	});
 
	// ============================================= 機構外展服務
	$('.osContainer').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<div class="prev"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="white"/><path d="M28 15L18 25L28 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="next"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="25" transform="matrix(-1 0 0 1 25 25)" fill="white"/><path d="M22 15L32 25L22 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		  responsive: [
			  {
				  breakpoint: 1024,
				  settings: {
					  slidesToShow: 3,
					  slidesToScroll: 3,
					  infinite: true,
				  }
			  },
			  {
				  breakpoint: 768,
				  settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
				  }
			  }
		  ]
	});
	
	// ============================================= 分所消息
	$('.container.bn').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<div class="prev"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="white"/><path d="M28 15L18 25L28 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="next"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="25" transform="matrix(-1 0 0 1 25 25)" fill="white"/><path d="M22 15L32 25L22 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		 responsive: [
			  {
				  breakpoint: 1024,
				  settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1,
					  infinite: true,
				  }
			  },
			  {
				  breakpoint: 768,
				  settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
				  }
			  }
		  ]
	});
	
	$('.nscContainer > span').click(function(){
		let contact = $('.contactInfoContainer').offset().top;
		
		$('html,body').animate({
			scrollTop: contact - 50
		}, 'slow');
	});
	
	$('.serviceObject h1 > span').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 2000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
	
	
	// ============================================= 全台服務分所 
	$('.abNavContainer .abItem').click(function(){
		let id = $(this).attr('data-id');
		$('.abNavContainer .abItem').removeClass('active');
		$(this).addClass('active');
		$.ajax({
			url: ajaxUrl,
			type: 'POST',
			data: {
				action: 'getBranchList',
				id: id,
			},
			success: function(response, textStatus){
				console.log(response)
	  			$('.abContentContainer').html(response);
			},  
		}); 
	});
	window.onload = function(){
		$('.abItem[data-id="96"]').trigger('click');
	}
	
	// ============================================= 關於勵馨 全台據點
	$('.sCol-6 > svg path').click(function(){
		let id = $(this).attr('data-id');
		$.get('http://goh.designhu-demo.com/wp-json/twmap/v1/api/'+id, function(response){
			let title = response['title'];
			let link = response['link'];
			let base = response['base'];
			let baseLength = base.length;
			let last = baseLength -1;
			 console.log(response);
			//console.log(baseLength)
			let html = '';
			if ( link ) {
				html += '<h4>'+title+'<a href="'+link+'" target="_blank">了解更多</a></h4>';  
			} else {
				html += '<h4>'+title+'</h4>'; 
			}
			
			for ( let i = 0; i < baseLength; i++ ) {
				
				//if ( i !== last ) {
					let locationName = base[i]['locationName'];
					let locationLink = base[i]['locationLink'];
					let locations = base[i]['locations']; 
				 	
					if ( locationName !== '家園/庇護中心' ) {
						html += '<div class="baseItem">';
					
						if ( locationLink ) {
							html += '<div class="biTitle">'+locationName+'<a href="'+locationLink+'" target="_blank">機構介紹</a></div>';
						} else {
							html += '<div class="biTitle">'+locationName+'</div>';
						} 
					}
						for ( let o = 0; o < locations.length; o++ ) {
							let add = locations[o]['add'];
							let tel = locations[o]['tel'];
							let title = locations[o]['title'];
							let service = locations[o]['service'];

							if ( add ) {
								html += '<div class="biContent">';
								html += '<span class="add">地址：'+add+'</span>';
								html += '<span class="tel">電話：'+tel+'</span>';
								html += '</div>'; 
							}

						}
						html += '</div>'; 
					
				
					if ( locationName == '家園/庇護中心' ) {
						let locationName = base[i]['locationName'];
						let locations = base[i]['locations']; 

						//console.log(base[i])
						html += '<h4>'+title+'-家園/庇護中心<a href="#">了解安置服務</a></h4>'; 
						html += '<div class="baseItem base">'; 

						for ( let o = 0; o < locations.length; o++ ) {
							let add = locations[o]['add'];
							let tel = locations[o]['tel'];
							let title = locations[o]['title'];
							let service = locations[o]['service'];

							html += '<div class="biContent">';
							html += '<span class="title">'+title+'</span>';
							html += '<span class="service">服務項目：'+service+'</span>'; 
							html += '</div>'; 

						} 
						//console.log(base[i]);
						html += '</div>';
					}
					 
				
			}
			html += '</div>';
			
			$('.baseContainer').html(html);
			
			
		});
	});
	$('path.main.pt').trigger('click');
	
	// ============================================= 最新消息 ＳＬＩＤＥＲ
	$('.newsArchiveSlider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<div class="prev"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="white"/><path d="M28 15L18 25L28 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="next"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="25" transform="matrix(-1 0 0 1 25 25)" fill="white"/><path d="M22 15L32 25L22 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		dots: true,
	});
	
	// ============================================= 愛馨企業
	$('.caringList').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<div class="prev"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="white"/><path d="M28 15L18 25L28 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="next"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="25" transform="matrix(-1 0 0 1 25 25)" fill="white"/><path d="M22 15L32 25L22 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		  responsive: [
			  {
				  breakpoint: 1024,
				  settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1,
					  infinite: true,
				  }
			  },
			  {
				  breakpoint: 768,
				  settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
				  }
			  }
		  ]
	});
	
	// ============================================= 勵馨出版
	$('.publishList').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<div class="prev"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="transparent"/><path d="M28 15L18 25L28 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="next"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="25" transform="matrix(-1 0 0 1 25 25)" fill="transparent"/><path d="M22 15L32 25L22 35" stroke="#E50057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		  responsive: [
			  {
				  breakpoint: 1024,
				  settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1,
					  infinite: true,
				  }
			  },
			  {
				  breakpoint: 768,
				  settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
				  }
			  }
		  ]
	});	
	
	// ============================================= 聯合聲明
	$("div.holder").jPages({
		containerID : "csn",
		perPage: 3, 
        previous    : "＜",
        next        : "＞", 
    });
 
	// ============================================= 捐款
	$('.pitBtns > .pb').click(function(){
		$('.pitBtns > .pb').removeClass('active');
		let nowType = $(this).attr('data-type');
		$(this).addClass('active');
		if ( nowType === 'personal' ) {
			$('.enterpriseFieldContainer').removeClass('active');
			$('.personalFieldContainer').addClass('active');
		} else {
			$('.personalFieldContainer').removeClass('active');
			$('.enterpriseFieldContainer').addClass('active'); 
		}
	});
	
	$('.stepBtnContainer > .next').click(function(){
		let index = parseInt( $(this).attr('data-index') );
		let newone = index + 1;
		$(this).attr('data-index', newone);
		
		if ( newone === 2 ) {
			$('.donateForm').removeClass('active');
			$('.donateForm.Step2').addClass('active');
		} else if ( newone === 3 ) {
			$('.donateForm').removeClass('active');
			$('.donateForm.Step3').addClass('active');
			$(this).remove();
	 	}
		//console.log(newone)
	});
	$('#birthContainer').birthdayPicker({
		maxAge: 100,
		minAge: 0,    
		dateFormat: "middleEndian",
		monthFormat: "number",
		placeholder: false,
		defaultDate: false,
		selectWrapperClass: "bp"
	});	
	$('.at').twzipcode();
 
	// ============================================= 加入勵馨
	$('.locationList > .biItem[data-id="485"]').addClass('active');
	$('.locationList > .biItem').click(function() {
		let id = $(this).attr('data-id');
		$('.locationList > .biItem').removeClass('active');
		$(this).addClass('active'); 
		
		$.get('http://goh.designhu-demo.com/wp-json/twmap/v1/volunteer/' + id, function(response) {
			let title = response['title'];
			let link = response['link'];

			let contact = response['contact'];
			let tel = response['tel'];
			let email = response['email'];

			let service = response['service'];
			let serviceLength = '';
			if ( service != null ) {
				serviceLength = service.length;
			} else {
				serviceLength = 0;
			}
			

			let serviceTime = response['serviceTime'];


			let html = '';


			html += '<h5>' + title + '</h5>';
			html += '<div class="locationInfo">';
			if ( contact != null ) {
				html += '<div class="liItem"><div class="title">志工聯絡人</div><div class="content">' + contact + '</div></div>';
			}
			if ( tel != null ) {
				html += '<div class="liItem"><div class="title">聯絡電話</div><div class="content">' + tel + '</div></div>';
			}
			if ( email != null ) {
				html += '<div class="liItem"><div class="title">報名E-mail</div><div class="content">' + email + '</div></div>';
			} 
			html += '</div>';

			if ( serviceLength != 0 ) {
				html += '<h5>志工服務內容</h5>';
				html += '<div class="locationInfo">';
				for ( let i = 0; i < serviceLength; i++ ) {
					let serviceTitle = service[i]['title'];
					let serviceContent = service[i]['content']; 
					html += '<div class="liItem"><div class="title">' + serviceTitle + '</div><div class="content">' + serviceContent + '</div></div>'; 
				} 
				html += '</div>';
			}

			if ( serviceTime != null ) {
				html += '<h5>志工服務時間</h5>';
				html += '<div class="serviceTime">' + serviceTime + '</div>';
			}



			$('.branchInfoDetail').html(html);


		});
	});
	
	$('.vBtns > .vSB').click(function(){
		$('.gohInfoContainer').toggle();
	});
	
	// ============================================= 國際事務
	$('.wmItem').hover(function(){
		let id = $(this).attr('data-id');
		console.log(id);
		if ( id === 'AGC' ) {
			$('.worldmap').removeClass('anws gnws');
			$('.worldmap').addClass('agc');
		} else if ( id === 'ANWS' ) {
			$('.worldmap').removeClass('agc gnws');
			$('.worldmap').addClass('anws');
		} else if ( id === 'GNWS' ) {
			$('.worldmap').removeClass('agc anws');
			$('.worldmap').addClass('gnws');
		}
	});
	
	$('.tbCol-8 > .inner').hide();
	$('.tbCol-8 > .inner[data-index="0"]').show();
	$('.tbCol-4 > .title[data-index="0"]').addClass('active');
	
	$('.tbCol-4 > .title').click(function(){
		let id = $(this).attr('data-index');

		$('.tbCol-4 > .title').removeClass('active');
		$(this).addClass('active');

		$('.tbCol-8 > .inner').hide();
		$('.tbCol-8 > .inner[data-index="'+id+'"]').show();
	});
	
	$('.toggleItem.acitve > .toggleContentContainer').show();
	
	$('.toggleItem .switchNav > .sn').click(function(){
		let action = $(this).attr('data-action');
		let parent = $(this).parents('.toggleItem').find('.toggleContentContainer');
		let parentIndex = $(this).parents('.toggleItem').attr('data-index');
		console.log( parentIndex + ' ' + action );

		if ( action === 'prev' ) { 
			$('.toggleItem').removeClass('active');
			let newParentIndex = '';
			if ( parentIndex == 1 ) {
				newParentIndex = 1;
			} else {
				newParentIndex = parseInt(parentIndex)-1;
			} 
			$('.toggleItem[data-index="'+newParentIndex+'"]').addClass('active');
		} else {
			$('.toggleItem').removeClass('active');
			let newParentIndex = '';
			if ( parentIndex == 4 ) {
				newParentIndex = 4;
			} else {
				newParentIndex = parseInt(parentIndex)+1;
			} 
			$('.toggleItem[data-index="'+newParentIndex+'"]').addClass('active');
		}
	});
	
	$('.affairsNewsContainer .newsContainer').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<span class="prev"><svg width="23" height="43" viewBox="0 0 23 43" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 1.58594L2 21.5859L22 41.5859" stroke="#E50057" stroke-width="2"/></svg></span>',
		nextArrow: '<span class="next"><svg width="23" height="43" viewBox="0 0 23 43" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 1.58594L21.5 21.5859L1.5 41.5859" stroke="#E50057" stroke-width="2"/></svg></span>',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			}
		]
	});
	
	
});
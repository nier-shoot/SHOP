$(function(){
	
	$('.topmenu ul li').eq(4).mouseover(function(){
		$('.topmenu ul li ul').show();
	})
	$('.topmenu ul li').eq(4).mouseout(function(){
	$('.topmenu ul li ul').hide();
	})

	$('.c33,ul#cate').mouseover(function(){
	$(this).find('.sub').css('display','block');
	});
	$('.c33,ul#cate').mouseout(function(){
	$(this).find('.sub').css('display','none');
	});

	$('.boxgrid').hover(
		function(){
			$(this).find('.boxcaption').stop().animate({right:0},500);
		},function(){
			$(this).find('.boxcaption').stop().animate({right:230},500);
		}
	);

	$('li.select_box').hover(
		function(){
			$(this).find('ul.son_ul').css({display:'block',opciaty:'1'});
		},
		function(){
			$(this).find('ul.son_ul').css({display:'none',opciaty:'0'});
		}
		);


	
		$(window).scroll(function(){
			var num = $(window).scrollTop();//获得滚动条的位置
			if(num>270){
				$('.list_filter').addClass('filter_scroll');
			}else{
				$('.list_filter').removeClass('filter_scroll');
			}
		})
	$('div.list_grid ul li').hover(
		function(){
			$(this).find('.front').css('display','none');
			$(this).find('.back').css('display','inline');
		},
		function(){
			$(this).find('.front').css('display','inline');
			$(this).find('.back').css('display','none');
		}
		)

// 轮播
  $(function(){
  	 var i=0;
   timer1= setInterval(autorun,3000);
	function autorun(){
		if(i==3){
			i=0;
		$('#widgets').css({left:'-990px'});
		}
		i++;
		var left=-990*i;
		$('#widgets').animate({left:left-990+'px'}, 500);

	}
	$('#widgets').mouseover(function() {
		clearInterval(timer1);
	});
	$('#widgets').mouseout(function() {
		timer1=setInterval(autorun,3000);
	});


	$('.arrow_right').click(function() {
		 clearInterval(timer1);
		 $('#widgets').stop();		 
		 if(i==3){
		 	i=0;
		 	$('#widgets').css({left:'-990px'});
		 }
		 i++;
		 $('#widgets').animate({left:-990*i-990+'px'}, 500);
		 timer1=setInterval(autorun,3000);
	});
		$('.arrow_left').click(function() {
		 clearInterval(timer1);
		 $('#widgets').stop();		 
		 if(i==0){
		 	i=3;
		 	$('#widgets').css({left:'-3960px'});
		 }
		 
		 $('#widgets').animate({left:-990*i+'px'}, 500);
		 i--;
		 timer1=setInterval(autorun,3000);
	});
  })


  // 内容也轮播
  $(function(){
  	var m=0;
  	timer=setInterval(autorun2,3000);
  
  	$('ul.flex-direction-nav .next').click(function(){	
  		clearInterval(timer);
  		m++;
  		m==6?m=0:m;	
  		$('ul.slides li').stop().eq(m).animate({opacity:1}, 500).siblings().stop().animate({opacity:0}, 500);
  		$('.flex-control-nav li').find('a').removeClass('active');
 		$('.flex-control-nav li').eq(m).find('a').addClass('active');
 		timer=setInterval(autorun2,3000);
 		  	});

  	  	$('ul.flex-direction-nav .prev').click(function(){
  	  		clearInterval(timer);
  	  		m==0?m=6:m;	
  	  		m--;
  		$('ul.slides li').stop().eq(m).animate({opacity:1}, 500).siblings().stop().animate({opacity:0}, 500);
  		$('.flex-control-nav li').find('a').removeClass('active');
 		$('.flex-control-nav li').eq(m).find('a').addClass('active');
 		timer=setInterval(autorun2,3000);
  	});	

  	  	$('.flex-control-nav li').click(function(){
  	  		clearInterval(timer);
  	  		m=$(this).index();
  	  		$('ul.slides li').stop().eq(m).animate({opacity:1}, 500).siblings().stop().animate({opacity:0}, 500);
  	  		$('.flex-control-nav li a').removeClass('active');
  	  		$(this).find('a').addClass('active');
  	  		timer=setInterval(autorun2,3000);
  	  	});
  	  	$('ul.slides').hover(function() {
  	  		clearInterval(timer);
  	  	}, function() {
  	  		timer=setInterval(autorun2,3000);
  	  	});
  	  	function autorun2(){
  	  	m++;
  		m==6?m=0:m;	
  		$('ul.slides li').stop().eq(m).animate({opacity:1}, 500).siblings().stop().animate({opacity:0}, 500);
  		$('.flex-control-nav li').find('a').removeClass('active');
 		$('.flex-control-nav li').eq(m).find('a').addClass('active');
  	  	}
  })


	$('.login').click(function() {
		$('.mask').css('display','block');
		$('.mini-passport-dialog').eq(0).css('display','block').animate({top:'31px'}, 500);
	});

	$('div.close').click(function(){
		$('.mini-passport-dialog').eq(0).animate({top:'-462px'}, 500);
		setTimeout(delay,600);
		function delay(){
		$('.mini-passport-dialog').eq(0).animate({top:'-462px'}, 500);
		$('.mask').css('display','none');
		$('.mini-passport-dialog').eq(0).css('display','none')
		}

	});

		$('.register').click(function() {
		$('.mask').css('display','block');
		$('.mini-passport-dialog').eq(1).css('display','block').animate({top:'173px'}, 500);
	});
	$('div.close').click(function(){
		$('.mini-passport-dialog').eq(1).animate({top:'-462px'}, 500);
		setTimeout(delay,600);
		function delay(){
		$('.mini-passport-dialog').eq(1).animate({top:'-462px'}, 500);
		$('.mask').css('display','none');
		$('.mini-passport-dialog').eq(1).css('display','none');
		$("li[step='one']").css('display','block');
        $("li[step='two']").css('display','none');
		}

	});



	
});

   function	inputCheck(uname){
   	var form=$('form[name=register]');
   	var h=$('[name="uname"]',form).val();
   	 reg=/^\w{3,}@\w+(.\w+)+$/;   
        if(!reg.test(h)){        
             $("#err_uname").html("<b>请输入正确的邮箱地址</b>");   
         }else{   
             $("#err_uname").html("");  
             $('#unametip').html(h);
             $("li[step='one']").css('display','none');
             $("li[step='two']").css('display','block');
   }
   }



  $(function() {
    var $backToTopTxt = "", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
        .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
            $("html, body").animate({ scrollTop: 0 }, 500);
    }), $backToTopFun = function() {
        var st = $(document).scrollTop(), winh = $(window).height();
        (st > 600)? $backToTopEle.show(): $backToTopEle.hide();
        //IE6下的定位
        if (!window.XMLHttpRequest) {
            $backToTopEle.css("top", st + winh - 166);
        }
    };
    $(window).bind("scroll", $backToTopFun);
    $(function() { $backToTopFun(); });
});

  $(function(){
  	$('.pdscriptioncont ul li').click(function(){
  		var i=$(this).index();
  		$('.pdscriptioncont ul li').removeClass('sd01');
  		$('.pdscriptioncont ul li').eq(i).addClass('sd01').siblings().addClass('sd02'); 		
  		switch(i){
  			case 0:
  			$('#mm01,#mm02,#mm03,#mm04,.detail_split').css({display: 'block'});break;
  			case 1:
  			$('#mm01,#mm02,#mm03,#mm04,.detail_split').css({display: 'none'});
  			$('#mm02').css({display: 'block'});break;
  			case 2:
  			$('#mm01,#mm02,#mm03,#mm04,.detail_split').css({display: 'none'});
  			$('#mm03').css({display: 'block'});break;
  			case 3:
  			$('#mm01,#mm02,#mm03,#mm04,.detail_split').css({display: 'none'});
  			$('#mm04').css({display: 'block'});break;
  		 }

  	});

  })


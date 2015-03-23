// JavaScript Document


//=======广告轮播图的实现=======
	var _index=0;//初始化序列
	var _index2=0;//初始化序列
	var _index3=0;//初始化序列
	var timePlay=null;
	$("#Adv .ImgList").eq(0).show().siblings(".ImgList").hide();//最开始显示第一张
	
	$(".xiaotu ul li").hover(function(){
		clearInterval(timePlay);//清处定时播放器
		_index2 = $(this).index();
		$(this).addClass("hover").siblings().removeClass("hover");
		$("#Adv .ImgList").eq(_index2).fadeIn().siblings(".ImgList").fadeOut();//显示图片
		$("ul.button li").eq(_index2).addClass("hover").siblings().removeClass("hover");
	});
	
	

	$("ul.button li").hover(function(){/*鼠标在上面*/ 
		clearInterval(timePlay);//清处定时播放器
		_index=$(this).index();//获取当前li序列号
		//alert(_index);//弹窗
		$(this).addClass("hover").siblings().removeClass("hover");//显示按扭
		//fadeIn  淡入  fadeOut 淡出  
		$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//显示图片
		
		$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
		
	},function(){/*鼠标移开*/
		autoPlay();//启用定时播放器
	});
	
	
	$(".leftbutton .btimg").click(function(){
		clearInterval(timePlay);//清处定时播放器
		_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//变成-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//显示按扭
				$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
				$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//显示图片
				 
		}else{_index=-1;/*设置序列号为-1,跳到播放第一张图片*/}	
	},function(){/*鼠标移开*/
		autoPlay();//启用定时播放器
	});
	
	$(".rightbutton .btimg").click(function(){
		clearInterval(timePlay);//清处定时播放器
		_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//变成-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//显示按扭
				$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
				$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//显示图片
				 
		}else{_index=-1;/*设置序列号为-1,跳到播放第一张图片*/}	
	},function(){/*鼠标移开*/
		autoPlay();//启用定时播放器
	});
	
	
	//自动轮播
	//构建自动轮播的函数
	function autoPlay(){
		//alert("sss");
		//设置定时器
		timePlay=setInterval(function(){
			_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//变成-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//显示按扭
				$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
				$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//显示图片
				 
			}else{_index=-1;/*设置序列号为-1,跳到播放第一张图片*/}
		},4000);	
	};
	autoPlay();//调用和执行
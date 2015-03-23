// JavaScript Document


//导航下拉菜单效果
$(".topcont_nav ul li").hover(function(){
	$(this).find(".menu").show();
	$(this).addClass("hover").siblings().removeClass("hover");
},function(){
	$(this).find(".menu").hide();	
	$(this).removerClass("hover");
})

//走进华粮-品牌理念tab标签效果
var _index=0;

$(".linian_bt ul li").hover(function(){
	_index = $(this).index();
	$(this).addClass("hover").siblings().removeClass("hover");
	$(".linian_nr .hide").eq(_index).show().siblings().hide();
	
})


//走进华粮-企业荣誉tab标签效果

var _index2=0;

$(".rongyu_sj ul li").hover(function(){
	_index2 = $(this).index();
	$(this).addClass("hover").siblings().removeClass("hover");
	$(".rongyu_jx .rongyu_jx_list").eq(_index2).show().siblings().hide();
})



//走进华粮-企业荣誉奖牌效果
$(".rongyu_jx .rongyu_jx_list ul li").hover(function(){
		$(this).find("img").stop().animate({"left":"-10px"},500);
	},function(){
		$(this).find("img").stop().animate({"left":0},500);
});


//纹绣项目列表鼠标放上去的效果
$(".nbh .nbh_rightnr li").hover(function(){
	$(this).addClass("hover").siblings().removeClass("hover");	
	$(this).find(".cplist_js22").stop().animate({height:"135px"},200);
	$(this).find(".cplist_js22 p.hh22").css({background:"#ffffff"});
	$(this).find("span.xbt22").css({background:"#6d695a"});
	$(this).find("span.jt22").css({background:"url(../images/shang.png) no-repeat center center #6d695a"});
	$(this).find(".cplist_js22 p.xx22").css({display:"block"});
	
	$(this).find("span.jt44").css({background:"url(../images/shang2.png) no-repeat center center #6d695a"});
	$(this).find(".cplist_js44 p.xx22").css({display:"block"});
	
},function(){
	$(this).removeClass("hover");
	$(this).find(".cplist_js22").stop().animate({height:"40px"},200);
	$(this).find(".cplist_js22 p.hh22").css({background:"#ffffff"});
	$(this).find("span.xbt22").css({background:"#6d695a"});
	$(this).find("span.jt22").css({background:"url(../images/xia.png) no-repeat center center #6d695a"});
	$(this).find(".cplist_js22 p.xx22").css({display:"none"});
	
	$(this).find("span.jt44").css({background:"url(../images/shang2.png) no-repeat center center #6d695a"});
	$(this).find(".cplist_js44 p.xx22").css({display:"none"});

})


//网站地图页面的效果
$(document).ready(function(){
	$(".ditu ul li p").slideDown("slow")						   
})










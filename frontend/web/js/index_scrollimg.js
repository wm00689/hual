// JavaScript Document


//=======����ֲ�ͼ��ʵ��=======
	var _index=0;//��ʼ������
	var _index2=0;//��ʼ������
	var _index3=0;//��ʼ������
	var timePlay=null;
	$("#Adv .ImgList").eq(0).show().siblings(".ImgList").hide();//�ʼ��ʾ��һ��
	
	$(".xiaotu ul li").hover(function(){
		clearInterval(timePlay);//�崦��ʱ������
		_index2 = $(this).index();
		$(this).addClass("hover").siblings().removeClass("hover");
		$("#Adv .ImgList").eq(_index2).fadeIn().siblings(".ImgList").fadeOut();//��ʾͼƬ
		$("ul.button li").eq(_index2).addClass("hover").siblings().removeClass("hover");
	});
	
	

	$("ul.button li").hover(function(){/*���������*/ 
		clearInterval(timePlay);//�崦��ʱ������
		_index=$(this).index();//��ȡ��ǰli���к�
		//alert(_index);//����
		$(this).addClass("hover").siblings().removeClass("hover");//��ʾ��Ť
		//fadeIn  ����  fadeOut ����  
		$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//��ʾͼƬ
		
		$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
		
	},function(){/*����ƿ�*/
		autoPlay();//���ö�ʱ������
	});
	
	
	$(".leftbutton .btimg").click(function(){
		clearInterval(timePlay);//�崦��ʱ������
		_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//���-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//��ʾ��Ť
				$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
				$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//��ʾͼƬ
				 
		}else{_index=-1;/*�������к�Ϊ-1,�������ŵ�һ��ͼƬ*/}	
	},function(){/*����ƿ�*/
		autoPlay();//���ö�ʱ������
	});
	
	$(".rightbutton .btimg").click(function(){
		clearInterval(timePlay);//�崦��ʱ������
		_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//���-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//��ʾ��Ť
				$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
				$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//��ʾͼƬ
				 
		}else{_index=-1;/*�������к�Ϊ-1,�������ŵ�һ��ͼƬ*/}	
	},function(){/*����ƿ�*/
		autoPlay();//���ö�ʱ������
	});
	
	
	//�Զ��ֲ�
	//�����Զ��ֲ��ĺ���
	function autoPlay(){
		//alert("sss");
		//���ö�ʱ��
		timePlay=setInterval(function(){
			_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//���-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//��ʾ��Ť
				$(".xiaotu ul li").eq(_index).addClass("hover").siblings().removeClass("hover");
				$("#Adv .ImgList").eq(_index).fadeIn().siblings(".ImgList").fadeOut();//��ʾͼƬ
				 
			}else{_index=-1;/*�������к�Ϊ-1,�������ŵ�һ��ͼƬ*/}
		},4000);	
	};
	autoPlay();//���ú�ִ��
<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\HualAsset;
use frontend\widgets\column;

/* @var $this \yii\web\View */
/* @var $content string */

HualAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!--顶部logo和导航-->
<div id="toper">
    <div id="topcont">
        <div class="topcont_logo"><img src="/images/logo.png"/></div>
        <div class="topcont_nav">

            <ul>
                <li><a href="#">网站首页</a><img src="/images/arrow.png" /></li>
                <?= Column::widget()?>
               <!-- <li class="style"><a href="#">走进华粮</a><img src="/images/arrow.png" />
                    <div class="menu">
                        <p><a href="#">华粮溯源</a></p>
                        <p><a href="#">团队介绍</a></p>
                        <p><a href="#">企业荣誉</a></p>
                        <p><a href="#">品牌理念</a></p>
                        <p><a href="#">科研创新</a></p>
                        <p><a href="#">集团新闻</a></p>
                        <p><a href="#">媒体报道</a></p>
                    </div>
                </li>
                <li><a href="#">耕织堂</a><img src="/images/arrow.png" />
                    <div class="menu">
                        <p><a href="#">国家政策</a></p>
                        <p><a href="#">世界趋势</a></p>
                        <p><a href="#">心灵鸡汤</a></p>
                    </div>
                </li>
                <li><a href="#">农博会</a><img src="/images/arrow.png" />
                    <div class="menu">
                        <p><a href="#">异地特色</a></p>
                    </div>
                </li>
                <li><a href="#">华粮商道</a><img src="/images/arrow.png" />
                    <div class="menu">
                        <p><a href="#">官方商城</a></p>
                        <p><a href="#">渠道商城</a></p>
                        <p><a href="#">粮站</a></p>
                    </div>
                </li>
                <li><a href="#">华粮联盟</a><img src="/images/arrow.png" />
                    <div class="menu">
                        <p><a href="#">合作客户</a></p>
                        <p><a href="#">联系我们</a></p>
                        <p><a href="#">网站地图</a></p>
                        <p><a href="#">招贤纳士</a></p>
                    </div>
                </li>-->
            </ul>
        </div>
        <div class="topcont_dhlei">
            <div class="lei"><a href="#">简体</a>/<a href="#">繁体</a>/<a href="#">ENGLISH</a></div>
            <div class="dh"><i>400-600-8888</i></div>
        </div>
    </div>

</div>

<!--内容区-->
<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span>走进华粮</span><br />
                Walk into us
            </div>

            <div class="cont_left_list">
                <ul>
                    <li><a href="#">华粮溯源</a></li>
                    <li><a href="#">团队介绍</a></li>
                    <li><a href="#">企业荣誉</a></li>
                    <li><a href="#">品牌理念</a></li>
                    <li><a href="#">科研创新</a></li>
                    <li><a href="#">集团新闻</a></li>
                    <li><a href="#">媒体报道</a></li>
                </ul>
            </div>
            <img src="/images/left_di.png" />
        </div>
        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span>&gt;<span>走进华粮</span></div>
            <div class="hualiang">
                <div class="hualiang_img"><img src="/images/about.jpg" /></div>
                <div class="hualiang_nr">
                    <div class="nr_bt">我们是<span>谁？</span></div>
                    <div class="nr_xiaobt">中国华粮集团有限责任公司</div>
                    <p>中国华粮集团有限公司秉承“善本、归元、循道”的理念，立足三农、服务民生，致力于农林牧副渔等行业，以农业、文化、网络、金融、小镇经济为五大产业方向，是高端大农业产品“标准化”的制定者、实施者。 </p>
                    <p>华粮使命：</p>
                    <p>1、让员工和家人更健康；</p>
                    <p>2、让投资者回报更高；</p>
                    <p>3、让农民耕种快乐、种好地，好种地，地种好；</p>
                    <p>4、奉献“品质、环保、简约、方便、便宜”的好产品；</p>
                    <p>5、让人们体验喜悦和生命的美好；</p>
                    <p>6、为社会贡献一个受人尊敬的企业。</p>
                </div>
                <div class="clear"></div>
                <div style="height:56px;"><p></p></div>
            </div>
            <div class="biaozhi"><img src="/images/jiao2.png" /></div>


        </div>
    </div>
</div>

<!--最底部-->
<div id="footer">
    <p class="footer_list"><a href="#">网站地图</a><a href="#">招贤纳士</a><a href="#">联系我们</a></p>
    <p class="footer_company">@Copyright 2013-2014中�华粮集�有限公司&nbsp;沪ICP备050190号</p>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
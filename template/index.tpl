{%block name="content"%}
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{%$index_title%}</title>
<link rel="stylesheet" href="template/css/bootstrap.css">
<link rel="stylesheet" href="template/css/style.css">
<script src="template/js/jquery-1.11.0.min.js"></script>
<script src="template/js/jquery.glide.js"></script>
<script src="template/js/bootstrap.min.js"></script>
</head>
<body>
<div class="nsqa-navbar-wrapper navbar-wrapper">
  <div class="container">
    <nav class="navbar" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="#">NSQA</a> </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" style="margin-top:40px;">
        <div class="account"><span>Hi，yangyukun!</span><a href="#">注销</a></div>
        <ul class="nav nav-bar nav-pills navbar-right">
          <li class="active"><a href="#">首页</a></li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 公共服务 <span class="caret"></span> </a>
            <ul class="dropdown-menu">
              <li><a href="#">全部</a></li>
              <li><a href="#">用户测试</a></li>
              <li><a href="#">数据测试</a></li>
              <li><a href="#">国际化</a></li>
              <li><a href="#">移动测试</a></li>
              <li><a href="#">API测试</a></li>
              <li><a href="#">其他</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 自有服务 <span class="caret"></span> </a>
            <ul class="dropdown-menu">
              <li><a href="#">NLP</a></li>
              <li><a href="#">WD</a></li>
              <li><a href="#">IDL</a></li>
            </ul>
          </li>
          <li><a href="#">服务注册</a></li>
          <li><a href="#">使用统计</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</div>
<div class="slider">
  <ul class="slides">
    <li class="slide">
      <div class="box" style="background: url(template/images/1.jpg) no-repeat center; background-size:cover;" >
        <div class="container">
          <div class="slider-item">
            <div class="slider-item-title">测试服务资源一站搞定
              </h2>
            </div>
            <div class="slider-item-cont">我们分类整理公司当前优秀测试服务资源，
              让您更方便的查找服务</div>
            <a href="#" class="slider-item-btn">注册资源</a> </div>
        </div>
      </div>
    </li>
    <li class="slide">
      <div class="box" style="background: url(template/images/2.jpg) no-repeat center; background-size:cover;">
        <div class="container">
          <div class="slider-item">
            <div class="slider-item-title">挖掘潜在的用户
              </h2>
            </div>
            <div class="slider-item-cont">有效的推广方式挖掘更多潜在的用户，快速注册、快速审核！</div>
            <a href="#" class="slider-item-btn">注册资源</a> </div>
        </div>
      </div>
    </li>
  </ul>
</div>
<script>
			var glide = $('.slider').glide({
					afterTransition: function() {
						var currentSlide = this.currentSlide;
						console.log(currentSlide);
					}
				}).data('api_glide');

				$(window).on('keyup', function (key) {
					if (key.keyCode === 13) {
						glide.jump(3, console.log('Wooo!'));
					};
				});

				$('.slider-arrow').on('click', function() {
					console.log(glide.current());
				});
		</script> 
<!-- 推荐区域开始 -->
<div class="gray-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="nsqa-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title fc-green"><span class="glyphicon glyphicon-stats"></span> 推荐服务</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
                  <div class="caption">
                    <p class="item-title"><a href="#">反馈分析</a></p>
                    <p class="item-cont">致力于平台运营和监控</p>
                    <p class="item-info">发布于：2014-10-12</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
                  <div class="caption">
                    <p class="item-title"><a href="#">反馈分析</a></p>
                    <p class="item-cont">致力于平台运营和监控</p>
                    <p class="item-info">发布于：2014-10-12</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
                  <div class="caption">
                    <p class="item-title"><a href="#">反馈分析</a></p>
                    <p class="item-cont">致力于平台运营和监控</p>
                    <p class="item-info">发布于：2014-10-12</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="nsqa-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title fc-green"><span class="glyphicon glyphicon-time"></span> 最新动态</h3>
          </div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item"><a href="#">李晓月 发布了 LAMP环境搭建服务</a></li>
              <li class="list-group-item"><a href="#">李晓月 发布了 LAMP环境搭建服务</a></li>
              <li class="list-group-item"><a href="#">李晓月 发布了 LAMP环境搭建服务</a></li>
              <li class="list-group-item"><a href="#">李晓月 发布了 LAMP环境搭建服务</a></li>
              <li class="list-group-item"><a href="#">李晓月 发布了 LAMP环境搭建服务</a></li>
            </ul>
            <div class="total">已经发布了 <b>36</b> 个服务</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 推荐区域开始 -->
<div class="white-wrap">
  <div class="container">
    <div class="nsqa-panel panel panel-default">
      <div class="panel-heading"> <a href="#" class="fr"><span class="glyphicon glyphicon-th-large"></span> 更多服务</a>
        <h3 class="panel-title">数据测试</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="gray-wrap">
  <div class="container">
    <div class="nsqa-panel panel panel-default">
      <div class="panel-heading"> <a href="#" class="fr"><span class="glyphicon glyphicon-th-large"></span> 更多服务</a>
        <h3 class="panel-title">用户测试</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="white-wrap">
  <div class="container">
    <div class="nsqa-panel panel panel-default">
      <div class="panel-heading"> <a href="#" class="fr"><span class="glyphicon glyphicon-th-large"></span> 更多服务</a>
        <h3 class="panel-title">数据测试</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <a href="#"><img src="template/images/demo3x2.jpg" alt="..."></a>
              <div class="caption">
                <p class="item-title"><a href="#">反馈分析</a></p>
                <p class="item-cont">致力于平台运营和监控</p>
                <p class="item-info">发布于：2014-10-12</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <div class="copyright fr">© 2013 NSQA 版权所有</div>
    <div class="link"><a href="#">帮助中心</a> | <a href="#">服务注册</a> | <a href="#">使用统计</a></div>
  </div>
</div>
    <script>
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cdiv style='display:none;' %3E %3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa04bc642fb15cb6b591f8fe5423f1bc2' type='text/javascript'%3E%3C/script%3E"));
    </script>
</body>
</html>
{%/block%}

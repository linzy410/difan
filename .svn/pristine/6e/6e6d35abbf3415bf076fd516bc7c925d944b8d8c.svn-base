<?php include template("html_header");?>
<div id="site-mast" class="site-mast">
  <div class="site-mast__user-nav-w">
    <div class="site-mast__user-nav cf">
      <ul class="mobile-info">
        <li class="site-mast__separator site-mast__separator--left"></li>
        <li class="mobile-info__item"><a class="mobile-info__link" href="#" target="_blank"><i class="icon icon-mobile"></i>手机地方团</a></li>
        <li class="site-mast__separator site-mast__separator--right"></li>
      </ul>
      <ul class="site-mast__user-w">
        <li class="user-info cf" id="J-user-info-w">
		<span class="user-info__moto">上团，要啥有啥</span>
		<?php if($login_user){?>
		欢迎您，<?php if($_SESSION['ali_token']){?>
				<?php echo mb_strimwidth($login_user['realname'],0,10); ?>！
                <?php } else { ?>
				<?php echo mb_strimwidth($login_user['username'],0,10); ?>！
				<?php }?>
		<?php } else { ?>
		<a class="user-info__login" id="J-login" href="/account/login.php">登录</a>
		<a class="user-info__signup" href="/account/signup.php">注册</a>
		<?php }?>
		</li>
        <li class="site-mast__separator site-mast__separator--left"></li>
        <li class="dropdown dropdown--account">
		<a id="J-my-account-toggle" class="dropdown__toggle" href="/order/index.php">
		<span>我的地方</span>
		<i class="tri tri--dropdown"></i>
		<i class="vertical-bar"></i>
		</a>
            <ul id="J-my-account-menu" class="dropdown-menu dropdown-menu--text dropdown-menu--account account-menu">
              <li><a class="dropdown-menu__item first" href="#">我的订单</a></li>
              <li><a class="dropdown-menu__item" href="#">我的评价</a></li>
              <li><a class="dropdown-menu__item" href="#">我的收藏</a></li>
              <li><a class="dropdown-menu__item" href="#">地方余额</a></li>
              <li><a class="dropdown-menu__item" href="#">账户充值</a></li>
              <li><a class="dropdown-menu__item last" href="#">账户设置</a></li>
            </ul>
        </li>
        <li id="J-my-cart" class="dropdown dropdown--cart">
		<a id="J-my-cart-toggle" class="dropdown__toggle" href="#">
		<i class="icon icon-cart"></i>
		<span>购物车<em class="badge">
		<strong class="cart-count">0</strong>件</em></span>
		<i class="tri tri--dropdown"></i>
		<i class="vertical-bar"></i>
		</a>
            <div id="J-my-cart-menu" class="dropdown-menu dropdown-menu--deal dropdown-menu--cart">
              <p class="dropdown-menu--empty" style="display:none">暂时没有商品</p>
			   <div class="dropdown-menu--history" id="J-my-history-menu">
                    <ul>
                      <li class="dropdown-menu__item"> 
					  <a target="_blank" href="#" class="deal-link">
					  <img width="80" height="50" src="" class="deal-cover"></a>
                      <h5 class="deal-title"> <a target="_blank" href="#" class="deal-link">新城区诸葛烤鱼头</a></h5>
                      <a href="#" target="_blank" class="deal-price-w"> <em class="deal-price">¥38</em> <span class="old-price">98</span></a>
					  </li>
					  
					 </ul>
                    <p class="clear" id="J-clear-my-history">
					<a href="javascript:void(0)" class="clear__btn">去结算</a>
					</p>
                  </div>
            </div>
			
        </li>
        <li id="J-site-merchant" class="dropdown">
		<a class="dropdown__toggle dropdown__toggle--merchant">
		<span>我是商家</span>
		<i class="tri tri--dropdown"></i>
		<i class="vertical-bar"></i>
		</a>
            <div class="dropdown-menu dropdown-menu--text dropdown-menu--merchant">
              <ul>
                <li><a class="dropdown-menu__item" href="/biz/index.php">商家中心</a></li>
                <li><a class="dropdown-menu__item" href="#">我想合作</a></li>
                <li><a class="dropdown-menu__item" href="#">商家营销平台</a></li>
              </ul>
            </div>
        </li>
        <li id="J-site-help" class="dropdown">
		<a class="dropdown__toggle" href="#">
		<span>客服</span> <i class="tri tri--dropdown"></i>
		<i class="vertical-bar"></i>
		</a>
            <div class="dropdown-menu dropdown-menu--text dropdown-menu--help">
              <ul class="site-help-info">
                <li><a class="J-selfservice-tab dropdown-menu__item" href="#">申请退款</a></li>
                <li><a class="J-selfservice-tab dropdown-menu__item" href="#">申请退换货</a></li>
                <li><a class="J-selfservice-tab dropdown-menu__item" href="#">查看地方券</a></li>
                <li><a class="J-selfservice-tab dropdown-menu__item" href="#">换绑手机号</a></li>
                <li><a class="dropdown-menu__item" href="#">常见问题</a></li>
              </ul>
            </div>
        </li>
        <li id="J-my-more" class="dropdown dropdown--more dropdown--last">
		<a id="J-my-more-toggle" class="dropdown__toggle dropdown__toggle--my-more" href="#">
		<span>更多</span>
		<i class="tri tri--dropdown"></i>
		<i class="vertical-bar"></i>
		</a>
		
            <div id="J-my-more-menu" class="dropdown-menu dropdown-menu--text dropdown-menu--more">
              <ul>
                <li> <a id="J-subscribe" class="subscribe dropdown-menu__item" href="#"><span></span>邮件订阅</a></li>
                <li> <a class="fav dropdown-menu__item" id="J-favorite" href="javascript:void(0);">收藏地方</a></li>
                <li class="last"> <a class="refer dropdown-menu__item" href="#" target="_blank">邀请好友</a></li>
              </ul>
            </div>
        </li>
        <li id="J-my-more" class="dropdown dropdown--more dropdown--last">
		<a id="J-my-more-toggle" class="dropdown__toggle dropdown__toggle--my-more" href="#">
		<span>关注</span></a>
		</li>
      </ul>
    </div>
  </div>
  <div class="J-banner common-banner common-banner--newtop">
            <div class="common-banner__sheet cf">
                <a href="#" target="_blank" class="common-banner__link">
				<img width="980" height="122" src="/demo/images/banner.png" alt="">
				</a>
            </div>
			</div>
  <div class="yui3-widget mt-slider"></div>
  <div class="site-mast__branding cf">
    <a class="site-logo sp-header-new-hd" href="/">地方团</a>
    <div class="city-info">
      <h2><a class="city-info__name" href="#">天台</a></h2>
      </div>
    <div class="component-search-box">
      <div class="J-search-box search-box">
        <div class="J-search-box__tabs search-box__tabs">
          <div class="search-box__tab J-search-box__tab--deal search-box__tab--current">团购</div>
          <div class="search-box__tab J-search-box__tab--shops ">商家</div>
        </div>
        <form action="" method="get" name="searchForm" class="search-box__form J-search-form" id="searchForm">
          <input class="s-text search-box__input J-search-box__input" type="text" placeholder="请输入商品名称、地址等" />
          <input name="submit" type="submit" class="s-submit search-box__button" value="搜索" hidefocus="true" />
        </form>
        <div class="search-suggest J-search-suggest" style="display:none;">
          <ul class="search-suggest__list J-search-suggest-list">
          </ul>
        </div>
        <div class="J-search-box__hot search-box__hot log-mod-viewed">
          <div class="s-hot" id="J-deal-hot-query">
		  <a class="hot-link " href="#">天台</a>
		  <a class="hot-link " href="#">宾馆</a>
		  <a class="hot-link " href="#">KTV</a>
		  <a class="hot-link "  href="#">电影票</a>
		  <a class="hot-link  last" href="#">蛋糕</a>
		 </div>
          <div class="s-hot" id="J-poi-hot-query" style="display:none">
		  <a class="hot-link " href="#">天台</a>
		  <a class="hot-link " href="#">宾馆</a>
		  <a class="hot-link " href="#">KTV</a>
		  <a class="hot-link " href="#">电影票</a>
		  <a class="hot-link   last" href="#">蛋糕</a>
		 </div>
        </div>
      </div>
    </div>
    <div class="site-commitment">
	<a class="sp-header-new-hd commitment-item commitment-item--retire" href="#" target="_blank"></a>
	<a class="sp-header-new-hd commitment-item commitment-item--free" href="#" target="_blank"></a>
	<a class="sp-header-new-hd commitment-item commitment-item--expire" href="#" target="_blank"></a>
	</div>
  </div>
  <div class="site-mast__site-nav-w">
    <div class="site-mast__site-nav">
      <div class="site-mast__site-nav-inner">
	   <span class="mt-cates" style="float:left">全部分类<b></b></span>
          
		  <div class="cate-nav J-nav__list J-nav__list--present">
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--121 cate-nav__item--has-l2">
                <div class="nav-level1 nav-level1--first">
                  <dl class="nav-level1-inner">
                    <dt><i class="cate-icon cate-121"></i> <a class="nav-level1__label" href="#">美食</a> </dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--122 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl class="nav-level1-inner">
                    <dt> <i class="nav-level2-indication"></i> <a class="nav-level1__label" href="#">酒店</a></dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--123 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl class="nav-level1-inner">
                    <dt><a class="nav-level1__label" href="#">休闲娱乐</a> </dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--7 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl class="nav-level1-inner">
                    <dt><i class="cate-icon cate-7"></i><a class="nav-level1__label" href="#">购物</a></dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--125 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl class="nav-level1-inner">
                    <dt><i class="cate-icon cate-125"></i> <a class="nav-level1__label" href="#">丽人</a></dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--124 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl class="nav-level1-inner">
                    <dt> <i class="cate-icon cate-124"></i> <a href="#" class="nav-level1__label">家装建材</a> </dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--124 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl class="nav-level1-inner">
                    <dt> <i class="cate-icon cate-124"></i> <a href="#" class="nav-level1__label">房产交易</a> </dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--124 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl>
                    <dt> <i class="cate-icon cate-124"></i> <a href="#" class="nav-level1__label">二手车</a> </dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--124 cate-nav__item--has-l2">
                <div class="nav-level1">
                  <dl>
                    <dt> <i class="cate-icon cate-124"></i> <a href="#" class="nav-level1__label">农家乐</a> </dt>
                  </dl>
                  <i class="nav-level2-indication"></i> </div>
              </div>
            </div>
            <div class="J-nav-item">
              <div class="cate-nav__item cate-nav__item--8 cate-nav__item--no-l2">
                <div class="nav-level1">
                  <dl>
                    <dt><a class="nav-level1__label" href="#">抽奖</a><i class="nav-level2-indication"></i></dt>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        <div class="allMenu">
            <ul class="navbar cf">
              <li class="navbar__item-w current"> <a class="navbar__item" href="/"><span class="nav-label">首页</span><i class="vertical-bar"></i></a> </li>
              <li class="navbar__item-w"><a class="navbar__item" href="#"><span class="nav-label">身边团购</span><i class="vertical-bar"></i></a></li>
              <li class="navbar__item-w"><a class="navbar__item" href="/team/index.php"><span class="nav-label">今日新单</span><i class="vertical-bar"></i></a></li>
              <li class="navbar__item-w"><a class="navbar__item" href="/partner/index.php"><span class="nav-label">找商家</span></a></li>
		
		      <li class="sideMenu2">
		      <a style="position:relative;display:inline-block;" title="家装建材" target="_blank" href="#" class="menu"><span>家装建材
		      <img style="position:absolute;background:none;right:0px;top: -5px;" src="/demo/images/hot.gif"></span></a>
	          <a title="房产交易" href="#" class="menu"><span>房产交易</span></a>
		      <a title="二手车" href="#" class="menu"><span>二手车</span></a>
		      <a title="农家乐" href="#" class="menu"><span>农家乐</span></a>
		      </li>
            </ul>
      </div>
	  </div>

    </div>
  </div>
</div>
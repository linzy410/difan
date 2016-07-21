<?php include template("header");?>
    <?php if(option_yes('indexcateteam')){?>
	 <div id="group-filter">
            <div class="filter-by-group-title">按分类:</div>
			<div class="filter-by-group-id">
		    <ul><?php echo current_team_category($group_id); ?></ul>
			</div>
     </div>
	 <?php }?>
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<?php if(is_newbie()){?><div id="sysmsg-guide"><div class="link"><a href="/help/tour.php"></a></div><a id="sysmsg-guide-close" href="javascript:void(0);" class="close">关闭</a></div><?php }?>

<?php if($team['close_time']){?>
<div id="sysmsg-tip" class="sysmsg-tip-deal-close"><div class="sysmsg-tip-top"></div><div class="sysmsg-tip-content"><div class="deal-close"><div class="focus">抱歉，您来晚了，<br />团购已经结束啦。</div><div id="tip-deal-subscribe-body" class="body"><form id="tip-deal-subscribe-form" method="post" action="/subscribe.php" class="validator"><table><tr><td>不想错过明天的团购？立刻订阅每日最新团购信息：&nbsp;</td><td><input type="text" name="email" class="f-text" value="" require="true" datatype="email" /></td><td>&nbsp;<input class="commit" type="submit" value="订阅" /></td></tr></table></form></div></div><span id="sysmsg-tip-close" class="sysmsg-tip-close">关闭</span></div><div class="sysmsg-tip-bottom"></div></div>
<?php }?>

<?php if($order){?>
<div id="sysmsg-tip" ><div class="sysmsg-tip-top"></div><div class="sysmsg-tip-content">您已经下过订单，但还没有付款。<a href="/order/check.php?id=<?php echo $order['id']; ?>">查看订单并付款</a><span id="sysmsg-tip-close" class="sysmsg-tip-close">关闭</span></div><div class="sysmsg-tip-bottom"></div></div><div id="deal-default"> 
<?php }?>

<div id="main">
   <div class="site-fs">
    <div class="site-fs__cell site-fs__cell-small site-fs__cell--hot">
            <h3 class="label"><i></i><span>热门团购</span></h3>
            <div class="filter-strip">
                <ul class="filter-strip__list">
				<li><a href="#">自助餐</a></li>
				<li><a class="hot" href="#">KTV</a></li>
				<li><a class="hot" href="#">电影</a></li>
				<li><a class="hot" href="#">火锅</a></li>
				<li><a href="#">足疗按摩</a></li>
				<li><a class="hot" href="#">江浙菜</a></li>
				<li><a class="hot" href="#">经济型酒店</a></li>
				<li><a href="#">西餐</a></li>
				<li><a href="#">蛋糕</a></li>
				<li><a href="#">烧烤烤肉</a></li>
				<li><a href="#">美发</a></li>
				<li><a href="#">景点郊游</a></li>
				<li><a href="#">摄影写真</a></li>
				<li><a href="#">洗浴/汗蒸</a></li>
				<li><a href="#">日本料理</a></li>
				<li><a href="#">川湘菜</a></li>
                </ul>
            </div>
  </div>    
	       <div class="site-fs__cell  site-fs__cell-small site-fs__cell--geo">
            <h3 class="label"><i></i><span>全部区域</span></h3>
            <div class="filter-strip">
                <a class="filter-strip__all J-geo-more" href="#">更多<span class="tri"></span></a>
                <ul class="filter-strip__list">
				<li><a href="#" class="">椒江区</a></li>
				<li><a href="#" class="">黄岩区</a></li>
				<li><a href="#" class="">路桥区</a></li>
				<li><a href="#" class="">温岭市</a></li>
				<li><a href="#" class="">临海市</a></li>
				<li><a href="#" class="">三门县</a></li>
				<li><a href="#" class="">玉环县</a></li>
				<li><a href="#" class="">天台县</a></li>
				<li><a href="#" class="">仙居县</a></li>
                </ul>
            </div>
	 </div>
           <div class="site-fs__cell  site-fs__cell-small site-fs__cell--area">
            <h3 class="label"><i></i><span>热门商圈</span></h3>
            <div class="filter-strip">
                <ul class="filter-strip__list">
				<li><a href="#">东商务区</a></li>
				<li><a href="#">南城区</a></li>
				<li><a href="#">十字马路</a></li>
				<li><a href="#">黄岩中心城区</a></li>
				<li><a href="#">富仕广场</a></li>
				<li><a href="#">泽国镇</a></li>
				<li><a href="#">临海市区</a></li>
				<li><a href="#">九龙区</a></li>
				<li><a href="#">商业街</a></li>
                </ul>
            </div></div>    
			<div class="site-fs__cell  site-fs__cell-small site-fs__cell--slider">
              <div class="yui3-widget mt-slider">
                <div data-mod="nr" class="reco-sliders-w mt-slider-content">
                  <div class="pre-next"> 
				  <a class="mt-slider-previous sp-slide--previous sp-slide" href="javascript:;" style="opacity:1;"></a>
				  <a class="mt-slider-next sp-slide--next sp-slide" href="javascript:;" style="opacity:1;"></a>	</div>
                  <div class="head ccf">
                    <h2><span class="icon"></span>本周精选</h2>
                    <ul class="trigger-container mt-slider-trigger-container">
                      <li class="mt-slider-trigger"></li>
                      <li class="mt-slider-trigger"></li>
                      <li class="mt-slider-trigger"></li>
                      <li class="mt-slider-trigger"></li>
                      <li class="mt-slider-trigger mt-slider-current-trigger"></li>
                    </ul>
                  </div>
                  <ul class="content mt-slider-sheet-container">
                    <li hidden="" class="cf mt-slider-sheet mt-slider-current-sheet" style="opacity: 0; display: none;">
                      <div class="left">
					  <span class="split-side split-side--left sp-slide--split-side--left sp-slide"></span>
					  <em class="sp-icons--discount discount J-discount  sp-icons" style="">7.8</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="img"></a>
                          <div class="title"><span class="sp-slide--split-line split-line sp-slide"></span>
						  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                          <p class="desc">天台县新城区法华路68号</p>
                        </div>
                        <span class="price">¥39</span></div>
                      <div class="right">
					  <em class="sp-icons--discount discount J-discount  sp-icons" style="">8.5</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="img"></a>
                          <div class="title">
						  <span class="sp-slide--split-line split-line sp-slide"></span>
						  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                              <p class="desc">天台县新城区法华路68号</p>
                        </div>
                        <span class="price">¥8.5</span>
						<span class="split-side split-side--right sp-slide--split-side--right sp-slide"></span>					  </div>
                    </li>
                    <li hidden="" style="opacity: 0; display: none;" class="cf mt-slider-sheet">
                      <div class="left">
					  <span class="split-side split-side--left sp-slide--split-side--left sp-slide"></span>
					  <em class="sp-icons--discount discount J-discount  sp-icons" style="">7.5</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="lazy-img img"></a>
                      <div class="title">
					  <span class="sp-slide--split-line split-line sp-slide"></span>
					  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                      <p class="desc">天台县新城区法华路68号</p>
                      </div>
                        <span class="price">¥37.5</span></div>
                      <div class="right">
					  <em class="sp-icons--discount discount J-discount  sp-icons" style="">7.5</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="lazy-img img"></a>
                      <div class="title">
					  <span class="sp-slide--split-line split-line sp-slide"></span>
					  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                      <p class="desc">天台县新城区法华路68号</p>
                      </div>
                     <span class="price">¥37.5</span>
					 <span class="split-side split-side--right sp-slide--split-side--right sp-slide"></span>					 </div>
                    </li>
                    <li hidden="" style="opacity: 0; display: none;" class="cf mt-slider-sheet">
                      <div class="left">
					  <span class="split-side split-side--left sp-slide--split-side--left sp-slide"></span>
					  <em class="sp-icons--discount discount J-discount  discount-big sp-icons" style="">7</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="lazy-img img"></a>
                      <div class="title">
					  <span class="sp-slide--split-line split-line sp-slide"></span>
					  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                              <p class="desc">天台县新城区法华路68号</p>
                        </div>
                        <span class="price">¥70</span></div>
                      <div class="right">
					  <em class="sp-icons--discount discount J-discount  sp-icons" style="">4.4</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="lazy-img img"></a>
                      <div class="title"><span class="sp-slide--split-line split-line sp-slide"></span>
					  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                              <p class="desc">天台县新城区法华路68号</p>
                        </div>
                        <span class="price">¥69.9</span>
						<span class="split-side split-side--right sp-slide--split-side--right sp-slide"></span>					  </div>
                    </li>
                    <li hidden="" style="opacity: 0; display: none;" class="cf mt-slider-sheet">
                      <div class="left">
					  <span class="split-side split-side--left sp-slide--split-side--left sp-slide"></span>
					  <em class="sp-icons--discount discount J-discount  sp-icons" style="">8.3</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="lazy-img img"></a>
                      <div class="title">
					  <span class="sp-slide--split-line split-line sp-slide"></span>
					  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                              <p class="desc">天台县新城区法华路68号</p>
                        </div>
                        <span class="price">¥49</span></div>
                      <div class="right"><em class="sp-icons--discount discount J-discount  sp-icons" style="">8.6</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="220" src="" class="lazy-img img"></a>
                          <div class="title">
						  <span class="sp-slide--split-line split-line sp-slide"></span>
						  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                              <p class="desc">天台县新城区法华路68号</p>
                        </div>
                        <span class="price">¥32.8</span>
						<span class="split-side split-side--right sp-slide--split-side--right sp-slide"></span>					  </div>
                    </li>
                    <li style="opacity: 1;" class="cf mt-slider-sheet">
                      <div class="left"><em class="sp-icons--discount discount J-discount  sp-icons" style="">4.8</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="221" src="images/1.png" class="lazy-img img"></a>
                      <div class="title">
					  <span class="sp-slide--split-line split-line sp-slide"></span>
					  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                              <p class="desc">天台县新城区法华路68号</p>
                        </div>
                      <span class="price">¥38</span></div>
                      <div class="right"><em class="sp-icons--discount discount J-discount  sp-icons" style="">4.9</em>
					  <a href="#" target="_blank" class="link ccf">
					  <img width="366" height="221" src="images/1.png" class="lazy-img img"></a>
                      <div class="title">
					  <span class="sp-slide--split-line split-line sp-slide"></span>
					  <a href="#" target="_blank" class="xtitle link ccf">新城区诸葛烤鱼头</a>
                              <p class="desc">天台县新城区法华路68号</p>
                        </div>
                        <span class="price">¥38</span>					  </div>
                    </li>
                  </ul>
                </div>
              </div>
  </div>
  </div>
			<div class="site-ms">
			  <h2 class="mall-branding" id="mall-branding"><i></i>团购精选</h2>
			  <div class="mall J-mall">
			    <div class="J-async-deallist--nav">
                  <div class="deal-tile">
				  <a target="_blank" class="deal-tile__cover" href="#">
				  <img width="350" height="211" src="images/2.png" alt="" class="lazy-img">
				  <span class="trade-geo">
				  <span class="geo-title"><i class="geo-title__icon"></i>地址：</span>天台县新城区法华路68号</span>	</a>
                      <h3 class="deal-tile__title">
					  <a target="_blank" title="" class="w-link" href="#">
					  <span class="xtitle">新城区诸葛烤鱼头</span><span class="short-title">源于唐朝，原本是百姓特色菜，后来因为味道好，被引荐入</span></a>
					  </h3>
                    <p class="deal-tile__detail">
					<span class="price num">¥<strong>38</strong></span><span class="value">门店价<del class="num"><span>¥</span>98</del></span>
					</p>
                    <div class="deal-tile__extra">
                      <p class="extra-inner"><span class="sales">参与<strong class="num">242</strong></span>
					  <a target="_blank" class="rate-info" href="#"><span class="rate-info__bar common-rating">
					  <span style="width:94%;" class="rate-stars"></span></span><span class="rate-info__count">45人评价</span></a>
					  </p>
                    </div>
                  </div>
			      <div class="deal-tile deal-tile--even">
				  <a target="_blank" class="deal-tile__cover" href="#">
				  <img width="350" height="214" src="images/2.png" alt="" class="lazy-img">
				  <span class="trade-geo">
				  <span class="geo-title"><i class="geo-title__icon"></i>地址：</span>天台县新城区法华路68号</span>				  </a>
			          <h3 class="deal-tile__title">
					  <a target="_blank" title="" class="w-link" href="#">
					  <span class="xtitle">新城区诸葛烤鱼头</span>
					  <span class="short-title">源于唐朝，原本是百姓特色菜，后来因为味道好，被引荐入</span></a></h3>
			        <p class="deal-tile__detail"><span class="price num">¥<strong>38</strong></span><span class="value">门店价<del class="num"><span>¥</span>98</del>
					</span></p>
			        <div class="deal-tile__extra">
			          <p class="extra-inner">
					  <span class="sales">参与<strong class="num">10611</strong></span>
					  <a target="_blank" class="rate-info" href="#">
					  <span class="rate-info__bar common-rating"><span style="width:94%;" class="rate-stars"></span></span>
					  <span class="rate-info__count">3877人评价</span></a></p>
		            </div>
		          </div>
		        </div>
			    <div class="page-nav-wrapper">
			      <ul class="page-nav">
			        <li class="current"><a>1</a></li>
			        <li><a href="#">2</a></li>
			        <li><a href="#">3</a></li>
			        <li><a href="#">4</a></li>
			        <li><a href="#">5</a></li>
			        <li><a href="#">6</a></li>
			        <li><a href="#">7</a></li>
			        <li class="next"><a href="#">下一页</a></li>
		          </ul>
		        </div>
			   
		      </div>
			  <div class="site-sidebar">
	
    <div class="side-extension top-reco-deals log-mod-viewed">
    <h3>热卖排行榜</h3>
    <div class="side-extension__item">
        <div class="deal-tile deal-tile--reco">
            <img width="198" height="120" src="images/2.png"><span class="deal-rank">1</span>
            <h4 class="deal-tile__title">
            <span class="short-title">新城区诸葛烤鱼头</span></h4>
            <p class="deal-tile__detail">
            <span class="price num">¥<strong>39</strong></span><span>每天296人团购</span>            </p>
        </div>
	  </div>
		<div class="side-extension__item">
        <div class="deal-tile deal-tile--reco">
            <img width="198" height="120" src="images/2.png"><span class="deal-rank">2</span>
            <h4 class="deal-tile__title">
               <span class="short-title">新城区诸葛烤鱼头</span>		    </h4>
            <p class="deal-tile__detail">
                <span class="price num">¥<strong>38</strong></span><span>每天238人团购</span>            </p>
        </div>
		</div>
		<div class="side-extension__item">
        <div class="deal-tile deal-tile--reco">
            <img width="198" height="120" src="images/2.png"><span class="deal-rank">3</span>
            <h4 class="deal-tile__title">
                <a class="w-link" target="_blank" href="#">
				<span class="short-title">新城区诸葛烤鱼头</span></a>            </h4>
            <p class="deal-tile__detail">
                <span class="price num">¥<strong>38</strong></span><span>每天221人团购</span>            </p>
        </div>
		</div>
    </div>
    <div class="side-extension side-extension--history J-side-history">
		<div class="side-extension__item side-extension__item--last log-mod-viewed">
		<h3><a class="clear-history J-clear" href="#">清空</a>最近浏览</h3>
		<ul class="history-list J-history-list">
        <li class="history-list__item  history-list__item--first history-list__item--last">
            <a target="_blank" href="#">
			<img width="80" height="50" src="images/2.png"></a>
            <h5><a target="_blank" href="#">新城区诸葛烤鱼头</a></h5>
            <p><em class="price">¥14</em><del class="old-price">50</del></p>
        </li>
		</ul>
		</div>
		
		</div>
		
        <div hidden="" style="height:129px;display:none;" class="stickyPlugin-fix-placeholder"></div>
		</div>
		</div>
            <div class="component-holy-reco">
		<div class="J-holy-reco holy-reco">
		<div class="content-navbar">
        <ul class="ccf">
                    <li class="J-holy-reco__label current"><a class="tab-item" href="#">城市团购</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">美食团购</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">电影团购</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">酒店团购</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">KTV团购</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">知名品牌</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">电影票</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">热门标签</a></li>
                    <li class="J-holy-reco__label"><a class="tab-item" href="#">今日新单</a></li>
          </ul>
        </div>
        <div class="J-holy-reco__content holy-reco__content">
                <a href="#">北京团购</a>
                <a href="#">深圳团购</a>
                <a href="#">上海团购</a>
                <a href="#">西安团购</a>
                <a href="#">广州团购</a>
                <a href="#">成都团购</a>
                <a href="#">武汉团购</a>
                <a href="#">杭州团购</a>
                <a href="#">郑州团购</a>
                <a href="#">南京团购</a>
                <a href="#">天津团购</a>
                <a href="#">重庆团购</a>
                <a href="#">沈阳团购</a>
                <a href="#">合肥团购</a>
                <a href="#">济南团购</a>
                <a href="#">哈尔滨团购</a>
                <a href="#">长沙团购</a>
                <a href="#">东莞团购</a>
                <a href="#">大连团购</a>
                <a href="#">福州团购</a>
                <a href="#">石家庄团购</a>
                <a href="#">呼和浩特团购</a>
                <a href="#">台州团购</a>
                <a href="#">太原团购</a>
                <a href="#">苏州团购</a>
                <a href="#">长春团购</a>
                <a href="#">青岛团购</a>
                <a href="#">常州团购</a>
          </div>
          <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">北京美食团购</a>
                <a href="#">深圳美食团购</a>
                <a href="#">上海美食团购</a>
                <a href="#">西安美食团购</a>
                <a href="#">广州美食团购</a>
                <a href="#">成都美食团购</a>
                <a href="#">武汉美食团购</a>
                <a href="#">杭州美食团购</a>
                <a href="#">郑州美食团购</a>
                <a href="#">南京美食团购</a>
                <a href="#">天津美食团购</a>
                <a href="#">重庆美食团购</a>
                <a href="#">沈阳美食团购</a>
                <a href="#">合肥美食团购</a>
                <a href="#">济南美食团购</a>
                <a href="#">哈尔滨美食团购</a>
                <a href="#">长沙美食团购</a>
                <a href="#">东莞美食团购</a>
                <a href="#">大连美食团购</a>
                <a href="#">福州美食团购</a>
                <a href="#">石家庄美食团购</a>
                <a href="#">呼和浩特美食团购</a>
                <a href="#">台州美食团购</a>
                <a href="#">太原美食团购</a>
                <a href="#">苏州美食团购</a>
                <a href="#">长春美食团购</a>
                <a href="#">青岛美食团购</a>
                <a href="#">常州美食团购</a>
          </div>
            <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">北京电影团购</a>
                <a href="#">深圳电影团购</a>
                <a href="#">上海电影团购</a>
                <a href="#">西安电影团购</a>
                <a href="#">广州电影团购</a>
                <a href="#">成都电影团购</a>
                <a href="#">武汉电影团购</a>
                <a href="#">杭州电影团购</a>
                <a href="#">郑州电影团购</a>
                <a href="#">南京电影团购</a>
                <a href="#">天津电影团购</a>
                <a href="#">重庆电影团购</a>
                <a href="#">沈阳电影团购</a>
                <a href="#">合肥电影团购</a>
                <a href="#">济南电影团购</a>
                <a href="#">哈尔滨电影团购</a>
                <a href="#">长沙电影团购</a>
                <a href="#">东莞电影团购</a>
                <a href="#">大连电影团购</a>
                <a href="#">福州电影团购</a>
                <a href="#">石家庄电影团购</a>
                <a href="#">呼和浩特电影团购</a>
                <a href="#">台州电影团购</a>
                <a href="#">太原电影团购</a>
                <a href="#">苏州电影团购</a>
                <a href="#">长春电影团购</a>
                <a href="#">青岛电影团购</a>
                <a href="#">常州电影团购</a>
          </div>
                <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">北京酒店团购</a>
                <a href="#">深圳酒店团购</a>
                <a href="#">上海酒店团购</a>
                <a href="#">西安酒店团购</a>
                <a href="#">广州酒店团购</a>
                <a href="#">成都酒店团购</a>
                <a href="#">武汉酒店团购</a>
                <a href="#">杭州酒店团购</a>
                <a href="#">郑州酒店团购</a>
                <a href="#">南京酒店团购</a>
                <a href="#">天津酒店团购</a>
                <a href="#">重庆酒店团购</a>
                <a href="#">沈阳酒店团购</a>
                <a href="#">合肥酒店团购</a>
                <a href="#">济南酒店团购</a>
                <a href="#">哈尔滨酒店团购</a>
                <a href="#">长沙酒店团购</a>
                <a href="#">东莞酒店团购</a>
                <a href="#">大连酒店团购</a>
                <a href="#">福州酒店团购</a>
                <a href="#">石家庄酒店团购</a>
                <a href="#">呼和浩特酒店团购</a>
                <a href="#">台州酒店团购</a>
                <a href="#">太原酒店团购</a>
                <a href="#">苏州酒店团购</a>
                <a href="#">长春酒店团购</a>
                <a href="#">青岛酒店团购</a>
                <a href="#">常州酒店团购</a>
            </div>
             <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">北京KTV团购</a>
                <a href="#">深圳KTV团购</a>
                <a href="#">上海KTV团购</a>
                <a href="#">西安KTV团购</a>
                <a href="#">广州KTV团购</a>
                <a href="#">成都KTV团购</a>
                <a href="#">武汉KTV团购</a>
                <a href="#">杭州KTV团购</a>
                <a href="#">郑州KTV团购</a>
                <a href="#">南京KTV团购</a>
                <a href="#">天津KTV团购</a>
                <a href="#">重庆KTV团购</a>
                <a href="#">沈阳KTV团购</a>
                <a href="#">合肥KTV团购</a>
                <a href="#">济南KTV团购</a>
                <a href="#">哈尔滨KTV团购</a>
                <a href="#">长沙KTV团购</a>
                <a href="#">东莞KTV团购</a>
                <a href="#">大连KTV团购</a>
                <a href="#">福州KTV团购</a>
                <a href="#">石家庄KTV团购</a>
                <a href="#">呼和浩特KTV团购</a>
                <a href="#">台州KTV团购</a>
                <a href="#">太原KTV团购</a>
                <a href="#">苏州KTV团购</a>
                <a href="#">长春KTV团购</a>
                <a href="#">青岛KTV团购</a>
                <a href="#">常州KTV团购</a>
            </div>
            <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">保利国际影城团购</a>
                <a href="#">金逸国际影城团购</a>
                <a href="#">万达影城团购</a>
                <a href="#">中影国际影城团购</a>
                <a href="#">嘉华国际影城团购</a>
                <a href="#">华元电影大世界团购</a>
                <a href="#">戈拿旺巴西烤肉团购</a>
                <a href="#">飞扬影城团购</a>
                <a href="#">米乐星KTV团购</a>
                <a href="#">金汉斯团购</a>
                <a href="#">酷党KTV团购</a>
                <a href="#">秦岭欢乐世界团购</a>
                <a href="#">天河电影城团购</a>
                <a href="#">大鸭梨烤鸭店团购</a>
                <a href="#">傣妹火锅团购</a>
                <a href="#">横店电影城团购</a>
                <a href="#">翠峰苑火锅团购</a>
                <a href="#">巨幕影城团购</a>
                <a href="#">圣鲸美食汇团购</a>
                <a href="#">UA影院团购</a>
                <a href="#">春园烤肉王团购</a>
                <a href="#">幸福蓝海国际影城团购</a>
                <a href="#">哈艺时尚影城团购</a>
                <a href="#">国安剧院团购</a>
                <a href="#">诸城影剧院团购</a>
                <a href="#">新远下沙影城团购</a>
                <a href="#">射阳国际影城团购</a>
                <a href="#">将太无二团购</a>
            </div>
            <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">北京电影票团购</a>
                <a href="#">深圳电影票团购</a>
                <a href="#">上海电影票团购</a>
                <a href="#">西安电影票团购</a>
                <a href="#">广州电影票团购</a>
                <a href="#">成都电影票团购</a>
                <a href="#">武汉电影票团购</a>
                <a href="#">杭州电影票团购</a>
                <a href="#">郑州电影票团购</a>
                <a href="#">南京电影票团购</a>
                <a href="#">天津电影票团购</a>
                <a href="#">重庆电影票团购</a>
                <a href="#">沈阳电影票团购</a>
                <a href="#">合肥电影票团购</a>
                <a href="#">济南电影票团购</a>
                <a href="#">哈尔滨电影票团购</a>
                <a href="#">长沙电影票团购</a>
                <a href="#">东莞电影票团购</a>
                <a href="#">大连电影票团购</a>
                <a href="#">福州电影票团购</a>
                <a href="#">石家庄电影票团购</a>
                <a href="#">呼和浩特电影票团购</a>
                <a href="#">台州电影票团购</a>
                <a href="#">太原电影票团购</a>
                <a href="#">苏州电影票团购</a>
                <a href="#">长春电影票团购</a>
                <a href="#">青岛电影票团购</a>
                <a href="#">常州电影票团购</a>
            </div>
            <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">台州电影院团购</a>
                <a href="#">台州火锅团购</a>
                <a href="#">台州自助餐团购</a>
                <a href="#">台州蛋糕团购</a>
                <a href="#">台州西餐团购</a>
                <a href="#">台州韩国料理团购</a>
                <a href="#">台州美发团购</a>
                <a href="#">台州儿童摄影团购</a>
                <a href="#">台州海鲜团购</a>
                <a href="#">台州温泉团购</a>
                <a href="#">台州婚纱摄影团购</a>
                <a href="#">台州个性写真团购</a>
                <a href="#">台州滑雪团购</a>
                <a href="#">台州日本料理团购</a>
                <a href="#">台州自助火锅团购</a>
                <a href="#">台州寿司团购</a>
                <a href="#">台州烧烤团购</a>
                <a href="#">台州牛排团购</a>
                <a href="#">台州烤鱼团购</a>
                <a href="#">台州烤肉团购</a>
                <a href="#">台州影城团购</a>
                <a href="#">台州宾馆团购</a>
                <a href="#">台州汽车保养团购</a>
                <a href="#">台州眼镜团购</a>
                <a href="#">台州体检团购</a>
                <a href="#">台州美容团购</a>
                <a href="#">台州足疗团购</a>
                <a href="#">台州游戏币团购</a>
            </div>
            <div style="display:none;" class="J-holy-reco__content holy-reco__content">
                <a href="#">易佰住宿</a>
                <a href="#">沈苑连锁酒店大床房住宿</a>
                <a href="#">帝妃思面部瑜伽体验套餐</a>
                <a href="#">唯美度SPA养生会馆套餐</a>
                <a href="#">喔爸韩国美食2-3人餐</a>
                <a href="#">喔爸韩国美食3-4人餐</a>
                <a href="#">豪润阁4-6人餐</a>
                <a href="#">豪润阁10-12人餐</a>
                <a href="#">豪润阁代金券</a>
                <a href="#">尚源汗蒸养生馆汗蒸</a>
                <a href="#">大玩家超乐场游戏币32枚</a>
                <a href="#">宁海开元新世纪酒店自由行</a>
                <a href="#">弘儒堂</a>
                <a href="#">宝岛芋圆代金券</a>
                <a href="#">百尚酒店大床房B住宿</a>
            </div>
			</div>
			
			</div>
</div>
    <div id="sidebar" style="margin-top:30px;">
        <?php include template("block_side_daysign");?>
		<?php include template("block_side_invite");?>
		<?php include template("block_side_bulletin");?>
		<?php include template("block_side_flv");?>
		<?php include template("block_side_others_seconds");?>
		<?php include template("block_side_ask");?>
		<?php include template("block_side_others");?>
		<?php include template("block_side_mobile");?>
		<?php include template("block_side_vote");?>
		<?php include template("block_side_business");?>
		<?php include template("block_side_subscribe");?>
	</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>

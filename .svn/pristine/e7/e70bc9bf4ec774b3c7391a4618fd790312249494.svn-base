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

	<div id="deal-default">
		<div id="content">
		<?php if(is_array($teams)){foreach($teams AS $tindex=>$team) { ?>
			<?php include template("block_team_share");?>
			<div id="deal-intro" class="cf todydeal">
				<div class=no><?php echo ++$mindex; ?></div> 
                <h1><a class="deal-today-link" href="/team.php?id=<?php echo $team['id']; ?>">今日团购：</a><a href="/team.php?id=<?php echo $team['id']; ?>"><?php echo $team['title']; ?></a></h1>
                <div class="main">
                    <div class="deal-buy">
                        <div class="deal-price-tag"></div>
					<?php if(($team['state']=='soldout')){?>
                        <p class="deal-price"><strong <?php if($team['team_price'] > 9999){?>class="digits5"<?php }?>><?php echo $currency; ?><?php echo moneyit($team['team_price']); ?></strong><span class="deal-price-soldout"></span></p>
					<?php } else if($team['close_time']) { ?>
                        <p class="deal-price"><strong <?php if($team['team_price'] > 9999){?>class="digits5"<?php }?>><?php echo $currency; ?><?php echo moneyit($team['team_price']); ?></strong><span class="deal-price-expire"></span></p>
					<?php } else { ?>
                        <p class="deal-price"><strong <?php if($team['team_price'] > 9999){?>class="digits5"<?php }?>><?php echo $currency; ?><?php echo moneyit($team['team_price']); ?></strong><span><a <?php echo $team['begin_time']<time()?'href="/team/buy.php?id='.$team['id'].'"':''; ?>><img src="/static/css/i/button-deal-buy.gif" /></a></span></p>
					<?php }?>
                    </div>
                    <table class="deal-discount">
                        <tr>
                            <th>原价</th>
                            <th>折扣</th>
                            <th>节省</th>
                        </tr>
                        <tr>
                            <td><?php echo $currency; ?><?php echo moneyit($team['market_price']); ?></td>
							<td><?php echo team_discount($team); ?></td>
                            <td><?php echo $currency; ?><?php echo moneyit($team['market_price']-$team['team_price']); ?></td>
                        </tr>
                    </table>
					<?php if($team['close_time']){?>
                    <div class="deal-box deal-timeleft deal-off" id="deal-timeleft<?php echo $tindex; ?>" curtime="<?php echo $now; ?>000" diff="<?php echo $detail[$team['id']]['diff_time']; ?>000">
						<h3>本团购结束于</h3>
						<div class="limitdate"><p class="deal-buy-ended"><?php echo date('Y-m-d', $team['close_time']); ?><br><?php echo date('H:i:s', $team['close_time']); ?></p></div>
					</div>
					<?php } else { ?>
                    <div class="deal-box deal-timeleft deal-on" id="deal-timeleft<?php echo $tindex; ?>" curtime="<?php echo $now; ?>000" diff="<?php echo $detail[$team['id']]['diff_time']; ?>000">
						<h3>剩余时间</h3>
						<div class="limitdate"><ul id="counter<?php echo $tindex; ?>">
						<?php if($detail[$team['id']]['left_day']>0){?>
							<li><span><?php echo $detail[$team['id']]['left_day']; ?></span>天</li><li><span><?php echo $detail[$team['id']]['left_hour']; ?></span>小时</li><li><span><?php echo $detail[$team['id']]['left_minute']; ?></span>分钟</li>
						<?php } else { ?>
							<li><span><?php echo $detail[$team['id']]['left_hour']; ?></span>小时</li><li><span><?php echo $detail[$team['id']]['left_minute']; ?></span>分钟</li><li><span><?php echo $detail[$team['id']]['left_time']; ?></span>秒</li>
						<?php }?>
						</ul></div>
					</div>
					<?php }?>

				<?php if($team['close_time']==0){?>
					<?php if($team['state']=='none'){?>
					<div class="deal-box deal-status" id="deal-status">
						<p class="deal-buy-tip-top"><strong><?php echo $team['now_number']; ?></strong> 人已购买</p>
						<div class="progress-pointer" style="padding-left:<?php echo $detail[$team['id']]['bar_size']-$detail[$team['id']]['bar_offset']; ?>px;"><span></span></div>
						<div class="progress-bar"><div class="progress-left" style="width:<?php echo $detail[$team['id']]['bar_size']-$detail[$team['id']]['bar_offset']; ?>px;"></div><div class="progress-right "></div></div>
						<div class="cf"><div class="min">0</div><div class="max"><?php echo $team['min_number']; ?></div></div>
						<p class="deal-buy-tip-btm">还差 <strong><?php echo $team['min_number']-$team['now_number']; ?></strong> 人到达最低团购人数</p>
					</div>
					<?php } else { ?>
					<div class="deal-box deal-status deal-status-open" id="deal-status">
						<p class="deal-buy-tip-top"><strong><?php echo $team['now_number']; ?></strong> 人已购买</p>
					<?php if($team['max_number']&&$team['max_number']>$team['now_number']){?>
						<p class="deal-buy-tip-btm">本单仅剩：<strong><?php echo $team['max_number']-$team['now_number']; ?></strong>份，欲购从速</p>
					<?php }?>
						<p class="deal-buy-on" style="line-height:200%;"><img src="/static/css/i/deal-buy-succ.gif"/> 团购成功！ <?php if($team['max_number']>$team['now_number']||$team['max_number']==0){?><br/>还可以继续购买<?php }?></p>
					<?php if($team['reach_time']){?>
						<p class="deal-buy-tip-btm"><?php echo date('G点i分', $team['reach_time']); ?>达到最低团购人数：<strong><?php echo $team['min_number']; ?></strong>人</p>
					<?php }?>
					</div>
					<?php }?>
				<?php } else { ?>
					<div class="deal-box deal-status deal-status-<?php echo $team['state']; ?>" id="deal-status"><div class="deal-buy-<?php echo $team['state']; ?>"></div><p class="deal-buy-tip-total">共有 <strong><?php echo $team['now_number']; ?></strong> 人购买</p></div> 
				<?php }?>
				</div>
                <div class="side">
                    <div class="deal-buy-cover-img" id="team_images">
						<img src="<?php echo team_image($team['image']); ?>" width="440" height="280" />
					</div>
				<?php if(strip_tags($team['summary'])!=$team['summary']){?><?php echo $team['summary']; ?><?php } else { ?><div class="digest"><br /><?php echo nl2br(strip_tags($team['summary'])); ?></div><?php }?>
                </div>
            </div>
			<div style="width:100%; height:10px; float:left;"></div>
			<script>window.x_init_hook_multiclock<?php echo $tindex; ?> = function(){X.misc.multiclock('deal-timeleft<?php echo $tindex; ?>', 'counter<?php echo $tindex; ?>');};</script>
		<?php }}?>
		<div class="clear"></div>
		<div><?php echo $pagestring; ?></div>
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

<?php include template("header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="signup">
    <div id="content" class="signup-box">
        <div class="box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>注册</h2><span>&nbsp;或者 <a href="/account/login.php">登录</a></span></div>
                <div class="sect">
                    <form id="signup-user-form" method="post" action="/account/signup.php" class="validator">
                        <div class="field email">
                            <label for="signup-email-address">Email</label>
                            <input type="text" size="30" name="email" id="signup-email-address" class="f-input" value="<?php echo $_POST['email']; ?>" require="true" datatype="email|ajax" url="<?php echo WEB_ROOT; ?>/ajax/validator.php" vname="signupemail" msg="Email格式不正确|Email已经被注册" /> 
                            <span class="hint">用于登录及找回密码，不会公开，请放心填写</span>
                        </div>
                        <div class="field username">
                            <label for="signup-username">用户名</label>
                            <input type="text" size="30" name="username" id="signup-username" class="f-input" value="<?php echo $_POST['username']; ?>" datatype="limit|ajax" require="true" min="2" max="16" maxLength="16" url="<?php echo WEB_ROOT; ?>/ajax/validator.php" vname="signupname" msg="用户名长度受限|用户名已经被使用" />
                            <span class="hint">填写4-16个字符，一个汉字为两个字符</span>
                        </div>
                        <div class="field password">
                            <label for="signup-password">密码</label>
                            <input type="password" size="30" name="password" id="signup-password" class="f-input" require="true" datatype="require" />
                            <span class="hint">为了您的帐号安全，建议密码最少设置为6个字符以上</span>
                        </div>
                        <div class="field password">
                            <label for="signup-password-confirm">确认密码</label>
                            <input type="password" size="30" name="password2" id="signup-password-confirm" class="f-input" require="true" datatype="compare" compare="signup-password" />
                        </div>
                        <?php if(!option_yes('mobilecode')){?>
                        <div class="field">
                            <label for="signup-password-confirm">手机号码</label>
                            <input type="text" size="30" name="mobile" id="signup-mobile" class="number" require="<?php echo option_yes('needmobile')?'true':'require'; ?>" datatype="mobile|ajax" url="<?php echo WEB_ROOT; ?>/ajax/validator.php" vname="signupmobile" msg="手机号码不正确|手机号码已经被注册" /><span class="inputtip">手机号码是我们联系您的最重要方式，并用于<?php echo $INI['system']['couponname']; ?>的短信通知</span>
                        </div>
                        <?php }?>
					<?php if(option_yes('verifyregister')){?>
						<?php include template("block_block_captcha");?>
					<?php }?>
						<div class="field city">
                            <label id="enter-address-city-label" for="signup-city">所在城市</label>
							<select name="city_id" class="f-city"><?php echo Utility::Option(Utility::OptionArray($allcities,'id','name'), $city['id']); ?><option value='0'>其他</option></select>
                        </div>
						 <div class="field subscribe">
                            <input tabindex="3" type="checkbox" value="1" name="subscribe" id="subscribe" class="f-check" checked="checked" />
                            <label for="subscribe">订阅每日最新团购信息</label>
                        </div>
                        <div class="act">
                            <input type="submit" value="注册" name="commit" id="signup-submit" class="formbutton"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box-bottom"></div>
        </div>
    </div>
    <div id="sidebar">
        <div class="sbox">
            <div class="sbox-top"></div>
            <div class="sbox-content">
                <div class="side-tip">
                    <h2>已有<?php echo $INI['system']['abbreviation']; ?>账户？</h2>
                    <p>请直接<a href="/account/login.php">登录</a>。</p>
                </div>
            </div>
            <div class="sbox-bottom"></div>
        </div>
        <div class="sbox">
		    <div class="sbox-top"></div>
		    <div class="sbox-content">
		        <div class="side-tip">
		           <h2>用合作网站账号登录</h2>
                   <?php if(option_yes('qzonelogin')){?>
					<p><a href="/thirdpart/qzone/index.php"><img src="/static/css/i/qq.gif" /></a></p>
                   <?php }?>
		           <?php if(option_yes('qqlogin')){?>
				   <p><a href="/thirdpart/qq/index.php"><img src="/static/css/i/qq.png" /></a></p>
				   <?php }?>
				   <?php if(option_yes('sinalogin')){?>
				   <p><a href="/thirdpart/sina/login.php"><img src="/static/css/i/sina_login.png" /></a></p>
				   <?php }?>
				   <?php if($INI['alipay']['alifast'] == 'Y'){?>
				   <p><a href="/alifast/auth_authorize.php"><img src="/static/css/i/btn_login_zfbkj.png" /></a></p>
				   <?php }?>
			    </div>
		    </div>
		    <div class="sbox-bottom"></div>
	     </div>
    </div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>

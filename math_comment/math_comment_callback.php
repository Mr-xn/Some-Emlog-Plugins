<?php 
!defined('EMLOG_ROOT') && exit('access deined!');
function callback_init(){
	$pre_math_comment = @file_get_contents(TPLS_PATH.Option::get('nonce_templet').'/module.php');//TPLS_PATH
	if(!preg_match('|re_math_comment|',$pre_math_comment)){
		$pre_math_comment = preg_replace('|</textarea>|','</textarea><div style="position: relative;"><label style="background:rgba(0,0,0,0);border:none;" for="Mrxn"><input style="width:15px;" type="checkbox" value=-11 id="mrxn" name="Mrxn" required="required" autocomplete="on" required title="发表评论确认框：请勾选我再发表评论！"><font color="red">请勾选我再发表评论！</font></label><?php $num1 = rand(10,99); $num2 = rand(10,99); ?>
					<font color="red"><?php echo $num1?> + <?php echo $num2?> </font>= <input style="background:rgba(0,0,0,0);border:none;" type="text" class="text" tabindex="1" style="width:25px; text-align:center;" value="" id="math" name="math" placeholder="?">
					<input type="hidden" value="<?php echo $num1; ?>" class="text" name="num1" />
					<input type="hidden" value="<?php echo $num2; ?>" class="text" name="num2" /></div>',$pre_math_comment);		
		$f = fopen(TPLS_PATH.Option::get('nonce_templet').'/module.php','wb');
		fwrite($f,$pre_math_comment);
		fclose($f);
	}
}

function callback_rm(){
	$pre_math_comment = file_get_contents(TPLS_PATH.Option::get('nonce_templet').'/module.php');
	$pre_math_comment = str_replace('<div style="position: relative;"><label style="background:rgba(0,0,0,0);border:none;" for="Mrxn"><input style="width:15px;" type="checkbox" value=-11 id="mrxn" name="Mrxn" required="required" autocomplete="on" required title="发表评论确认框：请勾选我再发表评论！"><font color="red">请勾选我再发表评论！</font></label><?php $num1 = rand(10,99); $num2 = rand(10,99); ?>
					<font color="red"><?php echo $num1?> + <?php echo $num2?> </font>= <input style="background:rgba(0,0,0,0);border:none;" type="text" class="text" tabindex="1" style="width:25px; text-align:center;" value="" id="math" name="math" placeholder="?">
					<input type="hidden" value="<?php echo $num1; ?>" class="text" name="num1" />
					<input type="hidden" value="<?php echo $num2; ?>" class="text" name="num2" /></div>','',$pre_math_comment);
	$f = fopen(TPLS_PATH.Option::get('nonce_templet').'/module.php','wb');
	fwrite($f,$pre_math_comment);
	fclose($f);
}
 ?>

<?php 

/*

Plugin Name: 数学、打钩双验证

Version: 1.0

Description: 数学、打钩双验证，为防止垃圾评论而写的一款小插件。切记：在更换模板前，请先停用此插件，否则或造成验证重复。在使用中，如有什么问题和建议，请前往我的博客反馈。

Author: Mrxn

ForEmlog:5.3.0+

Plugin URL: http://www.mrxn.net/emlog-teach/emlog-math-comment-plugin.html

Author Email: admin@mrxn.net

Author URL: http://www.mrxn.net/

*/

!defined('EMLOG_ROOT') && exit('access deined!');

function mathCode_comment_post(){

		$num1 = ( isset( $_POST['num1'] ) ) ? trim( intval( strip_tags( $_POST['num1'] ) ) ) : null;

		$num2 = ( isset( $_POST['num1'] ) ) ? trim( intval( strip_tags( $_POST['num2'] ) ) ) : null;

		$math = ( isset( $_POST['num1'] ) ) ? trim( intval( strip_tags( $_POST['math'] ) ) ) : null;

		if ( !num1 || !num2 || !math ){

			emMsg( '没有计算吧！', 'javascript:history.back(-1);' );

		} else {

			if ( ( $num1+$num2 ) != $math ){

				emMsg( '算错啦！', 'javascript:history.back(-1);' );

			}

		}

	}

addAction('comment_post', 'mathCode_comment_post');

addAction('comment_post', 're_math_comment');

 ?>

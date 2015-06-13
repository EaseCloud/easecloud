<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/3/11
 * Time: 10:16
 */
include "header.php";
?>

<style>
    #page-content {
        margin: 30px auto; padding: 60px 30px; background: #F5F5F5;
        border: 1px solid #E5E5E5; box-sizing: border-box;
    }
    #page-content h1 {
        font-size: 36px; border-bottom: 1px solid #D5D5D5;
        padding-bottom: 30px; margin-bottom: 20px;;
    }
    #page-content h2 {
        font-size: 24px;
        padding-bottom: 30px; margin-bottom: 20px;
    }
    #page-content h2 em {
        font-size: 1.2em; font-weight: bold; color: blue;
    }
    #btn-submit {
        display: block; width: 182px; border: 1px solid #D5D5D5;
        padding: 15px; background: #ffffff; margin: 15px auto;
    }
    #btn-submit img {
        display: block;margin-bottom: 15px;
    }
    #btn-submit p {
        font-size: 20px;
    }
    #btn-submit .price {
        color: #ff0000;
    }
</style>

<div id="page-content" class="wrapper text-center">

    <h1>赞助我们</h1>

    <h2>赞助我们，花不了您多少钱，但是您这位朋友，我们逸云科技<em>交定了！</em></h2>

    <a id="btn-submit" href="javascript:;">
        <img src="<?=get_template_directory_uri()?>/images/alipay/182x64.png" />
        <p>赞助逸云科技<span class="price">￥0.01</span></p>

    </a>

    <form id="form-pay" name="alipayment"
          action="<?=get_template_directory_uri()?>/lib/create_direct_pay_by_user-PHP-UTF-8/alipayapi.php"
          method="post" target="_blank" style="display: none;">

        <!-- 商户网站订单系统中唯一订单号，必填 -->
        <input size="30" name="WIDout_trade_no" value="<?='TEST_ORDER_'.date('YYYYMMDD_HHiiss')?>" />

        <!-- 订单名称，必填 -->
        <input size="30" name="WIDsubject" value="友情赞助" />

        <!-- 付款金额 -->
        <input size="30" name="WIDtotal_fee" value="0.01" />

        <!-- 订单描述 -->
        <input size="30" name="WIDbody" value="赞助我们，花不了您多少钱，但是您这个朋友，我们交定了！" />

        <!-- 商品展示地址 -->
        <input size="30" name="WIDshow_url" value="<?="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>" />

    </form>

</div>

<script>
jQuery(function($) {
    $('#btn-submit').click(function() {
        $('#form-pay').submit();
    });
});
</script>

<?php include "footer.php";
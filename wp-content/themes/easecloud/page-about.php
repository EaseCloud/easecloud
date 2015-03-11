<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/3/11
 * Time: 10:16
 */
include "header.php";
?>

<div id="page-about">
    <div class="ban">
        <div class="ban-title">
            <h1><strong>将每一个细节力求做到完美</strong></h1>
        </div>
    </div>

    <div class="about-us wrapper">

        <div class="company-info">
            <div class="info-title">
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrowhead.png"/>
                <h1>关于我们</h1>
            </div>

            <div class="info">
                <p class="info-detail"><span>佛山市逸云科技信息有限公司</span><br>逸云科技致力于网站建设和协同办公软件开发,以专业
                    的技术为各企业单位、个人打造快速网站建设开发平台。
                    <br>操作简单快捷，模板生动多样，收费合理实惠，是您打造个性化网站的利器！逸云科技坚持做有用的网站,持续创新，追求实现客户的使用价值，为客户带来更好的体验、更有用的服务。</p>
            </div>


            <ul class="contact-address">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-phone.png"/>
                    <p>12345678910</p>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-email.png"/>
                    <p>easecloud@qq.com</p>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-qq.png"/>
                    <p>123456789</p>
                </li>
            </ul>


        </div>

        <div class="company-address-info">

            <div class="address">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-pin.png"/>
                <p>佛山市顺德区乐从镇葛岸大道物联天下B座116</p>
            </div>

            <div class="map">
                <iframe src="<?php echo get_template_directory_uri(); ?>/QQmap.html"></iframe>
            </div>

        </div>

    </div>
</div>
<?php
    include "footer.php";
?>
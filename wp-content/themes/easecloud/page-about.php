<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/3/11
 * Time: 10:16
 */
include "header.php";
?>

<div class="banner">
    <div class="banner-title">
        <h1><strong>将每一个细节做到完美</strong></h1>
    </div>
</div>

<div class="wrapper">


    <section class="about-us ">

        <div class="info-summary">

            <div class="summary">

                <h1><span class="dashicons dashicons-universal-access"></span> 关于我们</h1>

                <h2>佛山市逸云计算机科技有限公司</h2>

                <p>
                    逸云科技立足技术前沿，致力于计算机和互联网领域的开发创新，
                    以专业的技术团队为广大企业及个人提供多层次的技术支持服务。
                </p>

                <h3>卓尔不凡·悠逸云端</h3>

                <p>
                    逸云科技坚持不懈创新，置身于最先进的技术潮流，携您进入互联网时代的云端，
                    为您提供更轻松的工作环境和更优质的生活体验。
                </p>

            </div>

            <div class="contact">

                <h1><span class="dashicons dashicons-id"></span> 联系方式</h1>

                <ul>
                    <li>
                        <span class="dashicons dashicons-businessman"></span>
                        项目经理 <a id="btn-show-name-card-1" href="javascript:;">【名片】</a>
                    </li>
                    <li>
                        <span class="dashicons dashicons-admin-plugins"></span>
                        技术支持 <a id="btn-show-name-card-2" href="javascript:;">【名片】</a>
                    </li>
                    <li>
                        <span class="dashicons dashicons-email-alt"></span>
                        <a href="mailto:admin@easecloud.cn">admin@easecloud.cn</a>
                    </li>
                    <li>
                        <span class="fa fa-qq"></span>
                        <a href="tencent://message/?uin=2829614240&Site=qq&Menu=yes">easecloud@qq.com</a>
                    </li>
                    <li>
                        <span class="dashicons dashicons-admin-home"></span>
                        佛山市佛山新城乐从大道西12号物联天下产业园B座116
                    </li>
                </ul>
            </div>
        </div>

        <div class="info-address">

            <h1>
                <span class="dashicons dashicons-location"></span>
                地址导航
            </h1>

            <h3>物联天下</h3>

            <p>
                逸云科技位于佛山新城<a href="http://www.wiot.com.cn/" target="_blank">物联天下产业园</a>，
                承载当地政府“商贸之都，物联新城”的发展规划，为发展新信息技术产业努力前行。
            </p>

            <p>
                物联天下产业园区为逸云科技提供了良好的办公环境以及专业现代化的物业管理服务，
                这让逸云科技置身于一个专业现代化的企业氛围当中，
                并且完整的配套设施可以使我们的员工能够专心投入在技术研发领域。
            </p>

            <div class="map">
                <iframe src="<?php echo get_template_directory_uri().'/'; ?>qqmap.html"></iframe>
            </div>

        </div>

        <div class="info-pano clearfix">
            <h1>
                <span class="dashicons dashicons-admin-site"></span>
                公司环境
            </h1>
            <div class="pano">
                <iframe src="<?php echo get_template_directory_uri().'/'; ?>pano/PANO_20150310_121638.html"></iframe>
            </div>
        </div>

    </section>

    <div id="name-card-1"><img src="<?php echo get_template_directory_uri().'/'; ?>images/name-card-1.png" alt="逸云科技 佛山市逸云计算机科技有限公司 项目经理 黄健柏" /></div>
    <div id="name-card-2"><img src="<?php echo get_template_directory_uri().'/'; ?>images/name-card-2.png" alt="逸云科技 佛山市逸云计算机科技有限公司 技术总监 黄文超" /></div>

</div>

<script>
    jQuery(function($) {
        $('#name-card-1, #name-card-2').click(function() { $(this).fadeOut(); });
        $('#btn-show-name-card-1').click(function() {
            $('#name-card-1').fadeIn();
        });
        $('#btn-show-name-card-2').click(function() {
            $('#name-card-2').fadeIn();
        });
    });
</script>

<?php include "footer.php";
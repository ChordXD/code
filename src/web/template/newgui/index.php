<?php
$cur_path = "template/$OJ_TEMPLATE/";
$url=basename($_SERVER['REQUEST_URI']);
$dir=basename(getcwd());
if($dir=="discuss3") $path_fix="../";
else $path_fix="";
if(isset($OJ_NEED_LOGIN)&&$OJ_NEED_LOGIN&&(
        $url!='loginpage.php'&&
        $url!='lostpassword.php'&&
        $url!='lostpassword2.php'&&
        $url!='registerpage.php'
    ) && !isset($_SESSION[$OJ_NAME.'_'.'user_id'])){

    header("location:".$path_fix."loginpage.php");
    exit();
}

if($OJ_ONLINE){
    require_once($path_fix.'include/online.php');
    $on = new online();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>
      <link rel="stylesheet" href="<?php echo $cur_path?>css/style.css">

<!--      --><?php //include("template/$OJ_TEMPLATE/css.php");?>
<!--      <link rel="stylesheet" href="./css/style.css">-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<!--<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>-->
<!--<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>-->
<!--<![endif]-->
</head>

<body>

<div class=wrap id=wrap>
    <div class=wrapper>
        <div class=header>
            <div class="head clearfix">
                <div class=logo_box>
                    <h1>Royal-230</h1>
                    <a href='javascript:;' class=logo_link></a>
                </div>
                <div class=nav_box id=nav_box>
                    <ul>
                        <li>
<!--                            <a href="">-->
                            <a href='#' target=_blank clickid=guanwang_navigation_homepage>主页</a>
                        </li>
                        <li>
                            <a href='<?php echo $path_fix?>problemset.php' target=_blank clickid=guanwang_navigation_productcenter>练习</a>
                        </li>
                        <li>
                            <a href='<?php echo $path_fix?>contest.php' target=_blank clickid=guanwang_navigation_customer>竞赛</a>
                        </li>
                        <li>
                            <a href='<?php echo $path_fix?>category.php' target=_blank clickid=guanwang_navigation_customer>分类</a>
                        </li>
                        <li>
                            <a href='<?php echo $path_fix?>status.php' target=_blank clickid=guanwang_navigation_yangtai>状态</a>
                        </li>
                        <li>
                            <a href='<?php echo $path_fix?>ranklist.php' target=_blank clickid=guanwang_navigation_yangtai>排名</a>
                        </li>
                    </ul>
                    <span class=ic_line></span></div>
            </div>
        </div>
        <div class=page_wp id=page_wp>
            <div class="page page_1"><span class="page_bg scale_box"></span>
                <div class=img_box><img src="" alt=""></div>
                <div class="txt_box scale_box">
                    <h2><?php echo $OJ_NAME?></h2>
                    <p class=txt_brief>课程设计第一小组课设展示</div>
            </div>
            <div class="page page_2"><span class="page_bg scale_box"></span>
                <div class=img_box><img src="" alt=""></div>
                <div class="txt_box scale_box">
                    <h2>基于HustOJ的高性能OJ</h2>
                    <p class=txt_brief>针对HustOJ进行适当页面美化与修改，保留原始框架的同时让OJ更好看，更美观</div>
            </div>
            <div class="page page_3"><span class="page_bg scale_box"></span>
                <div class=img_box><img src="" alt=""></div>
                <div class="txt_box scale_box">
                    <h2>由小组成员共同开发</h2>
                     <p class=txt_brief>曹力文：需求分析、仲崇文：概要设计、梁思奇，姜晓亮：详细设计、彭睿杰：实际部署与实现、许澳：测试</div>
                </div>
                <div class="page page_4"><span class="page_bg scale_box"></span>
                    <div class=img_box><img src="" alt=""></div>
                    <div class="light_wp scale_box"><span class=light_box><i class=light_1></i> <i class=light_2></i> <i class=light_3></i> <i class=light_4></i> <i class=light_5></i></span></div><span class="meteor_box scale_box"></span>
                    <div class="txt_box scale_box">
                        <h2>Never give up</h2>
                        <p class=txt_brief>不积跬步,无以至千里;不积小流,无以成江海</p>
                    </div>
                </div>
            </div>
            <div class="star_wp scale_box" id=star_wp><span class=star_bg></span> <span class=star_box></span></div><canvas id=canvas></canvas>
            <div class="btns_wp scale_box">

                <?php
                if (!isset($_SESSION[$OJ_NAME.'_'.'user_id'])){?>

                    <a class="btn_download JS-btn-download" href='<?php echo $path_fix?>loginpage.php'>登录</a>

                <?php }?>

                <?php
                if (isset($_SESSION[$OJ_NAME.'_'.'user_id'])){?>

                    <a class="btn_download JS-btn-download" href='<?php echo $path_fix?>problemset.php'>练习</a>

                <?php }?>
<!--                <a class="btn_download JS-btn-download" href='--><?php //echo $path_fix?><!--loginpage.php'>登录</a>-->
            </div>


            <div class=btn_control id=btn_control>
                <a href=javascript:; class=cur></a>
                <a href=javascript:;></a>
                <a href=javascript:;></a>
                <a href=javascript:;></a>
            </div>
             			<div class=footer>
                            <div class=foot>
                                <p>© 2019-2020 皇家230 版权所有</div>
                        </div>
        </div>
    </div>

<!--<div class="container">-->
<!--    --><?php //include("template/$OJ_TEMPLATE/nav.php");?>
<!--    <!-- Main component for a primary marketing message or call to action -->-->
<!--    <div class="jumbotron">-->
<!--        <p>-->
<!--        <center> 最近提交记录 : --><?php //echo $speed?><!-- .-->
<!--            <div id=submission style="width:80%;height:300px" ></div>-->
<!--        </center>-->
<!--        </p>-->
<!--        --><?php //echo $view_news?>
<!--    </div>-->
<!---->
<!--</div> <!-- /container -->-->

<!--<script src="./js/vendors.js"></script>-->
<!--<script src="./js/index.js"></script>-->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php //include("template/$OJ_TEMPLATE/js.php");?>
<!--<script language="javascript" type="text/javascript" src="--><?php //echo $OJ_CDN_URL?><!--include/jquery.flot.js"></script>-->
<!--<script type="text/javascript">-->
<!--    $(function () {-->
<!--        var d1 = --><?php //echo json_encode($chart_data_all)?>//;
<!--//        var d2 = --><?php ////echo json_encode($chart_data_ac)?><!--//;-->
<!--//        $.plot($("#submission"), [-->
<!--//            {label:"--><?php ////echo $MSG_SUBMIT?><!--//",data:d1,lines: { show: true }},-->
<!--//            {label:"--><?php ////echo $MSG_AC?><!--//",data:d2,bars:{show:true}} ],{-->
<!--//            grid: {-->
<!--//                backgroundColor: { colors: ["#fff", "#eee"] }-->
<!--//            },-->
<!--//            xaxis: {-->
<!--//                mode: "time"//,-->
<!--////max:(new Date()).getTime(),-->
<!--////min:(new Date()).getTime()-100*24*3600*1000-->
<!--//            }-->
<!--//        });-->
<!--//    });-->
<!--//    //alert((new Date()).getTime());-->
<!--//</script>-->
</body>
</html>
<script src="<?php echo $cur_path?>js/vendors.js"></script>

<script src="<?php echo $cur_path?>js/index.js"></script>


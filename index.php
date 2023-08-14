<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>逸风导航</title>
    <style>
    	*{margin: 0px;padding: 0px;}
	    body{
        	    background-color: #f2f3fa;
        	    width: 1000px;
        	    margin: 0 auto;
        	    /* overflow-x: hidden; */
	    }
	    .wenzi{
        	    text-decoration: none;
        	    float: left;
        	    margin-top: 2px;
        	    font-size: 20px;
	    }
	    a{
	        text-decoration: none;
	    }
	    .header,.header a{
	        background-color: white;
	        height: 70px;
	        font-size: 40px;
	        text-align: center;
	        font-family: 华文楷体;
	    }
	    .titlea{
	        float: none;
	    }
	    .search{
	        margin: 0 auto;
	        width: 1000px;
	        height: 70px;
	        background-color: white;
	    }
	    .search input{
	        width: 850px;
	        height: 50px;
	        border-radius: 30px;
	        padding-left: 20px;
	    }
	    .search button{
	        width: 100px;
	        height: 50px;
	        border-radius: 30px;
	        background-color: #3b75fb;
	    }
	    .zhuti{
	        width: 1000px;
	    }
	    .main{
	        width:1000px;
	        height: 200px;
	        margin: 0 auto;
	        background-color: #f2f3fa;
	    }
	    .main img{width:30px;height:30px;float: left;margin-left: 20px;margin-right: 10px;}
	    .title{
	        text-align: center;
	        font-family: 幼圆;
	        width: 1000px;
	        height: 20px;
	        margin-top: 25px;
	        margin-bottom: 10px;
	        font-size: 25px;
	    }
	    .listbox{
	        width: 1000px;
	        height: 200px;
	    }
	    .list{
	        width: 310px;
	        height: 50px;
	        float: left;
	        border: blue 2px none;
	        border-radius: 30px;
	        text-align: center;
	        padding-top: 20px;
	        margin: 10px  10px;
	        float: left;
	        background-color: white;
	        text-overflow: hidden;
	    }
	    .list a{
            color:blue;
	        font-size: 25px;
	        line-height: 25px;
	        width: 250px;
	        height: 25px;
	        text-align: left;
	        overflow: hidden;
	        text-overflow: ellipsis;
	        white-space: nowrap;
	    }
        .list a:hover{
            color:skyblue;
        }
	    .list:hover{box-shadow: 0px 0px 6px 0px #3b75fb;}
	    .weibu{
	        text-align: center;
	        margin-top: 50px;
	        width: 1000px;
	        height: 85px;
	        background-color:white;
	        border-radius: 85px;
	    }

	    .zujian{
	        width: 1000px;
	        float: left;
	        /* background-color: #3b75fb; */
	        position: absolute;
	    }
	    .showtime,.daojishi,.weather{
	        margin: 30px 30px;
	        text-align: center;
	        width: 190px;
	        height: 160px;
	        background-color: #3b75fb;
	        font-size: 20px;
	        line-height: 40px;
	        background-color: white;
	        border-radius: 40px;
	        float: left;
	        overflow: hidden;
	        text-overflow: ellipsis;
	        white-space: nowrap;
	    }
	    .meiriyiyan{
	        margin: 30px 30px;
	        text-align: center;
	        width: 190px;
	        height: 160px;
	        background-color: #3b75fb;
	        font-size: 20px;
	        line-height: 40px;
	        background-color: white;
	        border-radius: 40px;
	        float: left;
	        overflow: hidden;
	        text-overflow: ellipsis;
	        white-space: nowrap;
	    }
	    .showtime:hover,.daojishi:hover,.meiriyiyan:hover,.weather:hover{
	        box-shadow: 0px 0px 6px 0px #3b75fb;
	    }
        .box_dh{
            width: 1000px;
            background-color:aqua;
            position: relative;
            }
        .title_dh{
            width: 250px;
            height: 50px;
            float: left;
            text-align: center;
            line-height: 50px;
            background-color: white;
            border-radius: 0px 0px 50px 50px;
            cursor: pointer; /* 添加光标样式 */
            }
        .yincang{
            height: 0px;
            overflow: hidden;
            font-size: 30px;
            transition: height 0.3s ease-out; /* 添加过渡效果 */
            background-color: white;
            border-radius: 10px;
            }
        .yincang li {
            height: 50px;
            }
        .yincang li a{
            color:blue;
        }
        .yincang li a:hover{
            color:skyblue;
        }
    </style>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
        $(function(){
            var flag = 0;
            $(".title_dh").click(function(){
                if(flag == 0){
                    var $yincang = $(this).find(".yincang");
                    $yincang.css("height", $yincang.get(0).scrollHeight + "px"); 
                    $(this).siblings().find(".yincang").css("height", "0px"); 
                    flag =1;
                }else if(flag ==1){
                    var $yincang = $(this).find(".yincang");
                    $yincang.css("height", "0px"); 
                    $(this).siblings().find(".yincang").css("height", "0px"); 
                    flag =0;
                }
            })
            
        })
    </script>
    <script src="js/move.js"></script>
    <script src="js/move1.js"></script>
    <script type="text/javascript" src="./tongji/getip.php"></script>
    <script src="js/showtime.js"></script>
</head>
<body>

    <!-- header start -->
    <div class="header"><a class="titlea" href="night/index1.html" title="切换动态版">逸风导航</a></div>
    <div class="search">
        <form method="GET" action="https://www.baidu.com/s" target="_blank">
        	<input type="text" placeholder="请输入内容" name="word">
        	<button type="submit">百度一下</button>
        </form>
    </div>
    <!-- header end -->

    <div class="zujian" style="top:170px;">
        <!-- time start -->
        <div class="showtime"><span id="showtime"></span></div>
        <!-- time end -->

        <!-- 倒计时 start -->
        <div class="daojishi">
            <?php
                function countDown($time){
                    $timeOver=strtotime($time);
                    echo "距离开学<br>还有<span id='countdown'></span>";
            ?>

            <script>
                function updateCountdown(){
                    // 获取当前时间和结束时间的时间戳
                    var timeNow = new Date().getTime();
                    var timeOver = new Date("<?php echo date('Y-m-d H:i:s', $timeOver); ?>").getTime();
                    // 计算倒计时时间
                    var diff = timeOver - timeNow;
                    var day = Math.floor(diff / (1000 * 60 * 60 * 24));
                    var hour = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minute = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    var second = Math.floor((diff % (1000 * 60)) / 1000);
                    // 更新显示倒计时的元素
                    document.getElementById("countdown").innerHTML = day + " 天 " + "<br>"+ hour + " 小时 " + minute + " 分 " + "<br>" + second + " 秒 ";
                }
                // 定时器 每秒钟更新一次
                setInterval(updateCountdown, 1000);
            </script>
        <?php
        }
        countDown('2023-09-02 17:00:00');
        ?>
        </div>
        <!-- 倒计时 end -->

        <!-- 每日一言 start -->
        <div class="meiriyiyan">
            <?php
                // 存储数据的文件
                $filename = 'time/data.txt';        

                // 指定页面编码
                header('Content-type: text/html; charset=utf-8');

                if(!file_exists($filename)) {
                    die($filename . ' 数据文件不存在');
                }

                // 读取整个数据文件
                $data = file_get_contents($filename);

                // 按换行符分割成数组
                $data = explode(PHP_EOL, $data);

                // 随机获取一行索引
                $result = $data[array_rand($data)];

                // 去除多余的换行符（保险起见）
                $result = str_replace(array("\r","\n","\r\n"), '', $result);

                echo $result;
            ?>
        </div>
        <!-- 每日一言 end -->

        <!-- weather start -->
        <iframe class="weather" scrolling="no" src="https://tianqiapi.com/api.php?style=tp&skin=orange" frameborder="0" width="160" height="160" allowtransparency="true"></iframe>
        <!-- weather end -->

    </div>

    <!-- 导航 start -->
    <div class="box_dh">
        <div class="title_dh">
            <div>影视</div>
            <div class="yincang">
                <ul>
                    <li>··········</li>
                    <li><a href="https://cupfox.app/">茶杯狐</a></li>
                    <li><a href="https://www.btnull.in/">无名小站</a></li>
                    <li><a href="https://www.wrnm.cc/">萌乐影视</a></li>
                    <li><a href="https://www.555dyy.top/">555电影</a></li>
                    <li><a href="https://ddys.art/">低端影视</a></li>
                    <li><a href="https://www.bdys03.com/">哔滴影视</a></li>
                    <li><a href="https://www.subaibaiys.com/">素白白影视</a></li>
                    <li><a href="https://www.libvio.cc/">LIBVIO影视</a></li>
                    <li>··········</li>
                </ul>
            </div>
        </div>
        <div class="title_dh">
            <div>音乐</div>
            <div class="yincang">
                <ul>
                    <li>··········</li>
                    <li><a href="https://zz123.com">zz123音乐</a></li>
                    <li><a href="https://www.hifini.com/">HiFiNi</a></li>
                    <li><a href="https://tool.liumingye.cn/music/?page=searchPage#/">MyFreeMP3</a></li>
                    <li>··········</li>
                </ul>
            </div>
        </div>
        <div class="title_dh">
            <div>常用</div>
            <div class="yincang">
                <ul>
                    <li>··········</li>
                    <li><a href="http://47.120.3.2:5244/">逸风小站</a></li>
                    <li><a href="https://www.runoob.com/">菜鸟教程</a></li>
                    <li><a href="https://www.aliyun.com/">阿里云</a></li>
                    <li><a href="https://www.1ppt.com/">第一PPT</a></li>
                    <li><a href="https://zhenti.burningvocabulary.com/">英语真题在线</a></li>
                    <li><a href="https://github.com/">Github</a></li>
                    <li><a href="https://gitee.com/">Gitee</a></li>
                    <li><a href="https://www.52pojie.cn/">吾爱破解</a></li>
                    <li>··········</li>
                </ul>
            </div>
        </div>
        <div class="title_dh">
            <div>其它</div>
            <div class="yincang">
                <ul>
                    <li>··········</li>
                    <li><a href="https://chuankuan.gitee.io/flying-bird">飞翔的小鸟</a></li>
                    <li><a href="http://chuankuan.top/fly_bird/">飞翔的小鸟</a></li>
                    <li>··········</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 导航 end -->

    <!-- 主体部分 start -->
    <div class="zhuti" style="padding-top: 210px;">
        <div class="main">
            <div class="title">影视</div>
            <div class="listbox">
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="yinshi/sy.html" title="yifeng" target="_blank">逸风小站</a></div>
                <div class="list"><img src="images/txsp.png"/><a class="wenzi" href="https://v.qq.com/" title="yifeng" target="_blank">腾讯视频</a></div>
                <div class="list"><img src="images/aqy.png"/><a class="wenzi" href="http://www.iqiyi.com/" title="yifeng" target="_blank">爱奇艺</a></div>
                <div class="list"><img src="images/yk.png"/><a class="wenzi" href="https://youku.com" title="yifeng" target="_blank">优酷</a></div>
                <div class="list"><img src="images/mangguotv.png"/><a class="wenzi" href="https://www.mgtv.com/" title="yifeng" target="_blank">芒果TV</a></div>
                <div class="list"><img src="images/chabeihu.ico"/><a class="wenzi" href="https://cupfox.app/" title="yifeng" target="_blank">茶杯狐</a></div>
            </div>
        </div>
    
        <div class="main">
            <div class="title">编程开发</div>
            <div class="listbox">
                <div class="list"><img src="images/w3c.png"/><a class="wenzi" href="w3school/html-main.html" title="yifeng" target="_blank">W3school</a></div>
                <div class="list"><img src="images/cnjc.png"/><a class="wenzi" href="https://www.runoob.com/" title="yifeng" target="_blank">菜鸟教程</a></div>
                <div class="list"><img src="images/sjjg.png"/><a class="wenzi" href="http://data.biancheng.net/" title="yifeng" target="_blank">数据结构与算法教程</a></div>
                <div class="list"><img src="images/java.png"/><a class="wenzi" href="https://www.bilibili.com/video/BV1ux411d75J?p=11&spm_id_from=pageDriver" title="yifeng" target="_blank">黑马程序员-JS</a></div>
                <div class="list"><img src="images/mdn.png"/><a class="wenzi" href="https://developer.mozilla.org/zh-CN/docs/Learn" title="yifeng" target="_blank">MDN Web</a></div>
                <div class="list"><img src="images/bokeyuan.svg"/><a class="wenzi" href="https://www.cnblogs.com/chuankuan/" title="yifeng" target="_blank">博客园</a></div>
            </div>
        </div>
    
        <div class="main">
            <div class="title">音乐</div>
            <div class="listbox">
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="yinyue/yifengmusic.html" title="yifeng" target="_blank">逸风音乐</a></div>
                <div class="list"><img src="images/qqmusic.png"/><a class="wenzi" href="https://y.qq.com" title="yifeng" target="_blank">QQ音乐</a></div>
                <div class="list"><img src="images/wyy.png"/><a class="wenzi" href="https://music.163.com" title="yifeng" target="_blank">网易云音乐</a></div>
                <div class="list"><img src="images/kugou.png"/><a class="wenzi" href="http://www.kugou.com/" title="yifeng" target="_blank">酷狗音乐</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://listen1.github.io/listen1/" title="yifeng" target="_blank">Listen 1</a></div>
                <div class="list"><img src="images/qianqianyinyue.ico"/><a class="wenzi" href="https://zz123.com/" title="yifeng" target="_blank">zz123音乐</a></div>
            </div>
        </div>
    
        <div class="main">
            <div class="title">在线影视网站</div>
            <div class="listbox">
                <div class="list"><img src="images/chabeihu.ico"/><a class="wenzi" href="https://cupfox.app/" title="yifeng" target="_blank">茶杯狐</a></div>
                <div class="list"><img src="images/wumingxiaozhan.ico"/><a class="wenzi" href="https://www.btnull.in/" title="yifeng" target="_blank">无名小站</a></div>
                <div class="list"><img src="images/miqiqi.ico"/><a class="wenzi" href="http://bumimi4.com/" title="yifeng" target="_blank">布米米</a></div>
                <div class="list"><img src="images/wuguiyinyuan.ico"/><a class="wenzi" href="https://www.wuguiyy.cc/" title="yifeng" target="_blank">乌龟影院</a></div>
                <div class="list"><img src="images/tvb.ico"/><a class="wenzi" href="http://www.tvyb03.com/" title="yifeng" target="_blank">TVB云播</a></div>
                <div class="list"><img src="images/appyinyuan.ico"/><a class="wenzi" href="https://www.appmovie.cc/" title="yifeng" target="_blank">APP影院</a></div>
            </div>
        </div>
    
        <div class="main">
            <div class="title">工具导航</div>
            <div class="listbox">
                <div class="list"><img src="images/zero.ico"/><a class="wenzi" href="http://www.zero-l.cn/" title="yifeng" target="_blank">Zero</a></div>
                <div class="list"><img src="images/pythonxiaobai.ico"/><a class="wenzi" href="https://xydh.fun/gaoyang" title="yifeng" target="_blank">python小白导航</a></div>
                <div class="list"><img src="images/miku.ico"/><a class="wenzi" href="https://tools.miku.ac/" title="yifeng" target="_blank">MikuTools</a></div>
                <div class="list"><img src="images/diyippt.ico"/><a class="wenzi" href="https://www.1ppt.com/" title="yifeng" target="_blank">第一PPT</a></div>
                <div class="list"><img src="images/yifengxiaozhan.svg"/><a class="wenzi" href="http://47.120.3.2:5244" title="yifeng" target="_blank">逸风小站</a></div>
                <div class="list"><img src="images/yjlt.png"/><a class="wenzi" href="https://www.pcbeta.com/" title="yifeng" target="_blank">远景论坛</a></div>
            </div>
        </div>
    
        <div class="main">
            <div class="title">学习工作</div>
            <div class="listbox">
                <div class="list"><img src="images/yingyuzhenti.ico"/><a class="wenzi" href="https://zhenti.burningvocabulary.com/" title="yifeng" target="_blank">英语真题在线</a></div>
                <div class="list"><img src="images/siweidaotu.ico"/><a class="wenzi" href="https://mm.edrawsoft.cn/create" title="yifeng" target="_blank">思维导图</a></div>
                <div class="list"><img src="images/pptmuban.ico"/><a class="wenzi" href="https://www.ypppt.com/" title="yifeng" target="_blank">PPT模板</a></div>
                <div class="list"><img src="images/wiki.ico"/><a class="wenzi" href="https://zh.wikihow.com/" title="yifeng" target="_blank">wikiHow</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://cet-bm.neea.edu.cn/Index" title="yifeng" target="_blank">四六级官网</a></div>
                <div class="list"><img src="images/aliyun.ico"/><a class="wenzi" href="https://www.aliyun.com/" title="yifeng" target="_blank">阿里云</a></div>
            </div>
        </div>
    
        <div class="main">
            <div class="title">学习工作</div>
            <div class="listbox">
                <div class="list"><img src="images/xiongmaobangong.ico"/><a class="wenzi" href="https://www.tukuppt.com/" title="yifeng" target="_blank">熊猫办公</a></div>
                <div class="list"><img src="images/xuetangppt.ico"/><a class="wenzi" href="https://xtppt.cn/" title="yifeng" target="_blank">学堂PPT</a></div>
                <div class="list"><img src="images/zanyappt.ico"/><a class="wenzi" href="https://www.v5ppt.com/" title="yifeng" target="_blank">赞芽PPT</a></div>
                <div class="list"><img src="images/pptbaodian.ico"/><a class="wenzi" href="http://www.pptbz.com/" title="yifeng" target="_blank">PPT宝典</a></div>
                <div class="list"><img src="images/qhdxjxz.ico"/><a class="wenzi" href="https://mirrors.tuna.tsinghua.edu.cn/" title="yifeng" target="_blank">清华大学开源软件镜像站</a></div>
                <div class="list"><img src="images/zhimeihua.ico"/><a class="wenzi" href="https://zhutix.com/" title="yifeng" target="_blank">致美化</a></div>
            </div>
        </div>

        <div class="main">
            <div class="title">逸风收藏</div>
            <div class="listbox">
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="http://jwxt.gzfzxy.cn:8001/Login.aspx" title="yifeng" target="_blank">广纺教务系统</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://mp.weixin.qq.com/" title="yifeng" target="_blank">微信公众平台</a></div>
                <div class="list"><img src="images/w3school.png"/><a class="wenzi" href="https://www.w3school.com.cn/index.html" title="yifeng" target="_blank">w3school</a></div>
                <div class="list"><img src="images/xiumi.png"/><a class="wenzi" href="https://xiumi.us/#/" title="yifeng" target="_blank">秀米</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://www.btnull.re/" title="yifeng" target="_blank">无名小站</a></div>
                <div class="list"><img src="images/bzhan.ico"/><a class="wenzi" href="https://www.bilibili.com/?spm_id_from=333.1007.0.0" title="yifeng" target="_blank">B站</a></div>
            </div>
        </div>
    
        <div class="main">
            <div class="title">逸风收藏</div>
            <div class="listbox">
                <div class="list"><img src="images/douyin.ico"/><a class="wenzi" href="https://www.douyin.com/" title="yifeng" target="_blank">抖音</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://gl.gdedu.gov.cn/gdeducms/" title="yifeng" target="_blank">广东省教育综合服务平台</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="http://v.china.com.cn/" title="yifeng" target="_blank">视频中国</a></div>
                <div class="list"><img src="images/baiyan.ico"/><a class="wenzi" href="http://epcdiy.org/" title="yifeng" target="_blank">白眼</a></div>
                <div class="list"><img src="images/BitDock.ico"/><a class="wenzi" href="http://www.bitdock.cn/" title="yifeng" target="_blank">BitDock</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://www.jq22.com/" title="yifeng" target="_blank">jQuery插件库</a></div>
            </div>
        </div>

        <div class="main">
            <div class="title">逸风收藏</div>
            <div class="listbox">
                <div class="list"><img src="images/xiaomi.png"/><a class="wenzi" href="https://trust.mi.com/zh-CN/misrc" title="yifeng" target="_blank">产品安全中心</a></div>
                <div class="list"><img src="images/gdwjw.png"/><a class="wenzi" href="http://wsjkw.gd.gov.cn/xxgzbdfk/fkdt/mindex.html" title="yifeng" target="_blank">广东卫健委</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://www.aconvert.com/cn/" title="yifeng" target="_blank">在线转换</a></div>
                <div class="list"><img src="images/ico.png"/><a class="wenzi" href="https://www.52pojie.cn/" title="yifeng" target="_blank">吾爱破解</a></div>
                <div class="list"><img src="images/xiaomi.png"/><a class="wenzi" href="https://i.mi.com/find/device/activationlock#/status?_k=y3ee86" title="yifeng" target="_blank">查找手机申诉</a></div>
                <div class="list"><img src="images/gdjyglzx.ico"/><a class="wenzi" href="http://gdoa.scnu.edu.cn/" title="yifeng" target="_blank">广东省高等学校教学考试管理中心</a></div>
            </div>
        </div>
    </div>
    <!-- 主体部分 end -->

    <!-- footer start -->
    <div class="weibu">
        <div class="icp"><a style="color:#000;" href="https://beian.miit.gov.cn">粤ICP备2023050418号</a></div>
        <div class="tongji">你是第<script type="text/javascript" src="./tongji/FKTJ.php"></script>位访问者(访问量)</div>
        <div class="banquan">联系方式：2835082172@qq.com<br>本站内容部分来自网络，如有侵权等问题，请联系管理员删除。</div>
    </div>
    <!-- footer end -->
</body>
</html>

<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/assets/css/ace.min.css"/>
    <link rel="stylesheet" href="/assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="/assets/css/ace-skins.min.css"/>
    <script src="/assets/js/ace-extra.min.js"></script>
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            z-index: 100
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(20px);
                transform: translateX(20px)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(40px);
                -ms-transform: translateX(40px);
                transform: translateX(40px)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }

        .getpclass {
            width: 40px;
            height: 32px;
            position: relative;
            top: 2px;
            text-align: center;
        }

        html {
            overflow-x: hidden;
        }
    </style>
    <style>
        a.J_menuTab {
            color: #ccc;
            text-decoration: none;
            margin-right: 0px;
        }

        .main-content {
            overflow: hidden;
        }

        .content-tabs {
            position: relative;
            height: 42px;
            background: #fafafa;
            line-height: 40px;
            width: 100%;
            border-bottom: 1px solid #eee;
        }

        .content-tabs .roll-left {
            left: 0;
            border-right: solid 1px #eee;
        }

        .content-tabs .roll-nav, .page-tabs-list {
            position: absolute;
            width: 40px;
            height: 40px;
            text-align: center;
            color: #999;
            z-index: 2;
            top: 0;
        }

        .content-tabs button {
            background: #fff;
            border: 0;
            height: 40px;
            width: 100px;
            outline: 0;
            cursor: pointer;
        }

        .roll-right.J_tabRight {
            right: 0px;
        }

        .content-tabs .roll-right {
            right: 0;
            border-left: solid 1px #eee;
        }

        nav.page-tabs {
            margin-left: 40px;
            width: 100000px;
            height: 40px;
            overflow: hidden;
        }

        nav.page-tabs .page-tabs-content {
            float: left;
        }

        .page-tabs a {
            color: #666;
        }

        .page-tabs a {
            display: block;
            float: left;
            border-right: solid 1px #eee;
            padding: 0 15px;
        }

        .page-tabs a.active {
            background: #2f4050;
            color: #a7b1c2;
        }

        a {
            text-decoration: none;
        }

        #content-main {
            height: calc(100% - 140px);
            overflow: hidden;
        }

        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-top: 4px solid \9;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
        }

        .cz-box {
            width: 170px;
            height: 100px;
            position: absolute;
            z-index: 999999;
            text-align: center;
            border: 1px solid #e1e1e1;
            background-color: #fff;
            right: 0;
            display: none;
        }

        .pointer {
            cursor: pointer;
            margin: 0 10px;
        }

        .pat10 {
            padding-top: 10px;
        }

        .cz-box .pointer:hover {
            background-color: #e1e1e1;
            color: #666;
        }

    </style>

    <script src="/assets/js/jquery-2.0.3.min.js"></script>
    <script>
        $(function () {
            $(window).resize(function () {
                var win_hei = $(window).height();
                //alert(win_hei);
                $(".J_iframe").css("height", win_hei - 100 + "px");
            })

            $(".J_tabClose").click(function () {
                $(".js-cz-box").toggle();
                return false;
            })
            $(".js-cz-box").click(function () {
                $(".js-cz-box").hide();
            })
            $(document).click(function () {

                $(".js-cz-box").hide();
            })

        })
        function iframe_height() {
            var win_hei = $(window).height();
            //alert(win_hei);
            $(".J_iframe").css("height", win_hei - 100 + "px");
        }
    </script>
</head>
<body class="skin-1">
<?= $content ?>
</body>
</html>
<?php $this->endPage() ?>

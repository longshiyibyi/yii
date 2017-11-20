<div class="navbar navbar-default" id="navbar">
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="javascript:void(0)" class="navbar-brand">
                <small><i class="icon-leaf"></i> 后台管理系统</small>
            </a>

        </div>
        <a href="/logoout" class="navbar-brand" style="float:right;">
            <small style="font-size:14px;"> 退出登陆
            </small>
        </a>
        <a href="javascript:void(0)" class="navbar-brand" style="float:right;">
            <small style="font-size:14px;"> 欢迎你：<?php echo $this->params['info']['username'] ?></small>
        </a>

    </div>
</div>
<div class="main-container" id="main-container">
    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#"> <span
                    class="menu-text"></span>
        </a>
        <div class="sidebar" id="sidebar">
            <?php echo $this->render('left'); ?>
        </div>

        <div class="main-content">
            <div class="content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa icon-backward"></i></button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content" style="margin-left: 0px;">
                        <a href="javascript:;" class="J_menuTab active" data-id="welcome.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight" style="right:101px;"><i class="fa icon-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right"
                     style="width: 100px; right: 0px; border-left: solid 1px #eee; border-right: solid 1px #eee;">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span></button>
                    <div class="js-cz-box cz-box">
                        <div class="pat10"></div>
                        <div class="J_tabCloseAll pointer">关闭全部选项卡</div>
                        <div class="J_tabCloseOther pointer">关闭其他选项卡</div>
                    </div>
                </div>
            </div>
            <div class="J_mainContent" id="content-main">
                <iframe onload="iframe_height()" class="J_iframe" name="iframe0" src="/welcome"
                        data-id="welcome.html" seamless width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<?php echo $this->render('footer'); ?>
<script>
    $(function () {
        function t(t) {
            var e = 0;
            return $(t).each(function () {
                e += $(this).outerWidth(!0)
            }),
                e
        }

        function e(e) {
            var a = t($(e).prevAll()),
                i = t($(e).nextAll()),
                n = t($(".content-tabs").children().not(".J_menuTabs")),
                s = $(".content-tabs").outerWidth(!0) - n,
                r = 0;
            if ($(".page-tabs-content").outerWidth() < s) r = 0;
            else if (i <= s - $(e).outerWidth(!0) - $(e).next().outerWidth(!0)) {
                if (s - $(e).next().outerWidth(!0) > i) {
                    r = a;
                    for (var o = e; r - $(o).outerWidth() > $(".page-tabs-content").outerWidth() - s;) r -= $(o).prev().outerWidth(),
                        o = $(o).prev()
                }
            } else a > s - $(e).outerWidth(!0) - $(e).prev().outerWidth(!0) && (r = a - $(e).prev().outerWidth(!0));
            $(".page-tabs-content").animate({
                    marginLeft: 0 - r + "px"
                },
                "fast")
        }

        function a() {
            var e = Math.abs(parseInt($(".page-tabs-content").css("margin-left"))),
                a = t($(".content-tabs").children().not(".J_menuTabs")),
                i = $(".content-tabs").outerWidth(!0) - a,
                n = 0;
            if ($(".page-tabs-content").width() < i) return !1;
            for (var s = $(".J_menuTab:first"), r = 0; r + $(s).outerWidth(!0) <= e;) r += $(s).outerWidth(!0),
                s = $(s).next();
            if (r = 0, t($(s).prevAll()) > i) {
                for (; r + $(s).outerWidth(!0) < i && s.length > 0;) r += $(s).outerWidth(!0),
                    s = $(s).prev();
                n = t($(s).prevAll())
            }
            $(".page-tabs-content").animate({
                    marginLeft: 0 - n + "px"
                },
                "fast")
        }

        function i() {
            var e = Math.abs(parseInt($(".page-tabs-content").css("margin-left"))),
                a = t($(".content-tabs").children().not(".J_menuTabs")),
                i = $(".content-tabs").outerWidth(!0) - a,
                n = 0;
            if ($(".page-tabs-content").width() < i) return !1;
            for (var s = $(".J_menuTab:first"), r = 0; r + $(s).outerWidth(!0) <= e;) r += $(s).outerWidth(!0),
                s = $(s).next();
            for (r = 0; r + $(s).outerWidth(!0) < i && s.length > 0;) r += $(s).outerWidth(!0),
                s = $(s).next();
            n = t($(s).prevAll()),
            n > 0 && $(".page-tabs-content").animate({
                    marginLeft: 0 - n + "px"
                },
                "fast")
        }

        function n() {
            $(".J_menuItem").css("color", "#e1eaf1");
            $(this).css("color", "#85c0ec");

            var t = $(this).attr("href"),//路径
                a = $(this).data("index"),//data-index 值
                i = $.trim($(this).text()),//去收尾空格
                n = !0;
            //alert(t+"---"+a+"---"+i);

            var t_v = t + '?v=4.0';
            $(".J_iframe").each(function (i) {
                if ($(this).attr("src") == t_v) {
                    $(this).attr('src', t_v);
                }
            });


            if (void 0 == t || 0 == $.trim(t).length) return !1;

            if ($(".J_menuTab").each(function () {
                    return $(this).data("id") == t ? ($(this).hasClass("active") || ($(this).addClass("active").siblings(".J_menuTab").removeClass("active"), e(this), $(".J_mainContent .J_iframe").each(function () {
                            return $(this).data("id") == t ? ($(this).show().siblings(".J_iframe").hide(), !1) : void 0
                        })), n = !1, !1) : void 0
                }), n) {

                var s = '<a href="javascript:;" class="active J_menuTab" data-id="' + t + '">' + i + ' <i class="icon-remove-circle"></i></a>';
                $(".J_menuTab").removeClass("active");
                var r = '<iframe onload="iframe_height()" class="J_iframe" name="iframe' + a + '" width="100%" height="100%" src="' + t + '?v=4.0" frameborder="0" data-id="' + t + '" seamless></iframe>';
                $(".J_mainContent").find("iframe.J_iframe").hide().parents(".J_mainContent").append(r);

                var o = layer.load();
                $(".J_mainContent iframe:visible").load(function () {
                    layer.close(o)
                }),

                    $(".J_menuTabs .page-tabs-content").append(s),
                    e($(".J_menuTab.active"))
            }
            return !1

        }

        function s() {

            var t = $(this).parents(".J_menuTab").data("id"),
                a = $(this).parents(".J_menuTab").width();

            $(".J_menuItem").each(function (i) {
                if ($(this).attr("href") == t) {
                    $(this).css("color", "#e1eaf1");
                }
            });

            if ($(this).parents(".J_menuTab").hasClass("active")) {
                if ($(this).parents(".J_menuTab").next(".J_menuTab").size()) {
                    var i = $(this).parents(".J_menuTab").next(".J_menuTab:eq(0)").data("id");

                    $(".J_menuItem").each(function () {
                        if ($(this).attr("href") == i) {
                            $(this).css("color", "#85c0ec");
                        } else {
                            $(this).css("color", "#e1eaf1");
                        }
                    });

                    $(this).parents(".J_menuTab").next(".J_menuTab:eq(0)").addClass("active"),
                        $(".J_mainContent .J_iframe").each(function () {
                            return $(this).data("id") == i ? ($(this).show().siblings(".J_iframe").hide(), !1) : void 0
                        });
                    var n = parseInt($(".page-tabs-content").css("margin-left"));
                    0 > n && $(".page-tabs-content").animate({
                            marginLeft: n + a + "px"
                        },
                        "fast"),
                        $(this).parents(".J_menuTab").remove(),
                        $(".J_mainContent .J_iframe").each(function () {
                            return $(this).data("id") == t ? ($(this).remove(), !1) : void 0
                        })
                }
                if ($(this).parents(".J_menuTab").prev(".J_menuTab").size()) {
                    var i = $(this).parents(".J_menuTab").prev(".J_menuTab:last").data("id");

                    $(".J_menuItem").each(function () {
                        if ($(this).attr("href") == i) {
                            $(this).css("color", "#85c0ec");
                        } else {
                            $(this).css("color", "#e1eaf1");
                        }
                    });

                    $(this).parents(".J_menuTab").prev(".J_menuTab:last").addClass("active"),
                        $(".J_mainContent .J_iframe").each(function () {
                            return $(this).data("id") == i ? ($(this).show().siblings(".J_iframe").hide(), !1) : void 0
                        }),
                        $(this).parents(".J_menuTab").remove(),
                        $(".J_mainContent .J_iframe").each(function () {
                            return $(this).data("id") == t ? ($(this).remove(), !1) : void 0
                        })
                }
            } else $(this).parents(".J_menuTab").remove(),
                $(".J_mainContent .J_iframe").each(function () {
                    return $(this).data("id") == t ? ($(this).remove(), !1) : void 0
                }),
                e($(".J_menuTab.active"));
            return !1
        }

        function r() {
            $(".page-tabs-content").children("[data-id]").not(":first").not(".active").each(function () {
                $('.J_iframe[data-id="' + $(this).data("id") + '"]').remove(),
                    $(this).remove()
            }),
                $(".page-tabs-content").css("margin-left", "0")
        }

        function o() {
            e($(".J_menuTab.active"))
        }

        function d() {

            if (!$(this).hasClass("active")) {
                var t = $(this).data("id");

                $(".J_menuItem").each(function (i) {
                    if ($(this).attr("href") == t) {
                        $(this).css("color", "#85c0ec");
                    } else {
                        $(this).css("color", "#e1eaf1");
                    }
                });

                $(".J_mainContent .J_iframe").each(function () {
                    return $(this).data("id") == t ? ($(this).show().siblings(".J_iframe").hide(), !1) : void 0
                }),
                    $(this).addClass("active").siblings(".J_menuTab").removeClass("active"),
                    e(this)
            }
        }

        function c() {

            var t = $('.J_iframe[data-id="' + $(this).data("id") + '"]'),
                e = t.attr("src"),
                a = layer.load();
            t.attr("src", e).load(function () {
                layer.close(a)
            })
        }

        $(".J_menuItem").each(function (t) {
            $(this).attr("data-index") || $(this).attr("data-index", t)
        }),
            $(".J_menuItem").on("click", n),
            $(".J_menuTabs").on("click", ".J_menuTab i", s),
            $(".J_tabCloseOther").on("click", r),
            $(".J_tabShowActive").on("click", o),
            $(".J_menuTabs").on("click", ".J_menuTab", d),
            $(".J_menuTabs").on("dblclick", ".J_menuTab", c),
            $(".J_tabLeft").on("click", a),
            $(".J_tabRight").on("click", i),
            $(".J_tabCloseAll").on("click",
                function () {
                    $(".page-tabs-content").children("[data-id]").not(":first").each(function () {
                        $('.J_iframe[data-id="' + $(this).data("id") + '"]').remove(),
                            $(this).remove()
                    }),
                        $(".page-tabs-content").children("[data-id]:first").each(function () {
                            $('.J_iframe[data-id="' + $(this).data("id") + '"]').show(),
                                $(this).addClass("active")
                        }),
                        $(".page-tabs-content").css("margin-left", "0")
                })
    });
</script>


<script>
    /*! layer-v2.0 弹层组件 License LGPL  http://layer.layui.com/ By 贤心 */
    ;
    !function (a, b) {
        "use strict";
        var c, d, e = {
                getPath: function () {
                    var a = document.scripts,
                        b = a[a.length - 1],
                        c = b.src;
                    if (!b.getAttribute("merge")) return c.substring(0, c.lastIndexOf("/") + 1)
                }(),
                enter: function (a) {
                    13 === a.keyCode && a.preventDefault()
                },
                config: {},
                end: {},
                btn: ["&#x786E;&#x5B9A;", "&#x53D6;&#x6D88;"],
                type: ["dialog", "page", "iframe", "loading", "tips"]
            },
            f = {
                v: "2.0",
                ie6: !!a.ActiveXObject && !a.XMLHttpRequest,
                index: 0,
                path: e.getPath,
                config: function (a, b) {
                    var d = 0;
                    return a = a || {},
                        f.cache = e.config = c.extend(e.config, a),
                        f.path = e.config.path || f.path,
                    "string" == typeof a.extend && (a.extend = [a.extend]),
                        f.use("skin/layer.css", a.extend && a.extend.length > 0 ?
                            function g() {
                                var c = a.extend;
                                f.use(c[c[d] ? d : d - 1], d < c.length ?
                                    function () {
                                        return ++d,
                                            g
                                    }() : b)
                            }() : b),
                        this
                },
                use: function (a, b, d) {
                    var e = c("head")[0],
                        a = a.replace(/\s/g, ""),
                        g = /\.css$/.test(a),
                        h = document.createElement(g ? "link" : "script"),
                        i = "layui_layer_" + a.replace(/\.|\//g, "");
                    return f.path ? (g && (h.rel = "stylesheet"), h[g ? "href" : "src"] = /^http:\/\//.test(a) ? a : f.path + a, h.id = i, c("#" + i)[0] || e.appendChild(h),
                            function j() {
                                (g ? 1989 === parseInt(c("#" + i).css("width")) : f[d || i]) ?
                                    function () {
                                        b && b();
                                        try {
                                            g || e.removeChild(h)
                                        } catch (a) {
                                        }
                                    }() : setTimeout(j, 100)
                            }(), this) : void 0
                },
                ready: function (a, b) {
                    var d = "function" == typeof a;
                    return d && (b = a),
                        f.config(c.extend(e.config,
                            function () {
                                return d ? {} : {
                                        path: a
                                    }
                            }()), b),
                        this
                },
                alert: function (a, b, d) {
                    var e = "function" == typeof b;
                    return e && (d = b),
                        f.open(c.extend({
                                content: a,
                                yes: d
                            },
                            e ? {} : b))
                },
                confirm: function (a, b, d, g) {
                    var h = "function" == typeof b;
                    return h && (g = d, d = b),
                        f.open(c.extend({
                                content: a,
                                btn: e.btn,
                                yes: d,
                                cancel: g
                            },
                            h ? {} : b))
                },
                msg: function (a, d, g) {
                    var i = "function" == typeof d,
                        j = e.config.skin,
                        k = (j ? j + " " + j + "-msg" : "") || "layui-layer-msg",
                        l = h.anim.length - 1;
                    return i && (g = d),
                        f.open(c.extend({
                                content: a,
                                time: 3e3,
                                shade: !1,
                                skin: k,
                                title: !1,
                                closeBtn: !1,
                                btn: !1,
                                end: g
                            },
                            i && !e.config.skin ? {
                                    skin: k + " layui-layer-hui",
                                    shift: l
                                } : function () {
                                    return d = d || {},
                                    ( -1 === d.icon || d.icon === b && !e.config.skin) && (d.skin = k + " " + (d.skin || "layui-layer-hui")),
                                        d
                                }()))
                },
                load: function (a, b) {
                    return f.open(c.extend({
                            type: 3,
                            icon: a || 0,
                            shade: .01
                        },
                        b))
                },
                tips: function (a, b, d) {
                    return f.open(c.extend({
                            type: 4,
                            content: [a, b],
                            closeBtn: !1,
                            time: 3e3,
                            maxWidth: 210
                        },
                        d))
                }
            },
            g = function (a) {
                var b = this;
                b.index = ++f.index,
                    b.config = c.extend({},
                        b.config, e.config, a),
                    b.creat()
            };
        g.pt = g.prototype;
        var h = ["layui-layer", ".layui-layer-title", ".layui-layer-main", ".layui-layer-dialog", "layui-layer-iframe", "layui-layer-content", "layui-layer-btn", "layui-layer-close"];
        h.anim = ["layui-anim", "layui-anim-01", "layui-anim-02", "layui-anim-03", "layui-anim-04", "layui-anim-05", "layui-anim-06"],
            g.pt.config = {
                type: 0,
                shade: .3,
                fix: !0,
                move: h[1],
                title: "&#x4FE1;&#x606F;",
                offset: "auto",
                area: "auto",
                closeBtn: 1,
                time: 0,
                zIndex: 19891014,
                maxWidth: 360,
                shift: 0,
                icon: -1,
                scrollbar: !0,
                tips: 2
            },
            g.pt.vessel = function (a, b) {
                var c = this,
                    d = c.index,
                    f = c.config,
                    g = f.zIndex + d,
                    i = "object" == typeof f.title,
                    j = f.maxmin && (1 === f.type || 2 === f.type),
                    k = f.title ? '<div class="layui-layer-title" style="' + (i ? f.title[1] : "") + '">' + (i ? f.title[0] : f.title) + "</div>" : "";
                return f.zIndex = g,
                    b([f.shade ? '<div class="layui-layer-shade" id="layui-layer-shade' + d + '" times="' + d + '" style="' + ("z-index:" + (g - 1) + "; background-color:" + (f.shade[1] || "#000") + "; opacity:" + (f.shade[0] || f.shade) + "; filter:alpha(opacity=" + (100 * f.shade[0] || 100 * f.shade) + ");") + '"></div>' : "", '<div class="' + h[0] + " " + (h.anim[f.shift] || "") + (" layui-layer-" + e.type[f.type]) + (0 != f.type && 2 != f.type || f.shade ? "" : " layui-layer-border") + " " + (f.skin || "") + '" id="' + h[0] + d + '" type="' + e.type[f.type] + '" times="' + d + '" showtime="' + f.time + '" conType="' + (a ? "object" : "string") + '" style="z-index: ' + g + "; width:" + f.area[0] + ";height:" + f.area[1] + (f.fix ? "" : ";position:absolute;") + '">' + (a && 2 != f.type ? "" : k) + '<div class="layui-layer-content' + (0 == f.type && -1 !== f.icon ? " layui-layer-padding" : "") + (3 == f.type ? " layui-layer-loading" + f.icon : "") + '">' + (0 == f.type && -1 !== f.icon ? '<i class="layui-layer-ico layui-layer-ico' + f.icon + '"></i>' : "") + (1 == f.type && a ? "" : f.content || "") + '</div><span class="layui-layer-setwin">' +
                    function () {
                        var a = j ? '<a class="layui-layer-min" href="javascript:;"><cite></cite></a><a class="layui-layer-ico layui-layer-max" href="javascript:;"></a>' : "";
                        return f.closeBtn && (a += '<a class="layui-layer-ico ' + h[7] + " " + h[7] + (f.title ? f.closeBtn : 4 == f.type ? "1" : "2") + '" href="javascript:;"></a>'),
                            a
                    }() + "</span>" + (f.btn ?
                        function () {
                            var a = "";
                            "string" == typeof f.btn && (f.btn = [f.btn]);
                            for (var b = 0,
                                     c = f.btn.length; c > b; b++) a += '<a class="' + h[6] + b + '">' + f.btn[b] + "</a>";
                            return '<div class="' + h[6] + '">' + a + "</div>"
                        }() : "") + "</div>"], k),
                    c
            },
            g.pt.creat = function () {
                var a = this,
                    b = a.config,
                    g = a.index,
                    i = b.content,
                    j = "object" == typeof i;
                switch ("string" == typeof b.area && (b.area = "auto" === b.area ? ["", ""] : [b.area, ""]), b.type) {
                    case 0:
                        b.btn = "btn" in b ? b.btn : e.btn[0],
                            f.closeAll("dialog");
                        break;
                    case 2:
                        var i = b.content = j ? b.content : [b.content || "http://sentsin.com?from=layer", "auto"];
                        b.content = '<iframe scrolling="' + (b.content[1] || "auto") + '" allowtransparency="true" id="' + h[4] + g + '" name="' + h[4] + g + '" onload="this.className=\'\';" class="layui-layer-load" frameborder="0" src="' + b.content[0] + '"></iframe>';
                        break;
                    case 3:
                        b.title = !1,
                            b.closeBtn = !1,
                        -1 === b.icon && 0 === b.icon,
                            f.closeAll("loading");
                        break;
                    case 4:
                        j || (b.content = [b.content, "body"]),
                            b.follow = b.content[1],
                            b.content = b.content[0] + '<i class="layui-layer-TipsG"></i>',
                            b.title = !1,
                            b.shade = !1,
                            b.fix = !1,
                            b.tips = "object" == typeof b.tips ? b.tips : [b.tips, !0],
                        b.tipsMore || f.closeAll("tips")
                }
                a.vessel(j,
                    function (d, e) {
                        c("body").append(d[0]),
                            j ?
                                function () {
                                    2 == b.type || 4 == b.type ?
                                        function () {
                                            c("body").append(d[1])
                                        }() : function () {
                                            i.parents("." + h[0])[0] || (i.show().addClass("layui-layer-wrap").wrap(d[1]), c("#" + h[0] + g).find("." + h[5]).before(e))
                                        }()
                                }() : c("body").append(d[1]),
                            a.layero = c("#" + h[0] + g),
                        b.scrollbar || h.html.css("overflow", "hidden").attr("layer-full", g)
                    }).auto(g),
                2 == b.type && f.ie6 && a.layero.find("iframe").attr("src", i[0]),
                    c(document).off("keydown", e.enter).on("keydown", e.enter),
                    4 == b.type ? a.tips() : a.offset(),
                b.fix && d.on("resize",
                    function () {
                        a.offset(),
                        (/^\d+%$/.test(b.area[0]) || /^\d+%$/.test(b.area[1])) && a.auto(g),
                        4 == b.type && a.tips()
                    }),
                b.time <= 0 || setTimeout(function () {
                        f.close(a.index)
                    },
                    b.time),
                    a.move().callback()
            },
            g.pt.auto = function (a) {
                function b(a) {
                    a = g.find(a),
                        a.height(i[1] - j - k - 2 * (0 | parseFloat(a.css("padding"))))
                }

                var e = this,
                    f = e.config,
                    g = c("#" + h[0] + a);
                "" === f.area[0] && f.maxWidth > 0 && (/MSIE 7/.test(navigator.userAgent) && f.btn && g.width(g.innerWidth()), g.outerWidth() > f.maxWidth && g.width(f.maxWidth));
                var i = [g.innerWidth(), g.innerHeight()],
                    j = g.find(h[1]).outerHeight() || 0,
                    k = g.find("." + h[6]).outerHeight() || 0;
                switch (f.type) {
                    case 2:
                        b("iframe");
                        break;
                    default:
                        "" === f.area[1] ? f.fix && i[1] >= d.height() && (i[1] = d.height(), b("." + h[5])) : b("." + h[5])
                }
                return e
            },
            g.pt.offset = function () {
                var a = this,
                    b = a.config,
                    c = a.layero,
                    e = [c.outerWidth(), c.outerHeight()],
                    f = "object" == typeof b.offset;
                a.offsetTop = (d.height() - e[1]) / 2,
                    a.offsetLeft = (d.width() - e[0]) / 2,
                    f ? (a.offsetTop = b.offset[0], a.offsetLeft = b.offset[1] || a.offsetLeft) : "auto" !== b.offset && (a.offsetTop = b.offset, "rb" === b.offset && (a.offsetTop = d.height() - e[1], a.offsetLeft = d.width() - e[0])),
                b.fix || (a.offsetTop = /%$/.test(a.offsetTop) ? d.height() * parseFloat(a.offsetTop) / 100 : parseFloat(a.offsetTop), a.offsetLeft = /%$/.test(a.offsetLeft) ? d.width() * parseFloat(a.offsetLeft) / 100 : parseFloat(a.offsetLeft), a.offsetTop += d.scrollTop(), a.offsetLeft += d.scrollLeft()),
                    c.css({
                        top: a.offsetTop,
                        left: a.offsetLeft
                    })
            },
            g.pt.tips = function () {
                var a = this,
                    b = a.config,
                    e = a.layero,
                    f = [e.outerWidth(), e.outerHeight()],
                    g = c(b.follow);
                g[0] || (g = c("body"));
                var i = {
                        width: g.outerWidth(),
                        height: g.outerHeight(),
                        top: g.offset().top,
                        left: g.offset().left
                    },
                    j = e.find(".layui-layer-TipsG"),
                    k = b.tips[0];
                b.tips[1] || j.remove(),
                    i.autoLeft = function () {
                        i.left + f[0] - d.width() > 0 ? (i.tipLeft = i.left + i.width - f[0], j.css({
                                right: 12,
                                left: "auto"
                            })) : i.tipLeft = i.left
                    },
                    i.where = [function () {
                        i.autoLeft(),
                            i.tipTop = i.top - f[1] - 10,
                            j.removeClass("layui-layer-TipsB").addClass("layui-layer-TipsT").css("border-right-color", b.tips[1])
                    },
                        function () {
                            i.tipLeft = i.left + i.width + 10,
                                i.tipTop = i.top,
                                j.removeClass("layui-layer-TipsL").addClass("layui-layer-TipsR").css("border-bottom-color", b.tips[1])
                        },
                        function () {
                            i.autoLeft(),
                                i.tipTop = i.top + i.height + 10,
                                j.removeClass("layui-layer-TipsT").addClass("layui-layer-TipsB").css("border-right-color", b.tips[1])
                        },
                        function () {
                            i.tipLeft = i.left - f[0] - 10,
                                i.tipTop = i.top,
                                j.removeClass("layui-layer-TipsR").addClass("layui-layer-TipsL").css("border-bottom-color", b.tips[1])
                        }],
                    i.where[k - 1](),
                    1 === k ? i.top - (d.scrollTop() + f[1] + 16) < 0 && i.where[2]() : 2 === k ? d.width() - (i.left + i.width + f[0] + 16) > 0 || i.where[3]() : 3 === k ? i.top - d.scrollTop() + i.height + f[1] + 16 - d.height() > 0 && i.where[0]() : 4 === k && f[0] + 16 - i.left > 0 && i.where[1](),
                    e.find("." + h[5]).css({
                        "background-color": b.tips[1],
                        "padding-right": b.closeBtn ? "30px" : ""
                    }),
                    e.css({
                        left: i.tipLeft,
                        top: i.tipTop
                    })
            },
            g.pt.move = function () {
                var a = this,
                    b = a.config,
                    e = {
                        setY: 0,
                        moveLayer: function () {
                            var a = e.layero,
                                b = parseInt(a.css("margin-left")),
                                c = parseInt(e.move.css("left"));
                            0 === b || (c -= b),
                            "fixed" !== a.css("position") && (c -= a.parent().offset().left, e.setY = 0),
                                a.css({
                                    left: c,
                                    top: parseInt(e.move.css("top")) - e.setY
                                })
                        }
                    },
                    f = a.layero.find(b.move);
                return b.move && f.attr("move", "ok"),
                    f.css({
                        cursor: b.move ? "move" : "auto"
                    }),
                    c(b.move).on("mousedown",
                        function (a) {
                            if (a.preventDefault(), "ok" === c(this).attr("move")) {
                                e.ismove = !0,
                                    e.layero = c(this).parents("." + h[0]);
                                var f = e.layero.offset().left,
                                    g = e.layero.offset().top,
                                    i = e.layero.outerWidth() - 6,
                                    j = e.layero.outerHeight() - 6;
                                c("#layui-layer-moves")[0] || c("body").append('<div id="layui-layer-moves" class="layui-layer-moves" style="left:' + f + "px; top:" + g + "px; width:" + i + "px; height:" + j + 'px; z-index:2147483584"></div>'),
                                    e.move = c("#layui-layer-moves"),
                                b.moveType && e.move.css({
                                    visibility: "hidden"
                                }),
                                    e.moveX = a.pageX - e.move.position().left,
                                    e.moveY = a.pageY - e.move.position().top,
                                "fixed" !== e.layero.css("position") || (e.setY = d.scrollTop())
                            }
                        }),
                    c(document).mousemove(function (a) {
                        if (e.ismove) {
                            var c = a.pageX - e.moveX,
                                f = a.pageY - e.moveY;
                            if (a.preventDefault(), !b.moveOut) {
                                e.setY = d.scrollTop();
                                var g = d.width() - e.move.outerWidth(),
                                    h = e.setY;
                                0 > c && (c = 0),
                                c > g && (c = g),
                                h > f && (f = h),
                                f > d.height() - e.move.outerHeight() + e.setY && (f = d.height() - e.move.outerHeight() + e.setY)
                            }
                            e.move.css({
                                left: c,
                                top: f
                            }),
                            b.moveType && e.moveLayer(),
                                c = f = g = h = null
                        }
                    }).mouseup(function () {
                        try {
                            e.ismove && (e.moveLayer(), e.move.remove(), b.moveEnd && b.moveEnd()),
                                e.ismove = !1
                        } catch (a) {
                            e.ismove = !1
                        }
                    }),
                    a
            },
            g.pt.callback = function () {
                function a() {
                    var a = g.cancel && g.cancel(b.index);
                    a === !1 || f.close(b.index)
                }

                var b = this,
                    d = b.layero,
                    g = b.config;
                b.openLayer(),
                g.success && (2 == g.type ? d.find("iframe")[0].onload = function () {
                        this.className = "",
                            g.success(d, b.index)
                    } : g.success(d, b.index)),
                f.ie6 && b.IE6(d),
                    d.find("." + h[6]).children("a").on("click",
                        function () {
                            var e = c(this).index();
                            g["btn" + (e + 1)] && g["btn" + (e + 1)](b.index, d),
                                0 === e ? g.yes ? g.yes(b.index, d) : f.close(b.index) : 1 === e ? a() : g["btn" + (e + 1)] || f.close(b.index)
                        }),
                    d.find("." + h[7]).on("click", a),
                g.shadeClose && c("#layui-layer-shade" + b.index).on("click",
                    function () {
                        f.close(b.index)
                    }),
                    d.find(".layui-layer-min").on("click",
                        function () {
                            f.min(b.index, g),
                            g.min && g.min(d)
                        }),
                    d.find(".layui-layer-max").on("click",
                        function () {
                            c(this).hasClass("layui-layer-maxmin") ? (f.restore(b.index), g.restore && g.restore(d)) : (f.full(b.index, g), g.full && g.full(d))
                        }),
                g.end && (e.end[b.index] = g.end)
            },
            e.reselect = function () {
                c.each(c("select"),
                    function (a, b) {
                        var d = c(this);
                        d.parents("." + h[0])[0] || 1 == d.attr("layer") && c("." + h[0]).length < 1 && d.removeAttr("layer").show(),
                            d = null
                    })
            },
            g.pt.IE6 = function (a) {
                function b() {
                    a.css({
                        top: f + (e.config.fix ? d.scrollTop() : 0)
                    })
                }

                var e = this,
                    f = a.offset().top;
                b(),
                    d.scroll(b),
                    c("select").each(function (a, b) {
                        var d = c(this);
                        d.parents("." + h[0])[0] || "none" === d.css("display") || d.attr({
                            layer: "1"
                        }).hide(),
                            d = null
                    })
            },
            g.pt.openLayer = function () {
                var a = this;
                f.zIndex = a.config.zIndex,
                    f.setTop = function (a) {
                        var b = function () {
                            f.zIndex++,
                                a.css("z-index", f.zIndex + 1)
                        };
                        return f.zIndex = parseInt(a[0].style.zIndex),
                            a.on("mousedown", b),
                            f.zIndex
                    }
            },
            e.record = function (a) {
                var b = [a.outerWidth(), a.outerHeight(), a.position().top, a.position().left + parseFloat(a.css("margin-left"))];
                a.find(".layui-layer-max").addClass("layui-layer-maxmin"),
                    a.attr({
                        area: b
                    })
            },
            e.rescollbar = function (a) {
                h.html.attr("layer-full") == a && (h.html[0].style.removeProperty ? h.html[0].style.removeProperty("overflow") : h.html[0].style.removeAttribute("overflow"), h.html.removeAttr("layer-full"))
            },
            f.getChildFrame = function (a, b) {
                return b = b || c("." + h[4]).attr("times"),
                    c("#" + h[0] + b).find("iframe").contents().find(a)
            },
            f.getFrameIndex = function (a) {
                return c("#" + a).parents("." + h[4]).attr("times")
            },
            f.iframeAuto = function (a) {
                if (a) {
                    var b = f.getChildFrame("body", a).outerHeight(),
                        d = c("#" + h[0] + a),
                        e = d.find(h[1]).outerHeight() || 0,
                        g = d.find("." + h[6]).outerHeight() || 0;
                    d.css({
                        height: b + e + g
                    }),
                        d.find("iframe").css({
                            height: b
                        })
                }
            },
            f.iframeSrc = function (a, b) {
                c("#" + h[0] + a).find("iframe").attr("src", b)
            },
            f.style = function (a, b) {
                var d = c("#" + h[0] + a),
                    f = d.attr("type"),
                    g = d.find(h[1]).outerHeight() || 0,
                    i = d.find("." + h[6]).outerHeight() || 0;
                (f === e.type[1] || f === e.type[2]) && (d.css(b), f === e.type[2] && d.find("iframe").css({
                    height: parseFloat(b.height) - g - i
                }))
            },
            f.min = function (a, b) {
                var d = c("#" + h[0] + a),
                    g = d.find(h[1]).outerHeight() || 0;
                e.record(d),
                    f.style(a, {
                        width: 180,
                        height: g,
                        overflow: "hidden"
                    }),
                    d.find(".layui-layer-min").hide(),
                "page" === d.attr("type") && d.find(h[4]).hide(),
                    e.rescollbar(a)
            },
            f.restore = function (a) {
                var b = c("#" + h[0] + a),
                    d = b.attr("area").split(",");
                b.attr("type");
                f.style(a, {
                    width: parseFloat(d[0]),
                    height: parseFloat(d[1]),
                    top: parseFloat(d[2]),
                    left: parseFloat(d[3]),
                    overflow: "visible"
                }),
                    b.find(".layui-layer-max").removeClass("layui-layer-maxmin"),
                    b.find(".layui-layer-min").show(),
                "page" === b.attr("type") && b.find(h[4]).show(),
                    e.rescollbar(a)
            },
            f.full = function (a) {
                var b, g = c("#" + h[0] + a);
                e.record(g),
                h.html.attr("layer-full") || h.html.css("overflow", "hidden").attr("layer-full", a),
                    clearTimeout(b),
                    b = setTimeout(function () {
                            var b = "fixed" === g.css("position");
                            f.style(a, {
                                top: b ? 0 : d.scrollTop(),
                                left: b ? 0 : d.scrollLeft(),
                                width: d.width(),
                                height: d.height()
                            }),
                                g.find(".layui-layer-min").hide()
                        },
                        100)
            },
            f.title = function (a, b) {
                var d = c("#" + h[0] + (b || f.index)).find(h[1]);
                d.html(a)
            },
            f.close = function (a) {
                var b = c("#" + h[0] + a),
                    d = b.attr("type");
                if (b[0]) {
                    if (d === e.type[1] && "object" === b.attr("conType")) {
                        b.children(":not(." + h[5] + ")").remove();
                        for (var g = 0; 2 > g; g++) b.find(".layui-layer-wrap").unwrap().hide()
                    } else {
                        if (d === e.type[2]) try {
                            var i = c("#" + h[4] + a)[0];
                            i.contentWindow.document.write(""),
                                i.contentWindow.close(),
                                b.find("." + h[5])[0].removeChild(i)
                        } catch (j) {
                        }
                        b[0].innerHTML = "",
                            b.remove()
                    }
                    c("#layui-layer-moves, #layui-layer-shade" + a).remove(),
                    f.ie6 && e.reselect(),
                        e.rescollbar(a),
                        c(document).off("keydown", e.enter),
                    "function" == typeof e.end[a] && e.end[a](),
                        delete e.end[a]
                }
            },
            f.closeAll = function (a) {
                c.each(c("." + h[0]),
                    function () {
                        var b = c(this),
                            d = a ? b.attr("type") === a : 1;
                        d && f.close(b.attr("times")),
                            d = null
                    })
            },
            e.run = function () {
                c = jQuery,
                    d = c(a),
                    h.html = c("html"),
                    f.open = function (a) {
                        var b = new g(a);
                        return b.index
                    }
            },
            "function" == typeof define ? define(function () {
                    return e.run(),
                        f
                }) : function () {
                    a.layer = f,
                        e.run(),
                        f.use("skin/layer.css")
                }()
    }(window);
</script>
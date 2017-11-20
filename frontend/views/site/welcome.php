<div class="main-container" id="main-container">
    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#"> <span
                    class="menu-text"></span> </a>
        <div class="main-content" style="margin-left: 0px;">
            <div class="page-content" style="width: 100%">
                <div class="row animated fadeInRight" style="position:fixed; width:100%;  margin-left: 10px;">
                    <div class="col-xs-12">
                        <div class="alert alert-block alert-success">
                            <strong class="green" style="font-size: 16px;"> 服务器信息 </strong>
                        </div>
                    </div>
                </div>
                <div class="hr hr32 hr-dotted" style="border:0px;"></div>
                <div class="row animated fadeInRight">
                    <div class="col-sm-6" style="  margin-left:20px;">
                        <div class="widget-box transparent">
                            <div class="">
                                <div class="widget-main no-padding">
                                    <table class="table table-bordered table-striped">
                                        <thead class="thin-border-bottom">
                                        <tr>
                                            <th>
                                                <i class="icon-caret-right blue"></i> 名称
                                            </th>
                                            <th>
                                                <i class="icon-caret-right blue"></i> 参数值
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span class="label label-info arrowed-right arrowed-in">服务器操作系统</span>
                                            </td>
                                            <td>
                                                <span class="label label-warning arrowed arrowed-right"><?PHP echo PHP_OS; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-info arrowed-right arrowed-in">IP</span></td>
                                            <td>
                                                <span class="label label-warning arrowed arrowed-right">  <?php echo $this->params['getUserHostAddress'] ?></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="label label-info arrowed-right arrowed-in">php版本</span>
                                            </td>
                                            <td>
                                                <span class="label label-warning arrowed arrowed-right"><?PHP echo PHP_VERSION; ?> </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-info arrowed-right arrowed-in">服务器版本</span>
                                            </td>
                                            <td>
                                                <span class="label label-warning arrowed arrowed-right"><?PHP echo apache_get_version(); ?> </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-info arrowed-right arrowed-in">数据库版本</span>
                                            </td>
                                            <td>
                                                <span class="label label-warning arrowed arrowed-right"> <?php echo $this->params['ATTR_SERVER_VERSION'] ?> </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-info arrowed-right arrowed-in">文件上传</span>
                                            </td>
                                            <td>
                                                <span class="label label-warning arrowed arrowed-right">
                                                  最大 <?PHP echo ini_get('upload_max_filesize'); ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-info arrowed-right arrowed-in">系统目录</span></td>
                                            <td>
                                                <span class="label label-warning arrowed arrowed-right">
                                                    <?PHP echo $_SERVER['DOCUMENT_ROOT']; ?>
                                                    </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
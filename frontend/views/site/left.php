<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>
        <span class="btn btn-info"></span>
        <span class="btn btn-warning"></span>
        <span class="btn btn-danger"></span>
    </div>
</div>
<ul class="nav nav-list">
    <li class="active" style="height: 39px;">
        <a class="J_menuItem" data-index="0" href="welcome.html"> <i class="icon-dashboard"></i> <span
                    class="menu-text"> 控制台 </span> </a>
    </li>
    <?php foreach ($this->params['list'] as $k => $v) { ?>
        <li><a href="#" class="dropdown-toggle"> <i class="icon-list"></i> <span
                        class="menu-text">    <?php echo $this->params['list'][$k]['name'] ?></span>
                <b class="arrow icon-angle-down"></b> </a>
            <ul class="submenu">
                <?php
                $nlist = $this->params['list'][$k]['nlist'];
                foreach ($nlist as $m => $n) { ?>
                    <li class="active" onclick="window.location.href='<?php echo $nlist[$m]['action'] ?>'"
                        style="cursor: pointer;">
                        <a class="J_menuItem" data-index="<?php echo $nlist[$m]['k'] ?>"
                           href="<?php echo $nlist[$m]['action'] ?>">
                            <i class="icon-double-angle-right"></i>
                            <?php echo $nlist[$m]['name'] ?>
                        </a>
                    </li>
                <?php } ?>
                </if>
            </ul>
        </li>
    <?php } ?>
</ul>
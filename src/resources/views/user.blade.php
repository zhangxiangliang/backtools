@if(auth()->user())
<div class="right-notification">
    <ul class="notification-menu">
        <li>
            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <!-- {{ auth()->user()->nickname }} -->
                管理员
                <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                <li>
                    <a href="">退出登录</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endif

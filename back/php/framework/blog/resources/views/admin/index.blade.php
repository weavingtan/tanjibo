@extends('layouts.admin')
@section('content')
 <div class="top_box">
		<div class="top_left">
			<div class="logo">后台管理模板</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：admin</li>
				<li><a href="{{url('admin/index/chpwd')}}" target="main">修改密码</a></li>
				<li><a href="{{url('admin/index/logout')}}">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>

            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>系统配置</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                    <li><a href="{{url('admin/links/index')}}" target="main"><i class="fa fa-fw fa-cubes"></i>友情链接</a></li>
                </ul>
            </li>
            <li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>导航栏配置</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>导航栏列表</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>文章管理</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-cubes"></i>文章列表</a></li>
                    <li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-database"></i>添加文章</a></li>
                </ul>
            </li>

            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>分类管理</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/category/show')}}" target="main"><i class="fa fa-fw fa-cubes"></i>分类列表</a></li>
                    <li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-database"></i>添加分类</a></li>
                </ul>
            </li>

            <li>
            	<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
                <ul class="sub_menu">
                    <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                    <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                    <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                    <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
                </ul>
            </li>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{url('admin/index/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2015. Powered By <a href="http://www.houdunwang.com">http://www.houdunwang.com</a>.
	</div>
	<!--底部 结束-->
@endsection

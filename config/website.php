<?php

return [

	// 网站名称
	'name' => '优惠券网',

	// 网站首页的title内容
	'indexTitle' => '优惠券导航购物网站',

	// 首页的keywords内容
	'keywords' => '优惠券领取',

	// 首页描述
	'description' => '优惠券网是一个专业的优惠券分享网站!',

	// 网站的域名
	'domain' => 'tk.hainuo.info',

	// 公司名称或组织名称
	'company_name' => 'hainuo.info',

	// 网站的备案号
	'domain_beian' => '鲁ICP备15000586',

	// 联系客服的二维码图片 200*200px
	'kefu_ercode' => '/pcstyle/images/kefu.png',

	// 领取优惠券的页面，链接可以展示的客户端
	'show_client' => ['pc', 'wx', 'qq'],

	// 无线端淘抢购的时间节点
	'wx_tqg_hour' => ['00', '08', '10', '13', '15', '17', '19', '21', '23'],

	// 网站专用的fonticon地址
	'font_icon_src' => '/css/selfIcon/iconfont.css',

	// 网站统计代码-无线端
	'analysis_js_wx' => env('ANALYSIS_JS_WX'),

	// 网站统计代码-PC端
	'analysis_js_app' => env('ANALYSIS_JS_APP'),

	// 网站统计代码-PC端
	'analysis_js_pc' => env('ANALYSIS_JS_PC'),

	// 无线端搜素引擎自动推送
	'wx_search_engines_push_js' => '<script src="/common/js/wx/wx_search_engines_push.js" language="JavaScript"></script>',
];

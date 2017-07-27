 var hostUrl = 'http://m.q.com/';
 var hostUrl = 'http://m.iqiye.me/';
 var hostUrl = 'http://m.qiyelushang.com/';
 var baseUrl = hostUrl + 'qyls';
 var appid = 'wxd6e7327506445c1d';// 测试
 var appid = 'wxbbb0653e28afeb55';//正式
 var num_hint={
	10006:'请重新登录'
}
var reLogin=function(num){
	mui.toast(num_hint[num]);
	mui.plusReady(function(){
		mui.openWindow({url:'login.html',id:'login'});
	});
}

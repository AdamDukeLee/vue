mui.ready(function(){
mui.init();
mui.plusReady(function(){
	if(!window.plus) return;
	var parentW=plus.webview.currentWebview();
	var sonW=[
		{
			'url':'weixin.html',
			'id':'weixin',
		},
		{
			'url':'address.html',
			'id':'address',
		},
		{
			'url':'discover.html',
			'id':'discover',
		},
		{
			'url':'me.html',
			'id':'me',
		}
	];
	for(var i=0;i<sonW.length;i++){
		if(plus.webview.getWebviewById(sonW[i]['id'])) continue;
		var newW=plus.webview.create(sonW[i].url,sonW[i].id,{
			bottom:'50px',
			top:'0px',
			popGesture:'none'
		});
		i==0?newW.show():newW.hide();
		parentW.append(newW);
	};
});
new Vue({
	el:'#bottom_nav',
	data:{
		work_webview:'weixin',
	},
	methods:{
		show_webview:function(e){
			if(this.work_webview == e) return;
			mui.plusReady(function(){
				mui.openWindow({id:e});
			});
			var a=plus.webview.all();
			console.log('All webview',a)
			this.work_webview = e;
		},
	}
});
})//mui.ready
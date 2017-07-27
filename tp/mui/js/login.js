  var hostUrl = 'http://m.q.com/';
   var hostUrl = 'http://m.iqiye.me/';
  var hostUrl = 'http://m.qiyelushang.com/';
  var baseUrl = hostUrl + 'qyls';
  var appid = 'wxd6e7327506445c1d';// 测试
  var appid = 'wxbbb0653e28afeb55';//正式
mui.ready(function(){
	mui.init();
	new Vue({
		el:'#loginForm',
		data:{
			postdata:{
				password:'',
				user:'18516533004'
			},
			btnDisabled:false,
		},
		methods:{
			toLogin:function(){
				if(!this.postdata.user || !this.postdata.password){
					mui.toast('用户或者密码不能为空');
					return;
				};
				document.activeElement.blur();
				let that=this;
				this.btnDisabled=true;
				if(window.plus) plus.nativeUI.showWaiting();
				let obj= {
		          	"openId": "",
		            "clientIp": "127.0.0.1",
		            passwd:this.postdata.password,
		            phone:this.postdata.user
	        }
				let str = JSON.stringify(obj);
						str = Base64.encode(str);
				let url=baseUrl+'/user/loginByPwd.do';
				mui.ajax(url,{
					data:{data:str},
					type:'POST',
					success:function(res){
						if(window.plus) plus.nativeUI.closeWaiting();
						that.btnDisabled=false;
						res=Base64.decode(res);
						res=JSON.parse(res);
						console.log('respone',res);
						if(res.code == 10000){
							mui.toast('登录成功');
							localStorage.user=res.data.TOKEN_KEY;
							mui.plusReady(function(){
								mui.back()
							});
						}else{
							switch(res.code){
								case '10004':
									mui.toast('密码错误');
									break;
								default:
									mui.alert('未知错误，请重试');
							}
						}
					},
					error:function(){
						if(window.plus) plus.nativeUI.closeWaiting();
						mui.toast('未知错误，请退出app重试');
					}
				});//ajax
			}
		}
	});//vue	
})//mui.ready



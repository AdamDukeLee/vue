mui.ready(function(){
mui.init();
new Vue({
	el:'#data_list',
	data:{
		li_add:true,
		base_data:[],
		host_Url:hostUrl,
	},
	methods:{
		allOrder:function(){
			var url=baseUrl+'/order/queryOrderByCondition.do';
			var that=this;
			if(!localStorage.user){
				reLogin(10006);
				mui.openWindow({id:'login'});
				return;
			};
			var obj={
				token:localStorage.user,
			};
			var str = JSON.stringify(obj);
				str = Base64.encode(str);
			mui.ajax(url,{
				type:'POST',
				data:{
					data:str,
				},
				error:function(){
					mui.toast('网络繁忙，请重试');
				},
				success:function(res){
					that.li_add=false;
					res=Base64.decode(res);
					res=JSON.parse(res);
					console.log(res)
					if(res.code==10000){
						that.base_data=res.data.orderList;
						return;
					};
					if(res.code==10006){
						reLogin(10006);
					}else{
						mui.toast(num_hint[res.code]);
					};
				}
			})
				
		},
		allwebview:function(){
			var a=plus.webview.all();
			console.log('All webview',a)
		},
		login:function(){
			reLogin(10006);
		},
		co:function(){
			console.log(this.base_data);
		}
	},
	mounted:function(){
		this.$nextTick(function(){
			this.allOrder();
		})
	},
	computed:{
		filter_data:function(){
			var show_data=this.base_data;
			return show_data.filter(function(item,index){
				item.create_time=new Date(parseInt(item.create_time)).toLocaleTimeString();
				if(item.product_type_name.length>6){
					item.vue_name=item.product_type_name.substr(0,6)+'...';
				}else{
					item.vue_name=item.product_type_name;
				};
				return item;
			})
		},
	}
});//vue
});//mui.ready
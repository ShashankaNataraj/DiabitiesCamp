/*var currentUserId = 0;
setCurrentUserContext = function(userId){
	currentUserId = userId;
	var formIds = ['HistoryForm','NutritionalStatusForm','PressurePointForm'];
	Ext.each(formIds,function(currentFormId){
		Ext.getCmp(currentFormId).load({
			params: {
				data: { data: { user_id:userId } }
			}
		});
	});
}*/
Bancha.onModelReady(['User','History'], function() {
	Ext.create('Ext.container.Viewport',{
		layout:'border',
		items:[
		{
			xtype:'grid-patients',
			region:'west',
			width:500
		},{
			xtype:'tabpanel',
			region:'center',
			items:[{
				title:'history'
			}]
		}]
	});
	
});
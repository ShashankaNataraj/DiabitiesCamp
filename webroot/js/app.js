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
			width:500,
			split:true
		},{
			xtype:'tabpanel',
			region:'center',
			items:[{
				xtype:'form-history',
				title:'History'
			},{
				xtype:'form-nutritionalstatus',
				title:'Nutritional Status'
			},{
				xtype:'form-pressurepointdistributionassessment',
				title:'PPDA'
			}]
		}]
	});
	// Init the webcam for patient registration
	window.webcam.set_swf_url('jpegcam/htdocs/webcam.swf');
	window.webcam.set_shutter_sound(true,'jpegcam/htdocs/shutter.mp3');
	window.webcam.set_quality(100);
	window.webcam.set_api_url("uploadImage.php");
});
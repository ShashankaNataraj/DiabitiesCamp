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
	var viewport = Ext.create('Ext.container.Viewport',{
		layout:'border',
		broadcast:function(userId){
			var childComponents = [
				'form-patientdetails',
				'form-history',
				'form-nutritionalstatus',
				'form-pressurepointdistributionassessment',
				'form-advice'
			];
			Ext.each(childComponents,function(currentComponentId){
				var currentComponent = viewport.down(currentComponentId);
				if (currentComponent.loadUser){
					currentComponent.loadUser.call(currentComponent,userId);
				}
			});
		},
		items:[{
			region:'west',
			width:500,
			split:true,
			layout:'border',
			items:[{
				xtype:'form-patientdetails',
				region:'north',
				height:300
			},{
				xtype:'grid-patients',
				region:'center',
				listeners:{
					cellclick:function(scope, td, cellIndex, record, tr, rowIndex, e, eOpts){
						var id = record.get('id');
						viewport.broadcast.call(viewport,id);
					}
				}
			}]
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
			},{
				xtype:'form-advice',
				title:'Advice'
			}]
		}]
	});
	// Init the webcam for patient registration
	window.webcam.set_swf_url('jpegcam/htdocs/webcam.swf');
	window.webcam.set_shutter_sound(true,'jpegcam/htdocs/shutter.mp3');
	window.webcam.set_quality(100);
	window.webcam.set_api_url("uploadImage.php");
});
Ext.define('DiabitiesCamp.panel.PatientDetails', {
	extend: 'Ext.form.Panel',
	alias: 'widget.form-patientdetails',
	initComponent:function(){
		Ext.applyIf(this,{
			layout:'fit',
			html:'<div style="position: fixed;top: 15%;left: 10%; "><h1><b>No user selected</b></h1></div></div>'
		});
		this.callParent(arguments);
	},
	loadUser:function(userId){
		var me = this;
		if (!isNaN(userId)){
			// load the form (Bancha requires this structure)
			Ext.Ajax.request({
				url:'users/view/' + userId,
				success:function(response){
					var responseData = Ext.JSON.decode(response.responseText);
					this.setImage(responseData['User']['patient_photo_path']);
				},
				failure:function(){
					Ext.Msg.alert("Failure","Failed to contact the server, please try later!");
				},
				scope:this
			})
		}

	},
	setImage:function(imagePath){
		if (Ext.isEmpty(imagePath)){
			this.update("<h1>No user image uploaded!</h1>");
		}else{
			this.update("<img src='" + imagePath + "' height='100%' width='100%'/>");
		}
	}
});
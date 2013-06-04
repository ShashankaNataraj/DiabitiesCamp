Ext.define('DiabitiesCamp.window.PatientRegistration', {
	extend: 'Ext.window.Window',
    alias: 'widget.window-patientregistration',
	title:'Patient Registration',
	height:500,
	width:400,
	autoShow:true,
	modal:true,
	layout:'fit',
	title:'New Patient Registration',
	patientFormConfig:{
		useWebcamIntegration:true,
		patient_photo_path_prefix:'PatientImages'
	},
	initComponent: function() {
		var me = this;
		me.addEvents({
			savesuccessful: true,
			savefailure: true,
			closed:true
		});
		var form = {
			xtype:'form-patientdetails',
			mode:me.mode,
			userId:me.userId,
			listeners:{
				savesuccessful: function(response, opts) {
					this.fireEvent('savesuccessful');
					this.close();
				},
				savefailure:function(){
					this.fireEvent('savefailure');
					this.close();
				},
				scope:this
			}
		};
		Ext.applyIf(form, this.patientFormConfig);
		Ext.applyIf(this, {
			useWebcamIntegration:true,
			items:[form],
			bbar:['->',{
				text:'Capture',
				iconCls: 'icon-camera',
				handler:me.doCapture,
				scope:this
			},{
				text:'Save',
				iconCls: 'icon-save',
				handler:me.doSave,
				scope:this
			},{
				text:'Cancel',
				iconCls:'icon-reset',
				handler:me.doCancel,
				scope:this
			}]
		});
		this.callParent(arguments);
	},
	doCancel:function(){
		this.close();
		this.fireEvent('closed');
	},
	doSave:function(){
		if (this.useWebcamIntegration){
			webcam.set_hook('onComplete', continueSubmit);
			webcam.snap();
		}else{
			this.down('form-patientdetails').validateAndSubmit();
		}
	}
});

window.continueSubmit = function(fileName){
	var form = Ext.ComponentQuery.query('window-patientregistration > form-patientdetails')[0];
	form.setCurrentPatientPhoto(fileName)
	form.validateAndSubmit.call(form);
}
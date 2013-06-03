Ext.define('DiabitiesCamp.window.PatientRegistration', {
	extend: 'Ext.window.Window',
    alias: 'widget.window-patientregistration',
	title:'Patient Registration',
	height:300,
	width:400,
	autoShow:true,
	modal:true,
	layout:'fit',
	title:'New Patient Registration',
	initComponent: function() {
		var me = this;
		me.addEvents({
			savesuccessful: true,
			savefailure: true,
			closed:true
		});
		
		Ext.applyIf(this, {
			items:[{
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
			}],
			bbar:['->',{
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
		this.down('form').validateAndSubmit();
		
	}
});
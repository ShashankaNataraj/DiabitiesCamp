Ext.define('DiabitiesCamp.panel.Patients' , {
    extend: 'Ext.grid.Panel',
    alias: 'widget.grid-patients',
	
	initComponent: function() {
		var me = this;
		var pagingStore = Ext.create('Ext.data.Store',{
			id:'store-patients',
			model: Bancha.getModel('User'),
			autoLoad: true,
			pageSize: 25,
			remoteSort: true
		});
		Ext.applyIf(this,{
			title:'Patient Registration',
			columnLines:true,
			frame: true,
			store:pagingStore,
			columns:[{
				xtype:'actioncolumn',
				width:20,
				items: [{
					icon: 'img/pencil.png',  // Use a URL in the icon config
					tooltip: 'Edit',
					handler: me.editRecord,
					scope:me
				}]
			},{
				xtype:'actioncolumn',
				width:20,
				items:[{
					icon: 'img/delete.png',
					tooltip: 'Delete',
					handler: me.removeRecord,
					scope:me
				}]
			},{
				text:'Name',
				dataIndex:'name'
			},{
				text:'Age',
				dataIndex:'age'
			},{
				text:'Contact #',
				dataIndex:'contact_number'
			},{
				text:'Address',
				dataIndex:'address'
			},{
				text:'Gender',
				dataIndex:'gender',
				renderer:function(value){
					var returnValue = '';
					if (value == 0) returnValue = 'Male';
					else returnValue = 'Female';
					return returnValue;
				}
			},{
				text:'Registration Date',
				dataIndex:'created',
				renderer:Ext.util.Format.dateRenderer('d/m/Y')
			},{
				text:'Last Modified Date',
				dataIndex:'modified',
				renderer:Ext.util.Format.dateRenderer('d/m/Y')
			}],
			tbar:[{
				xtype:'combo-patientssearch',
				store:Ext.getStore('store-patients'),
				width:'70%'
			},'->',{
				iconCls: 'icon-add',
				text: 'Register New Patient',
				handler:function(){
					Ext.create('DiabitiesCamp.window.PatientRegistration',{
						mode:'add',
						listeners:{
							savesuccessful:function(){
								Ext.Msg.alert('Success!','Record Saved successfully!');
								pagingStore.reload();
							},
							savefailure:function(){
								Ext.Msg.alert('Failure!','Failed to save the record, please contact your administrator!');
								pagingStore.reload();
							},
							scope:this
						}
					});
				}
			}],
			bbar:Ext.create('Ext.PagingToolbar', {
				store: pagingStore,
				displayInfo: true,
				displayMsg: 'Displaying patient {0} - {1} of {2}',
				emptyMsg: 'No patients to display'
			})
		});
		this.callParent(arguments);
	},
	removeRecord:function(grid,rowIndex,colIndex){
		var store = grid.getStore();
		store.remove(store.getAt(rowIndex));
		store.sync();
	},
	editRecord:function(grid, rowIndex, colIndex){
		var pagingStore = grid.getStore();
		Ext.create('DiabitiesCamp.window.PatientRegistration',{
			mode:'edit',
			userId:this.getStore().getAt(rowIndex).get('id'),
			listeners:{
				savesuccessful:function(){
					Ext.Msg.alert('Success!','Record Saved successfully!');
					pagingStore.reload();
				},
				savefailure:function(){
					Ext.Msg.alert('Failure!','Failed to save the record, please contact your administrator!');
					pagingStore.reload();
				},
				scope:this
			}
		});
	}
});

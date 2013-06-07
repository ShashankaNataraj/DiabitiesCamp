Ext.define('DiabitiesCamp.form.PatientDetails', {
	extend: 'Ext.form.Panel',
	alias: 'widget.form-editpatientdetails',
	mode:undefined,
	userId:undefined,
	initComponent:function(){
		var me = this;
		me.addEvents({
			savesuccessful: true,
			savefailure: true,
			closed:true
		});
		var items = [{
			fieldLabel:'Name',
			name:'name'
		},{
			xtype:'numberfield',
			fieldLabel:'Age',
			name:'age'
		},{
			fieldLabel:'Contact Number',
			name:'contact_number'
		},{
			fieldLabel:'Address',
			name:'address'
		},{
			xtype:'combobox',
			fieldLabel:'Gender',
			store:Ext.create('Ext.data.Store', {
				fields: ['id', 'name'],
				data : [
					{"id":"0", "name":"Male"},
					{"id":"1", "name":"Female"}
				]
			}),
			queryMode: 'local',
			displayField: 'name',
			valueField: 'id',
			name:'gender',
			listeners:{
				render:function(combo){
					if (me.mode == 'add'){
						combo.select(combo.getStore().getAt(0));
					}
				}
			}
		},{
			xtype:'numberfield',
			fieldLabel:'Adhaar card #',
			name:'adhaar_card_number'
		}];
		if (me.mode == 'edit'){
			this.on('afterrender',this.loadUserToEdit);
		}else{
			items.push({
				xtype:'box',
				html:webcam.get_html(375, 235),
				anchor:'1'
			});
		}
		Ext.applyIf(this,{
			patientPhotoPath:'',
			useWebcamIntegration:true,
			api: { // tell the form to use Banchas methods
				load: Bancha.getStub('User').read,
				submit: Bancha.getStub('User').submit
			},
			defaults:{
				labelWidth:150,
				xtype:'textfield',
				padding:5,
				anchor:'100%'
			},
			layout:'anchor',
			items:items,
			mode:'add',
			userId:0,
			validateAndSubmit:function(){
				var me = this;
				var form = this.getForm();
				var valueObj = form.getValues();
				var extraParams = [];
				valueObj['gender']=0;
				
				if (this.useWebcamIntegration || me.mode!='edit'){
					valueObj['patient_photo_path'] = this.getFinalPhotoPath();
				}
				else{
					extraParams['patient_photo_path'] = this.getFinalPhotoPath();
				}
				if (this.validate()){
					//INSERT MODE
					if (me.mode != "edit"){
						form.submit({
							params:extraParams,
							waitMsg: 'Saving data..',
							success: function(form, action) {
								me.fireEvent('savesuccessful');
								Ext.MessageBox.alert('Success', action.result.msg || 'Successfully saved data.');
							},
							failure:function(){
								me.fireEvent('savefailure');
								Ext.MessageBox.alert('Failure', action.result.msg || 'Failed to saved data.');
							}
						});
					}else{
					//EDIT MODE
						Ext.Ajax.request({
							url:'users/edit/' + this.userId,
							params:valueObj,
							success: function(form, action) {
								me.fireEvent('savesuccessful');
								Ext.MessageBox.alert('Success', action.result.msg || 'Successfully saved data.');
							},
							failure:function(){
								me.fireEvent('savefailure');
								Ext.MessageBox.alert('Failure', action.result.msg || 'Failed to saved data.');
							}
						});
					}
				}
			},
			validate:function(){
				var nonEmptyFields = ['name','age','gender'];
				var returnValue = true;
				var filledValues = this.getValues();
				var validationMessage = '';
				Ext.each(nonEmptyFields,function(currentField){
					if (Ext.isEmpty(filledValues[currentField])){
						returnValue = false;
						validationMessage = 'The following fields are mandatory:'+nonEmptyFields.join(',');
						return false;
					}
				});
				//Continue only if the previous conditions didnt fail
				
				if (returnValue){
					var age = parseInt(filledValues['age']);
					if (!isNaN(age) && (age<0 || age>100)){
						validationMessage = 'Please enter a valid age!';
						returnValue = false;
					}
				}
				//Check the lengths of the fields before giving a go ahead!
				if (returnValue){
					
				}
				if (!returnValue){
					Ext.Msg.alert('Validation Failed!',validationMessage);
				}
				return returnValue;
			}
		});
		this.callParent(arguments);
	},
	loadUserToEdit:function(){
		var me = this;
		if (me.mode == 'edit'){
			// load the form (Bancha requires this structure)
			me.load({
				params: {
					data: { data: { id:me.userId } }
				},
				success: function(form, action) {
					// build a record
					var rec = Ext.create(Bancha.getModel('User'),action.result.data[0]);
					me.loadRecord(rec);
					var gender = rec.get('gender');
					var combo = me.down('combo[name=gender]');
					if (gender == 0) combo.setValue('Male');
					else combo.setValue('Female');
				}
			});
		}
	},
	setCurrentPatientPhoto:function(fileName){
		this.patientPhotoPath = fileName;
	},
	getFinalPhotoPath:function(){
		return this.patient_photo_path_prefix + "/" + this.patientPhotoPath;
	}
});
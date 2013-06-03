Ext.define('DiabitiesCamp.combo.Patients' , {
    extend: 'Ext.form.field.ComboBox',
    alias: 'widget.combo-patientssearch',
    //store: Ext.data.StoreManager.lookup('patientstore'),
	emptyText:'Search by typing patients name / Contact # / Address',
	displayField:'name',
	listConfig:{
		loadingHeight: 0,
		minHeight:0,
		maxHeight:0
	}
});
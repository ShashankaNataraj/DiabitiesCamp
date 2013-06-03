Ext.define('DiabitiesCamp.form.NutritionalStatus', {
	extend: 'Ext.form.Panel',
    alias: 'widget.form-nutritionalstatus',
	title:'Nutritional Status',
    autoHeight: true,
	// some additional styles
	frame:true,
	bodyStyle:'padding:5px 5px 0',
	fieldDefaults: {
		msgTarget: 'side',
		labelWidth: 175
	},
	defaultType: 'textfield',
	defaults: {
		anchor: '100%'
	}
}); // eo form create

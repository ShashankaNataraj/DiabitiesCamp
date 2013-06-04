Ext.define('DiabitiesCamp.form.PressurePointDistributionAssessment', {
	extend: 'Ext.form.Panel',
    alias: 'widget.form-pressurepointdistributionassessment',
	title:'Pressure Point Distribution Assessment',
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
	},
	items:[
		{
			xtype: 'filefield',
			fieldLabel: 'Right Foot Scan'
		},
		{
			xtype: 'filefield',
			fieldLabel: 'Left Foot Scan'
		},
		{
			xtype: 'textareafield',
			fieldLabel: 'Report'
		}
	]
}); // eo form create

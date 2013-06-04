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
	},
	items:[{
			xtype: 'numberfield',
			fieldLabel: 'Height'
		},
		{
			xtype: 'numberfield',
			fieldLabel: 'Weight'
		},
		{
			xtype: 'numberfield',
			fieldLabel: 'IBW'
		},
		{
			xtype: 'textfield',
			fieldLabel: 'BMI'
		},
		{
			xtype: 'numberfield',
			fieldLabel: 'Waist Girth'
		},
		{
			xtype: 'numberfield',
			fieldLabel: 'Hip Girth'
		},
		{
			xtype: 'textfield',
			fieldLabel: 'Waist-Hip Ratio'
		},
		{
			xtype: 'textfield',
			fieldLabel: 'Body Fat'
		},
		{
			xtype: 'textfield',
			fieldLabel: 'Hydration'
		},
		{
			xtype: 'textfield',
			fieldLabel: 'Visceral Fat'
		},
		{
			xtype: 'textfield',
			fieldLabel: 'Muscle Mass'
		},
		{
			xtype: 'textfield',
			fieldLabel: 'Skeletal Mass'
		},
		{
			xtype: 'numberfield',
			fieldLabel: 'Metabolic Rate'
		},
		{
			xtype: 'numberfield',
			fieldLabel: 'Metabolic Age'
		},
		{
			xtype: 'gridpanel',
			title: 'My Grid Panel',
			columns: [
				{
					xtype: 'gridcolumn',
					dataIndex: 'string',
					text: 'Area'
				},
				{
					xtype: 'numbercolumn',
					dataIndex: 'number',
					text: 'Body Fat',
					format: '0'
				},
				{
					xtype: 'gridcolumn',
					dataIndex: 'date',
					text: 'Muscle Mass'
				}
			]
		},
		{
			xtype: 'textareafield',
			fieldLabel: 'Impression & Advice'
		}
	]
}); // eo form create

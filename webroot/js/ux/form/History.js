Ext.define('DiabitiesCamp.form.History', {
	extend: 'Ext.form.Panel',
    alias: 'widget.form-history',
	title:'Patient History',
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
			xtype: 'fieldset',
			title: 'Visual Examination',
			items: [
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Previous Ulcer / Amputation',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Previous foot education',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Social Isolation',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Poor Access To Healthcare',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Walking Barefoot',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				}
			]
		},
		{
			xtype: 'fieldset',
			title: 'Neuropathy',
			items: [
				{
					xtype: 'textareafield',
					anchor: '100%',
					fieldLabel: 'Symptoms',
					labelWidth: 200
				}
			]
		},
		{
			xtype: 'fieldset',
			title: 'Vascular Status',
			items: [
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Claudication',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Rest Pain',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Pedal Pulses',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield',
							boxLabel: 'Yes'
						},
						{
							xtype: 'checkboxfield',
							boxLabel: 'No'
						}
					]
				}
			]
		},
		{
			xtype: 'fieldset',
			title: 'Skin',
			items: [
				{
					xtype: 'textfield',
					anchor: '100%',
					fieldLabel: 'Color',
					labelWidth: 200
				},
				{
					xtype: 'textfield',
					anchor: '100%',
					fieldLabel: 'Temperature',
					labelWidth: 200
				},
				{
					xtype: 'textfield',
					anchor: '100%',
					fieldLabel: 'Oedema',
					labelWidth: 200
				}
			]
		},
		{
			xtype: 'fieldset',
			title: 'Bone / Joint',
			items: [
				{
					xtype: 'textfield',
					anchor: '100%',
					fieldLabel: 'Deformities / Bony Prominences',
					labelWidth: 200
				}
			]
		},
		{
			xtype: 'fieldset',
			title: 'Footwear / Socks',
			items: [
				{
					xtype: 'textfield',
					anchor: '100%',
					fieldLabel: 'Assessment of both inside & outside',
					labelWidth: 200
				}
			]
		}
	]
}); // eo form create

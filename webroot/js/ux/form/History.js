Ext.define('DiabitiesCamp.form.History', {
	extend: 'Ext.form.Panel',
    alias: 'widget.form-history',
	title:'Patient History',
    autoHeight: true,
	autoScroll:true,
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
			title: 'Lifestyle',
			items: [{
				xtype:'radiogroup',
				items:[
					{ boxLabel: 'Sedentary', name: 'lifestyle', inputValue: '0' },
					{ boxLabel: 'Minimum activity', name: 'lifestyle', inputValue: '1' },
					{ boxLabel: 'Moderate activity', name: 'lifestyle', inputValue: '2' },
					{ boxLabel: 'High activity', name: 'lifestyle', inputValue: '3' },
					{ boxLabel: 'Athlete', name: 'lifestyle', inputValue: '4' }]
			},{
				xtype:'textarea',
				fieldLabel:'Other findings',
				name:'lifestyle_findings',
				anchor: '100%',
				labelWidth: 200
			}]
		},{
			xtype: 'fieldset',
			title: 'Visual Examination',
			items: [
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Previous Ulcer / Amputation',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Previous foot education',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Social Isolation',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Poor Access To Healthcare',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Walking Barefoot',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype:'textarea',
					fieldLabel:'Other findings',
					name:'visual_examination_findings',
					labelWidth: 200,
					anchor: '100%'
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
				},
				{
					xtype:'textarea',
					fieldLabel:'Other findings',
					name:'neuropathy_findings',
					labelWidth: 200,
					anchor: '100%'
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
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Rest Pain',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype: 'checkboxgroup',
					fieldLabel: 'Pedal Pulses',
					labelWidth: 200,
					items: [
						{
							xtype: 'checkboxfield'
						}
					]
				},
				{
					xtype:'textarea',
					fieldLabel:'Other findings',
					name:'vascular_status_findings',
					labelWidth: 200,
					anchor: '100%'
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
				},
				{
					xtype:'textarea',
					fieldLabel:'Other findings',
					name:'skin_findings',
					labelWidth: 200,
					anchor: '100%'
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
				},
				{
					xtype:'textarea',
					fieldLabel:'Other findings',
					name:'bone_joint_findings',
					labelWidth: 200,
					anchor: '100%'
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
				},
				{
					xtype:'textarea',
					anchor: '100%',
					fieldLabel:'Other findings',
					name:'footwear_socks_findings',
					labelWidth: 200
				}
			]
		}
	]
}); // eo form create

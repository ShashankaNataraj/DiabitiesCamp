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
	}
}); // eo form create

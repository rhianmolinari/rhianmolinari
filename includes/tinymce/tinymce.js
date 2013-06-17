(function() {
	tinymce.create('tinymce.plugins.Rhianmolinari', {
		init : function(ed, url) {
			ed.addButton('youtube', {
				title : 'Youtube',
				cmd : 'youtube',
				image : url + '/youtube.png'
			});
			ed.addButton('vimeo', {
				title : 'Vimeo',
				cmd : 'vimeo',
				image : url + '/vimeo.png'
			});

			ed.addCommand('youtube', function() {
				var selected_text = ed.selection.getContent();
				var return_text = '';
				return_text = '[youtube]' + selected_text + '[/youtube]';
				ed.execCommand('mceInsertContent', 0, return_text);
			});
			ed.addCommand('vimeo', function() {
				var selected_text = ed.selection.getContent();
				var return_text = '';
				return_text = '[vimeo]' + selected_text + '[/vimeo]';
				ed.execCommand('mceInsertContent', 0, return_text);
			});
		},
		createControl : function(n, cm) {
			return null;
		},
		getInfo : function() {
			return {
				longname : 'Custom Menu',
				author : 'Rhian Molinari',
				authorurl : 'http://www.rhianmolinari.com',
				infourl : 'http://www.rhianmolinari.com',
				version : "0.1"
			};
		}
	});
	tinymce.PluginManager.add( 'rhianmolinari', tinymce.plugins.Rhianmolinari );
})();
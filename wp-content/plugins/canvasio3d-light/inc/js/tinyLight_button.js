(function(){
    tinymce.PluginManager.add('caMceLBtn', function(editor, url){
        editor.addButton('caMceLBtn', {
            title: 'Canvasio3D Light',
            onclick : function() {
				send_to_editor('[canvasio3D width="320" height="320" border="1" borderCol="#F6F6F6" dropShadow="0" backCol="#FFFFFF" backImg="..." mouse="on" rollMode="off" rollSpeedH="0" rollSpeedV="0" objPath="..." objScale="3" objColor="" lightSet="7" reflection="off" refVal="5" objShadow="off" floor="off" floorHeight="42" lightRotate="off" vector="off" mousewheel="on" Help="off"] [/canvasio3D]');
			},
            image: url + '/canvasioLightBtn.png'
        });
    });
})();

//
$ui.uploadify = function(o) {
	
	var s = jQuery(o);
	var i = "data-ui-uploadify-"+Math.floor(Math.random()*100000);
		
	s.append(jQuery('<div id="filelist-'+i+'" class="filelist">wait a moment...</div>'));
	s.append(jQuery('<div id="uploader-'+i+'" class="uploader"></div>'));
	
	var l = jQuery("#filelist-"+i,s);
	var u = jQuery("#uploader-"+i,s);
	
	var c = $ui.getConfig(o,"data-ui-uploadify");			
	
	c.sessioner = $ui.urlParamsUpdate(c.service,{
		action:'session'		
	});
	
	$.get(c.sessioner,{},function(resp){
				
		//
		c.debug = false;
	
		//
		c.swf = $ui.uploadifySwf;	

		//
		c.uploader = $ui.urlParamsUpdate(c.service,{
			action:'upload',
			parent:c.parent,
			folder:c.folder,
			session:resp.session
		});  

		c.listener = $ui.urlParamsUpdate(c.service,{
			action:'list',
			parent:c.parent,
			folder:c.folder
		});
		
		c.onUploadSuccess = function(file, htmldata, response) {
			$.get(c.listener,{},function(resp){
				l.html(resp.html);
			},'json');
		};
		
		u.uploadify(c);
		
		$.get(c.listener,{},function(resp){
			console.log(resp);
			l.html(resp.html);
		},'json');
	},'json');
};

//
$ui.uploadifyDelete = function(obj) {
	if (confirm("Vuoi cancellare questo file?")) {
		var f = jQuery(obj);
		var s = f.parents("[data-ui-uploadify]").first();
		var c = $ui.getConfig(s,"data-ui-uploadify");			
		var i = f.attr("data-ui-uploadify-delete");
		var l = jQuery(".filelist",s).first();
								
		c.deleter = $ui.urlParamsUpdate(c.service,{
			id:i,
			action:'delete'
		});
		
		c.listener = $ui.urlParamsUpdate(c.service,{
			action:'list',
			parent:c.parent,
			folder:c.folder
		});  
	
		jQuery.ajax({
			url:c.deleter,
			type:"GET",
			success:function(resp){
				$.get(c.listener,{},function(resp){
					l.html(resp.html);
				},'json');
			}, 
			error:function(data){
				console.log("[ERROR] $ui.uploadifyDelete():",data);
			}
		});			
	}
	return false;
};

//
$ui.uploadifyDownload = function(obj) {
	var f = jQuery(obj);
	var s = f.parents("[data-ui-uploadify]").first();
	var c = $ui.getConfig(s,"data-ui-uploadify");			
	var i = f.attr("data-ui-uploadify-download");
	c.downloader = $ui.urlParamsUpdate(c.service,{
		id:i,
		action:'download'
	});	
	
	window.open(c.downloader,'_blank'); 
};

//
$ui.uploadifyView = function(obj) {
	var f = jQuery(obj);
	var s = f.parents("[data-ui-uploadify]").first();
	var c = $ui.getConfig(s,"data-ui-uploadify");			
	var i = f.attr("data-ui-uploadify-view");
	c.viewer = $ui.urlParamsUpdate(c.service,{
		id:i,
		action:'view'
	});	
	
	window.open(c.viewer,'_blank'); 
};

//
jQuery(document).ready(function(){
	jQuery("[data-ui-uploadify]").each(function(){
		$ui.uploadify(this);
	});
});

//
jQuery(document).on("click","[data-ui-uploadify-delete]",function(e){	
	$ui.uploadifyDelete(this);	
	e.preventDefault();
	return false;
});

//
jQuery(document).on("click","[data-ui-uploadify-download]",function(e){	
	$ui.uploadifyDownload(this);	
	e.preventDefault();
	return false;
});

//
jQuery(document).on("click","[data-ui-uploadify-view]",function(e){	
	$ui.uploadifyView(this);	
	e.preventDefault();
	return false;
});

(function($){

	//
	var $dialog = {
		index:0,
		modal:{},
		target:{},
		sender:{},
		select:function(context,value) {		
			var m = $(context).parents(".modal");
			var i = m.attr("id");
			var t = $ui.target($dialog.target[i],$dialog.sender[i]);		
			$("#"+i).modal("hide");	
			t.val(value);
			t.change();			
		},
		submit:function(context){
			var m = $(context).parents(".modal");
			var i = m.attr("id");
			var t = $ui.target($dialog.target[i],$dialog.sender[i]);		
			if ($("form",m).submit()) {
				$("#"+i).modal("hide");				
			}			
		}
	};

	//
	window.$dialog = $dialog;
	
})(jQuery);

$(document).on('click','[data-dialog]',function(e){
	
	var c = $ui.getConfig(this,'data-dialog');
	var i = $(this).attr('data-dialog-id');
	var m = $(c.modal);
	
	if (!i) {
		i = m.attr('id')+'-'+$dialog.index;
		$(this).attr('data-dialog-id',i);
		$("body").append(m.clone().attr("id",i));		
		$dialog.sender[i] = $(this);
		$dialog.target[i] = c.target;		
		$dialog.index++;
	} 
	
	//
	$("#"+i).modal("show");

	//
	c.source = c.source.replace('{target}',$ui.target($dialog.target[i],$dialog.sender[i]).val()); 
	
	//
	$("#"+i+" .modal-body").load($ws.base+"/"+c.source,function(){
		$ui.refresh();
	});
	
	//
	e.preventDefault();
	
	//
	return false;
});
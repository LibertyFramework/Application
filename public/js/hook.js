var global_next_focus = null;
$(document).on('keydown','form',function(e,t){
	if (e.keyCode === 13) {
		var i = $(this).find('[type=text]:not([readonly]),select:not([readonly])');
		global_next_focus = i.eq(i.index(e.target)+1);
		setTimeout("global_next_focus.focus();",200);
		e.preventDefault();
		return false;		
	}
});
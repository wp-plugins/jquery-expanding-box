jQuery(document).ready(function($){
	m = $("a.showmore");
	a = $("div.dropdown_box.single_opener");
	m.each(function(){ 
		var t = $(this);
		var s = gs(t);
		var v = gv(t);
		var p = t.parent();
		t.on("click", function(e){
			sp(e);
			if( p.hasClass("single_opener") && s.hasClass("hide") ){
				caso();
			}
			if( s.hasClass("show") ){
				cd(s,v);
			}
			else if( s.hasClass("hide") ){
				od(s,v);
			}
		});
	});
	$("a.showall").each(function(){
		var t = $(this);
		t.on("click", function(e){
			sp(e);
			m.each(function(){
				var t=$(this);
				var s = gs(t);
				var v = gv(t);
				od(s,v);	
			});
		});
	});
	$("a.hideall").each(function(){
		var t = $(this);
		t.on("click", function(e){
			sp(e);
			m.each(function(){
				var t=$(this);
				var s = gs(t);
				var v = gv(t);
				cd(s,v);
			});
		});
	});
	function gs(t){
		return t.siblings("div.inner_text:first");
	}
	function gv(t){
		return t.children("span.view_modifier:first");
	}
	function sp(e){
		e.preventDefault();
		e.stopPropagation();
	}
	function cd(s,v){
		s.removeClass("show").addClass("hide");
		v.removeClass("show").addClass("hide").html(v.attr("data-show") );
	}
	function od(s,v){
		s.removeClass("hide").addClass("show");
		v.removeClass("hide").addClass("show").html(v.attr("data-hide") );
	}
	function caso(){
		a.each(function(){
			var _t = $(this);
			var t = _t.children("a.showmore");
			var s = t.siblings("div.inner_text:first");
			var v = t.children("span.view_modifier:first");
			cd(s,v);
		});		
	}
	caso();
})
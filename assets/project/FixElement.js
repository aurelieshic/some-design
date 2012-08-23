var FixElement={
    updateAll:function(scrollTop){
      FixElement.scrollTop=scrollTop;
      var els=$("[data-ui-fixed]");
      for(var i =0;i<els.length;i++){
          FixElement.update($(els[i]))
      }
    },
    update:function(jq){
        var minY=Number(jq.attr("data-ui-top"));
        var maxY=Number(jq.attr("data-ui-bottom"));
        jq.css("position","relative");
        jq.css("top","");
        var coords=jq.offset();
        var pos=FixElement.scrollTop+minY;
	var docHeight=$(".footer").offset().top;
	console.log(docHeight);
        if(pos>coords.top){
            
            var bottomDif=(pos+Number(jq.height())) - ( docHeight - maxY );
            if(bottomDif>0 ){
               jq.css("position","absolute");
               pos-=bottomDif;
	       console.log("absolute "+pos)
            }else{
               jq.css("position","fixed");
               pos= minY;
	       console.log("fixed "+pos)
            }
            jq.css("top",pos+"px");
        }else{
	    console.log("relative "+pos)
	}
    }
}


$(document).on("scroll",function(){
    //document.title=$(window).scrollTop();
    FixElement.updateAll($(window).scrollTop());
})




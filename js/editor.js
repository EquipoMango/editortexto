$(document).ready(function(){   
    $("#source_code").keyup(function(){	
	$("#result").empty();
        $("#result").append($("#source_code").val());
    });
    $(".icon-folder").click(function(){
        if($(".collapsible").hasClass("open")){
                $(".contenidoArchivos").hide();
                $(".collapsible").removeClass("open");            
        }
        else{
                $(".contenidoArchivos").show();
                $(".collapsible").addClass("open"); 
        }    
    } );    
    
});

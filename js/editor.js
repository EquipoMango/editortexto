$(document).ready(function(){   
    $("#source_code").keyup(function(){	
	$("#result").empty();
        $("#result").append($("#source_code").val());
    });
});

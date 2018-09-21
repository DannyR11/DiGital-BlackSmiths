var jsonData = ;

$(document).ready(function() {

	$("#Grade").change(function(){

		var selected = $(this).find("option:selected").attr('value');
		
		if(selected == "8" || selected == "9")
		{
			//$("#Subject").html("<option value='test'>item1: test 1</option><option value='test2'>item1: test 2</option>");
			for (var i = 0; i < jsonData.LowerSubjects.length; i++) {
             	listItems += "<option value='" + jsonData.LowerSubjects[i].value + "'>" + jsonData.LowerSubjects[i].name + "</option>";
			}
 
        	("#Subject").html(listItems);
		}

		else{
			/*for (var i = 0; i < jsonData.HigherSubjects.length; i++) {
             	listItems += "<option value='" + jsonData.HigherSubjects[i].value + "'>" + jsonData.HigherSubjects[i].name + "</option>";
			}
			
			$("#Subject").html(listItems);*/
		}

	});
});


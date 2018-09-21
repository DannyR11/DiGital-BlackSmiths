//<![CDATA[
    var subjectLists = new Array(4)
    subjectLists["Lower"] = ["Mathematics", "EMS", "Natural Science"];
    subjectLists["Higher"] = ["Mathematics", "Physics", "Life Science"];

    /*var topicLists = new Array()
    topicLists["MathL"] = [""];
    topicLists["MathH"] = [""];
    topicLists["EMS"] = [""];
    topicLists["NS"] = [""];
    topicLists["Physics"] = [""];
    topicLists["LS"] = [""];*/


  function gradeChange(selectObj) {
    // get the index of the selected option
    var idx = selectObj.selectedIndex;
    // get the value of the selected option
    var which = selectObj.options[idx].value;
    // use the selected option value to retrieve the list of items from the coutnryLists array
    if(which == "8" || which == "9")
        cList = subjectLists["Lower"];
    else
      cList = subjectLists["Higher"];

    // get the country select element via its known id
    var cSelect = document.getElementById("Subject");

    // remove the current options from the country select
    var len=cSelect.options.length;
    while (cSelect.options.length > 0) {
      cSelect.remove(0);
    }
    
    var newOption;
    // create new options
    for (var i=0; i<cList.length; i++) {
      newOption = document.createElement("option");
      newOption.value = cList[i];  // assumes option string and value are the same
      newOption.text=cList[i];
      // add the new option
      try {
        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE
      }
      catch (e) {
        cSelect.appendChild(newOption);

      }
    }



  function subjectChange(selectObj) {
    // get the index of the selected option
    var idx = selectObj.selectedIndex;
    // get the value of the selected option
    var which = selectObj.options[idx].value;
    // use the selected option value to retrieve the list of items from the coutnryLists array
    if(which == "8" || which == "9")
        cList = subjectLists["Lower"];
    else
      cList = subjectLists["Higher"];

    // get the country select element via its known id
    var cSelect = document.getElementById("Subject");

    // remove the current options from the country select
    var len=cSelect.options.length;
    while (cSelect.options.length > 0) {
      cSelect.remove(0);
    }
    
    var newOption;
    // create new options
    for (var i=0; i<cList.length; i++) {
      newOption = document.createElement("option");
      newOption.value = cList[i];  // assumes option string and value are the same
      newOption.text=cList[i];
      // add the new option
      try {
        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE
      }
      catch (e) {
        cSelect.appendChild(newOption);

      }
    }
}
//]]>
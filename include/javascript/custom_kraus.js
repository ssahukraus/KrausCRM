var url = window.location.href;
if (url.indexOf('kr_Dealers')>0) {
  
    // here you hide the desired fields
    var field = document.getElementById("account_name");
    field.parentNode.remove();
    document.getElementById("account_name_label").remove();
} else {
    
    // here you hide the desired fields
    var field = document.getElementById("kr_dealers_cases_1_name");
    field.parentNode.remove();
    document.getElementById("kr_dealers_cases_1_name_label").remove();
}
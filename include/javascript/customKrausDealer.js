/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
 $( window ).load(function() {
// Run code
  if($("#partner_level_c :selected").val()== 1){
       setFieldRequired("kr_dealers_kr_dealers_1_name", true, "Parent partner is required.");
  }
  
});
 
function check_partner_level(e) {
    if (e.options[e.selectedIndex].value == 1) {
        setFieldRequired("kr_dealers_kr_dealers_1_name", true, "Parent partner is required.");
    } else {
        setFieldRequired("kr_dealers_kr_dealers_1_name", false);
    }
}

/*to set the field required*/
function setFieldRequired(fieldName, req, msgStr) {
    if (!msgStr) {
        msgStr = fieldName;
    }
    for (var i = 0; i < validate["EditView"].length; i++) {
        if (validate["EditView"][i][nameIndex] == fieldName) {
            validate["EditView"][i][msgIndex] = msgStr;
            validate["EditView"][i][requiredIndex] = req;
            break;
        }
    }
}  
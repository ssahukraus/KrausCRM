var arr;
function Check() {
	if (document.EditView.dropdown2_c || document.EditView.dropdown1_c) {
		var dropdown2_c = document.EditView.dropdown2_c.options;
		arr = new Array;
		for (i = 0; i < dropdown2_c.length; i++) {
			arr.push(dropdown2_c[i].value, dropdown2_c[i].text);
		}
	}
	initData();
}

function initData() {

	var current_p = document.EditView.dropdown1_c;
	var code_p = current_p.value;

	var current_v = document.EditView.dropdown2_c;
	var code_v = current_v.value;
	var code_v_idx = 0;

	var select_ticket = document.EditView.dropdown2_c.options;
	select_ticket.length = 0;
	var l = 0;
	for (k = 0; k < arr.length; k += 2) {
		if (arr[k].substr(0, 3) == code_p || arr[k] == '') {
			select_ticket.length++;
			select_ticket[select_ticket.length - 1].value = arr[k];
			select_ticket[select_ticket.length - 1].text = arr[k + 1];
			if (code_v == arr[k]) {
				code_v_idx = l;
			}
			l++;
		}
	}
	if (code_p == '') {
		select_ticket[select_ticket.length - 1].value = '';
		select_ticket[select_ticket.length - 1].text = 'Select from DD1';
	}
	document.EditView.dropdown2_c.selectedIndex = code_v_idx;
	;
}

if (window.addEventListener)
	window.addEventListener("load", Check, false)
else if (window.attachEvent)
	window.attachEvent("onload", Check)
else if (document.getElementById)
	window.onload = Check
<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class logic_hooks_class {

    function after_ui_frame_method($event, $arguments) {
		session_start();
        global $focus;
        global $sugar_config;
		$_SESSION['kr_flag']=1;
        $dealerId = $focus->id;

//        echo '<script src="custom_kraus_2.js"></script>';
        echo '<script type="text/javascript"> 
                        function custom_validation(e) {
                            if ($(e).is(":checked")) {
                                $(".violation_checkbox").prop("checked", true);
                            } else {
                                $(".violation_checkbox").prop("checked", false);
                            }
                        }
                        function custom_mailing(e) {
                            e.composePackage.body = "<html><head><title><title></head><body>";
                            e.composePackage.body += "<table border=' . "1" . ' style=' . "border-collapse:collapse" . '><tr><th>SKU</th><th>MAP</th><th>Link</th></tr>";
                            $.each($(".violation_checkbox"), function() {
                                if ($("#" + this.id).is(":checked")) {
                                    e.composePackage.body += "<tr>";
                                    e.composePackage.body += "<td style=' . "padding:10px;" . '>"+getMailBodyText(this,2)+"</td><td style=' . "padding:10px;" . '>"+getMailBodyText(this,3)+"</td><td style=' . "padding:10px;" . '>"+getMailBodyText(this,6)+"</td>";
                                    e.composePackage.body += "</tr>"
                                } else {
                                }
                            });
                            e.composePackage.body += "</table></body>";
                            SUGAR.quickCompose.init(e);

                        }

                        function getMailBodyText(elem, index) {

                            return $("#" + elem.id).closest("tr").children("td:nth-child(" + index + ")").text();
                        }
                     </script>';
    }

}

?>
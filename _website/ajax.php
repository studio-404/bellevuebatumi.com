<?php 
if(
    isset($_POST["type"])
){
    $type = $_POST["type"];

    switch ($type) {
        case "sendemail":
            if(
                empty($_POST["input_lang"]) &&                   
                empty($_POST["firstname"]) &&                   
                empty($_POST["phone"]) &&                   
                empty($_POST["hash"])                   
            ){
                $errorCode = 1;
                $successCode = 0;
                $errorText = l("allfields");
                $successText = "";                 
            }else{
                // do staff
                $errorCode = 0;
                $successCode = 1;
                $errorText = "";
                $successText = l("welldone");
            }

            $out = array(
                "Error" => array( 
                    "Code"=>$errorCode, 
                    "Text"=>$errorText,
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>$successCode, 
                    "Text"=>$successText,
                    "Details"=>""
                )
            );
            break;
    }
}
?>
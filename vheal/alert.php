<? 
require "conn.php";

if($conn==NULL){
    echo " connection failed";
}

$user_report=$_POST["reporttext"];

$text = "word word w.d. word!..";
    $split = preg_split("/[^\w]*([\s]+[^\w]*|$)/", $text, -1, PREG_SPLIT_NO_EMPTY);
    print_r($split);
    
    
echo($user_report);
echo("qwertyu");
?>
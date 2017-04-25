<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        echo "Watch the page reload itself in 10 second!";
    mysql_connect("localhost","root","")or die("cannot connect");
function getrandomroll($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = 'iit2013';
    for ($i = 0; $i < 3; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$random_roll = getrandomroll();
$sql1 = "select stu_roll_no from project.Student where stu_roll_no = $random_roll";

if($sql1){
    
    $roll_no = mysql_query($sql1);

    $gate_type = rand(0,1);
    if($gate_type==0) {
        $gate_type="regional_gate";
        $gate_id = rand(2,6);
    }
    else {
        $gate_type="building_gate";
        $gate_id = rand(1,18);
    }
    
}
    ?>
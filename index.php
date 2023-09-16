<?php

function add_title($fname,$lname){
    return "hello Mr $fname $lname";
}

// echo add_title("foda");

$first_name=["foda","osama","ahmed","omar","amr"];
$last_name=["samy","khtab","badr","sameh","kamel"];
echo '<pre>';
print_r(array_map("add_title",$first_name,$last_name));
print_r(array_map(fn($f,$l) => "hello mr $f $l", $first_name, $last_name));
echo '</pre>';


$nums =[
    5=>1,
    6=>2,
    7=>3,
    8=>4,
    9=>5
];

function check_nums($n1,$n2){
    return $n1 > 4 || $n2 > 4 ;
}

echo '<pre>';
// print_r(array_filter($nums,"check_nums"));
// print_r(array_filter($nums,"check_nums",ARRAY_FILTER_USE_KEY));
print_r(array_filter($nums,"check_nums",ARRAY_FILTER_USE_BOTH));
echo '</pre>';

echo "##########.<br>";

function add($carry,$item){
echo "$carry<br>";
echo "$item<br>";
echo $carry+$item . "<br>";

echo "##########.<br>";


    return $carry+$item
;
}
 $number1 = [ 10 ,20 ,30 ,40 ,60 ];


echo array_reduce($number1,"add",100)."<br>";

echo "##########.<br>";
// MATH FUNCTIONS ......................................#

echo abs(10)."<br>";
echo abs(0)."<br>";
echo abs(-20)."<br>";

echo rand()."<br>";
echo rand(10,20)."<br>";
echo mt_getrandmax()."<br>";

echo 10/5 ."<br>";
echo gettype(10/5)."<br>";

echo 11/5 ."<br>";
echo gettype(11/5)."<br>";

echo intdiv( 11,5 )."<br>";// integer division
echo gettype(intdiv(11,5))."<br>";

echo 11.5 % 5 ."<br>";
echo gettype(11.5 % 5)."<br>";

echo fmod(11.5 , 5)."<br>";// floating modulas
echo gettype(fmod(11.5 , 5))."<br>";


echo ceil(5.99) . "<br>";
echo ceil(5.49) . "<br>";
echo ceil(5.10) . "<br>";
echo ceil(5.01) . "<br>";

echo "##########.<br>";

echo floor(5.99) . "<br>";
echo floor(5.49) . "<br>";
echo floor(5.10) . "<br>";
echo floor(5.01) . "<br>";

echo "##########.<br>";
echo ceil(-5.99) . "<br>";// as -5 > -6
echo ceil(-5.49) . "<br>";
echo ceil(-5.10) . "<br>";
echo ceil(-5.01) . "<br>";

echo "##########.<br>";

echo floor(-5.99) . "<br>"; //as -6 < -5
echo floor(-5.49) . "<br>";
echo floor(-5.10) . "<br>";
echo floor(-5.01) . "<br>";

echo "##########.<br>";


echo round(5.99) . "<br>";
echo round(5.50) . "<br>";

echo "##########.<br>";
echo round(5.50,0,PHP_ROUND_HALF_DOWN) . "<br>";
echo round(4.50,0,PHP_ROUND_HALF_EVEN) . "<br>";
echo round(5.50,0,PHP_ROUND_HALF_EVEN) . "<br>";
echo round(5.50,0,PHP_ROUND_HALF_ODD) . "<br>";
echo round(4.50,0,PHP_ROUND_HALF_ODD) . "<br>";

echo "##########.<br>";
echo round(5.49) . "<br>";
echo round(5.10) . "<br>";

echo "##########.<br>";

echo round(5.99,1) . "<br>";//6
echo round(5.506,2) . "<br>";//5.51
echo round(5.49,1) . "<br>";//5
echo round(5.103,2) . "<br>";//5.10

echo "##########.<br>";

echo sqrt(16)."<br>";
echo sqrt(25)."<br>";
echo sqrt(100)."<br>";
echo "##########.<br>";
echo min(10,30,50,100)."<br>";
echo min([10,30,50,100])."<br>";
echo max(10,30,50,100)."<br>";
echo max([10,30,50,100])."<br>";

echo '<pre>';
print_r(min([1,3,5],[1,2,6])); //as 2 < 3
echo '</pre>';

echo '<pre>';
print_r(max([1,3,5],[1,2,6])); //as 3 > 2
echo '</pre>';


echo '<pre>';
print_r(filter_list()); 
echo '</pre>';
echo "##########.<br>";


echo filter_id("boolean") . "<br>";

$val=true ;

if(filter_var($val,FILTER_VALIDATE_BOOL))
// if(filter_var($val,258))
echo "this is true";
else
echo "this is false";

echo "<br>";
echo "##########.<br>";

$bool="foda";

var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));

echo "<br>";

$url="https://elzero.org/?id=100";//  /=> PATH ,,,,?id=100 =>query
var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE));
echo "<br>";
var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED));
var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED));

echo "<br>";
echo "###########<br>";
var_dump(filter_var($url,FILTER_VALIDATE_URL,
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));

echo "<br>";
echo "###########<br>";

$url="192.168.2.1";
var_dump(filter_var($url,FILTER_VALIDATE_IP));

echo "<br>";
echo "###########<br>";

$email="o@nn.sa";
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));
echo "<br>";
echo "###########<br>";
$int="100";
var_dump(filter_var($int,FILTER_VALIDATE_INT,["flags" => FILTER_NULL_ON_FAILURE,"options" =>["min_range" => 50 ,"max_range" =>100]]));

echo "<br>";
echo "###########<br>";
$float=100;
var_dump(filter_var($float,FILTER_VALIDATE_FLOAT,["flags" => FILTER_NULL_ON_FAILURE,"options" =>["min_range" => 50 ,"max_range" =>100]]));


echo "<br>";
echo "###########<br>";//     SANITIZATION ........................#

$emails="os@.      nn";
var_dump(filter_var($emails,FILTER_SANITIZE_EMAIL));


echo "<br>";
echo "###########<br>";

$ints="100A";
var_dump(filter_var(
    $ints,
    FILTER_SANITIZE_NUMBER_INT
));


echo "<br>";
echo "###########<br>";

$floats="1,950,168.345";
var_dump(filter_var(
$floats,
FILTER_SANITIZE_NUMBER_FLOAT,
["flags" =>FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]

));
echo "<br>";
echo "###########<br>";

$urls="https://el           zero.org/?id=100";
var_dump(filter_var($urls,FILTER_SANITIZE_URL));


echo "<br>";
echo "###########<br>";

// echo $_GET["num"];

// echo filter_input(INPUT_GET,"num",FILTER_VALIDATE_INT);
echo filter_input(INPUT_GET,"num",FILTER_SANITIZE_NUMBER_INT);


echo "<br>";
echo "###########<br>";


echo round( disk_total_space("c:") / 1024 / 1024 / 1024 ). "<br>";
echo "<br>";

var_dump(file_exists("foda.txt"));

echo "<br>";

echo filesize("foda.txt");


echo "<br>";
echo "###########<br>";


var_dump(is_dir("lessons"));

echo "<br>";

var_dump(is_dir("foda.txt"));
echo "<br>";

// mkdir("test/upload/files",0700,true); //make directory

// rmdir("test/upload/files");// remove (empty) directory

// rmdir("test/upload");

// rmdir("test");

// echo "<br>";
// echo "###########<br>";

// mkdir("y",0700);
// echo fileperms("y")."<br>";

// chmod("y",0644);// change mood

// clearstatcache();
// echo fileperms("y")."<br>";

// echo "<br>";
// echo "###########<br>";


echo "<br>";
echo "###########<br>";

echo basename(__file__)."<br>";
echo basename(__file__,".php")."<br>";


echo dirname(__file__,1)."<br>"; // directory name
echo dirname(__file__,2)."<br>";// shorter
echo dirname(__file__,3)."<br>"; // more shorter

echo realpath(__file__)."<br>";


echo '<pre>';
print_r(pathinfo(__file__));
echo '</pre>';

echo pathinfo(__file__)["extension"]."<br>";
echo pathinfo(__file__)["dirname"]."<br>";

echo "<br>";
echo "###########<br>";

echo pathinfo(__file__,PATHINFO_DIRNAME)."<br>";
echo pathinfo(__file__,PATHINFO_FILENAME)."<br>";
echo pathinfo(__file__,PATHINFO_EXTENSION)."<br>";

echo "<br>";
echo "###########<br>";

$handle= fopen("foda.txt","r");// r => read , r+ => read + write ,,,,, w => write(with delete old content) , w ++ => write + read , pointer at beginning
// (a) => for write ,pointer at the end ,,,,, (a+) => read + write ,,, (x) => creat + open for write , pointer at beginning
// echo fgets($handle,5);

echo "<br>";
echo "###########<br>";

// // echo fread($handle,1024);


// // fwrite($handle,"\r\n i love foda web school");

// echo "<br>";
// echo "###########<br>";

// $line =1 ;

// while(! feof($handle))// while file end of (variable)
// {
// echo "line $line => " .fgets($handle) ."<br>";
// $line++;
// }

// echo "<br>";
// echo "###########<br>";


// echo ftell($handle);

// echo "<br>";

// echo mb_strlen("foda\r\nweb","8bit");


// rewind($handle); // return file pointer to begin

// echo "<br>";

// echo ftell($handle);

// echo "<br>";


echo ftell($handle);
echo "<br>";
echo fgets($handle);

echo "<br>";
echo ftell($handle);
fseek($handle, -30,SEEK_END); // + there is also SEEK_CUR
echo "<br>";
echo fgets($handle);

fclose($handle); // must do this step after you finished file using

echo "<br>";
echo "###########<br>";
 

echo '<pre>';
 print_r(file("foda.txt"));
 echo '<pre>';

echo count(file("foda.txt"));



echo "<br>";
echo "###########<br>";


echo '<pre>';
 print_r(glob("*.*"));
 echo '<pre>';

// rename("testing.txt", "foda.txt" ); // rename only
// rename("testing.txt", "name of new folder/foda.txt" ) // rename + move to other place;
// rename("name of old folder /testing.txt", "name of new folder/testing.txt" ); moving only

// unlink("test.txt"); // remove from folder


echo get_include_path() . "<br>";

echo "<br>";
echo "###########<br>";

echo file_get_contents("foda.txt") . "<br>";


// file_put_contents("foda.txt","\r\ni love study computer",FILE_APPEND);
// echo file_put_contents("foda.txt","\r\ni love study computer",FILE_APPEND); //echo bytes num


echo "<br>";
echo "###########<br>";


echo date_default_timezone_get()."<br>";

echo date("Y-m-d H:i:s")."<br>";

date_default_timezone_set("Africa/Cairo");


echo date_default_timezone_get()."<br>";

echo date("Y-m-d H:i:s")."<br>";

$d = date_create("",timezone_open("Indian/Antananarivo"));

echo date_format($d,"Y-m-d H:i:s");

echo "<br>";
echo "###########<br>";

var_dump(checkdate(2,31,2010));
var_dump(checkdate(3,26,2003));

echo "<br>";
echo "###########<br>";

$dd = date_create(); //() => current date

echo date_format($dd,"y")."<br>";
echo date_format($dd,"Y")."<br>";

echo date_format($dd,"m")."<br>";
echo date_format($dd,"M")."<br>";
echo date_format($dd,"F")."<br>";

echo date_format($dd,"t")."<br>"; // number of days for month
echo date_format($dd,"d")."<br>";

echo date_format($dd,"D")."<br>";
echo date_format($dd,"l")."<br>"; //full day
echo date_format($dd,"j")."<br>"; // day without zeros

echo date_format($dd,"z")."<br>";// current day from 365 day 
echo date_format($dd,"S")."<br>";// st=> first day , nd=> second day ,rd=> third day

echo date_format($dd,"g a")."<br>";// 12 hour system
echo date_format($dd,"g A")."<br>";// 12 hour system
echo date_format($dd,"h a")."<br>";// 12 hour system

echo date_format($dd,"G ")."<br>";// 24 hour system
echo date_format($dd,"H ")."<br>";// 24 hour system

echo date_format($dd,"i ")."<br>";//minute
echo date_format($dd,"s ")."<br>";// second
echo date_format($dd,"u ")."<br>";// microsecond

echo "###########<br>";

echo date_format($dd,"Y/m/d H:i:s");

echo "<br>";

date_add($dd,date_interval_create_from_date_string("1 year 2 months 5 days"));

echo date_format($dd,"Y/m/d H:i:s");

echo "<br>";

date_sub($dd,date_interval_create_from_date_string("1 year 2 months 5 days"));

echo date_format($dd,"Y/m/d H:i:s");

echo "<br>";
echo "###########<br>";


date_modify($dd,"+1 year");

echo date_format($dd,"Y/m/d H:i:s");

echo "<br>";
echo "###########<br>";


date_default_timezone_set("Africa/Cairo");

echo time()."  seconds<br>"; //from 1 jan 1970 till now
echo time()/60 ."  minutes<br>";
echo time()/60 /60 ."  hours<br>";
echo time()/60 /60 /24 . "  days<br>";
echo time()/60 /60 /24/365 . "  years<br>";


echo "<br>";
echo "###########<br>";

echo '<pre>';
print_r(getdate());
echo '</pre>';

$t=getdate();

echo $t["year"];

echo "<br>";
echo "###########<br>";


echo '<pre>';
print_r(date_parse("1985-10-25 14:25:14"));
echo '</pre>';

echo "<br>";
echo "###########<br>";

$reg = date_create("2023-01-09");

$now = date_create();

$diff = date_diff($reg,$now);

echo '<pre>';
print_r($diff);
echo '</pre>';

echo "you are member for" . $diff->days . "days<br>";

echo "<br>";
echo "###########<br>";

echo date("Y-m-d H:i:s", strtotime("next friday"))."<br>";
echo date("Y-m-d H:i:s", strtotime("next year"))."<br>";
echo date("Y-m-d D H:i:s", strtotime("tomorrow"))."<br>";
echo date("Y-m-d M D H:i:s", strtotime("tomorrow",strtotime("2003-3-26")))."<br>";


echo "<br>";
echo "###########<br>";


// setcookie("style" , "dark", time() + 60*60*24*30,"/"); // ................................???
// setcookie("popup" , "done", strtotime("+ 1 month"));//...................................???
// echo $_COOKIE["style"];//............................???
// setcookie("style","light"); // .........................???


echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

if(isset($_COOKIE["style"])){
    echo $_COOKIE["style"];
}

echo "<br>";
echo "###########<br>";


























echo "<br>";
echo "###########<br>";

?>



<form action="" method="GET" >
<input type ="text" name="num">
<input type ="submit" value="send">
</form>








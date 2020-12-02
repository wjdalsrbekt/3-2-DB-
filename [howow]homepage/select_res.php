<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "project";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$index = $_GET['index'];
$sql = "SELECT * FROM reservation_table";
$result = $conn-> query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    	if($row["D_ID"]==$index){
			echo "예약 날짜: " . $row["RESERVATION_DATE"] . ",   예약 시간: " . $row["RESERVATION_TIME"] . "<br>";
		}
    }
}else{
    echo "예약된 시간이 없습니다.";
}

echo "<input style='width:350px;height:60px;font-size:30px;' type='date'>";
echo "<p>머리길이:";
echo "<input type='radio' name='hair' value='0' checked>짧은 머리";
echo "<input type='radio' name='hair' value='1' >긴 머리";
echo "</p>";
echo "서비스: <select name='service' size='1'>";
echo "<option value='1' selected>머리 커트</option>";
echo "<option value='3' >파마</option>";
echo "<option value='5' >염색</option>";
echo "<option value='7' >매직</option>";
echo "<option value='9' >아이롱펌</option>";
echo "<option value='11' >핫핀펌</option>";
echo "</select>";
echo "<button type ='button' style='width:100px;height:30px;font-size:10px;background-color:gray;color:white;'>예약하기</button>";


$conn->close();
?> 
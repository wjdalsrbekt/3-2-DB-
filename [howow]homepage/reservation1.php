<?php
	include_once 'dbconfig.php';
	$dbname="project";
	mysqli_select_db($conn, $dbname) or die('DB selection failed');

	//$ID=1+"SELECT ID from customer order by ID DESC limit 1;"
    //$ID='2002';
	$C=$_GET['user'];
	$select="select ID from customer where NAME='".$C."' LIMIT 1";
	$result=$conn->query($select);
	$row=mysqli_fetch_array($result);
	$C_ID=$row["ID"];
	$D_ID=1;
	$S_ID=$_GET['service'];
	$RESERVATION_DATE=$_GET['date'];
    $RESERVATION_TIME=$_GET['time'];
        //입력받은 데이터를 DB에 저장
		$select="select * from reservation_table where D_ID=".$D_ID." && RESERVATION_DATE='".$RESERVATION_DATE."'&& RESERVATION_TIME='".$RESERVATION_TIME."';";
		//$result2=$sql->fetch_array();
		$result2=$conn->query($select);
		//$result2=mysqli_query($select,$conn);
		$row=mysqli_fetch_array($result2);
		
		if($row>0)
		{
?>
			<script>
			alert("예약 불가능한 시간입니다.");
			history.back();
			//$result=false;
			//exit;
			//exit;
			</script>
<?php
		}
		else{
			$query = "insert into reservation_table(C_ID, D_ID, S_ID, RESERVATION_DATE,RESERVATION_TIME) values(".$C_ID.",".$D_ID.",".$S_ID.",'".$RESERVATION_DATE."','".$RESERVATION_TIME."');";
			$result = $conn->query($query);
			//저장이 됬다면 (result = true) 가입 완료
			if($result) {
?>    				
			<script>
			alert('예약 되었습니다.');
			location.replace("./homepage.php");
			</script>
<?php   
			}
			else{
?>       
				<script>
				alert("예약 실패했습니다.");
				</script>

<?php   
			}
		}
        mysqli_close($conn);
?>


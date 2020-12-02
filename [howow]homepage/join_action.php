<?php
	include_once 'dbconfig.php';
	$dbname="plant";
	mysqli_select_db($conn, $dbname) or die('DB selection failed');

	//$ID=1+"SELECT ID from customer order by ID DESC limit 1;"
    //$ID='2002';
	$NAME=$_GET['NAME'];
    $GENDER=$_GET['GENDER'];
    $PHONE=$_GET['PHONE'];
	$CITY=$_GET['CITY'];
	$GU=$_GET['GU'];
	$DONG=$_GET['DONG'];
	$CONTROL='0';

        //입력받은 데이터를 DB에 저장
		$select="select * from customer where PHONE='".$PHONE."'";
		//$result2=$sql->fetch_array();
		$result2=$conn->query($select);
		//$result2=mysqli_query($select,$conn);
		$row=mysqli_fetch_array($result2);
		if($row>=1)
		{
?>
			<script>
			alert("이미 회원가입 하였습니다.");
			history.back();
			//$result=false;
			//exit;
			//exit;
			</script>
<?php
		}
		else{
			$query = "insert into customer (NAME, GENDER, PHONE, CITY, GU, DONG,CONTROL) values ('$NAME', '$GENDER', '$PHONE', '$CITY', '$GU', '$DONG','$CONTROL')";
			$result = $conn->query($query);
			//저장이 됬다면 (result = true) 가입 완료
			if($result) {
?>    				
			<script>
			alert('가입 되었습니다.');
			location.replace("./index.php");
			</script>
<?php   
			}
			else{
?>       
				<script>
				alert("fail");
				</script>

<?php   
			}
		}
        mysqli_close($conn);
?>


<?php
    include_once 'dbconfig.php';
	$dbname="project";
	mysqli_select_db($conn, $dbname) or die('DB selection failed');
	
                $id = $_GET['name'];                      //Writer
                $content = $_GET['content'];              //Content
 
                $URL = './homepage.php';                   //return URL
 
 
                $query = "insert into notice (content) 
                        values('$content')";
 
 
                $result = $conn->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($conn);
?>


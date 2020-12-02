<?php
    include_once 'dbconfig.php';
   $dbname="project";

   mysqli_select_db($conn, $dbname) or die('DB selection failed');
                $index = $_GET['index'];
                $num = $_GET['item'];                      //Writer
                $name = $_GET['name'];              //Content
                $URL = './homepage.php';                   //return URL
            $query = "insert into request_table(C_ID,I_ID,NUM)
                        SELECT C.ID,I.ID,$num
                        FROM CUSTOMER AS C, ITEM AS I
                        WHERE C.NAME = '$name' AND I.ID=$index;";
 
                $result = $conn->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "물품 요청완료"?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($conn);
?>
<?php  
 include('./connection.php');


 if(isset($_POST["export_excel"]))  
 {  

      $output = '';  
      $sql = "SELECT * FROM tbl_notifications ORDER BY notification_id DESC";  
      $result = mysqli_query($conn, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  

      
           $output .= '  
                <table class="table" bordered="1">  
                     <tr>  
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Date</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {    
                $sql2 = "SELECT * FROM tbl_students WHERE student_id = '{$row['notification_student']}'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_array($result2);

                $output .= '  
                     <tr>  
                          <td>'. $row["notification_id"]. '</td>  
                          <td>'. $row2["student_firstname"] . ' ' . $row2['student_lastname'] .'</td>  
                          <td>'. $row2["student_stud_id"] . '</td>  
                          <td>'. $row["notification_title"].'</td>  
                          <td>'. $row["notification_message"].'</td>
                          <td>'. $row["notification_date"].'</td>
                     </tr>  
                ';
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=project_records.xls");  
           echo $output;  
      }  
 }

 ?>
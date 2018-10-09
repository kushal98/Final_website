echo "<table border='1'>
<tr>
<th>Course No.</th>
<th>Course Title</th>
<th>Course Subject</th>
<th>Course Hour</th>
</tr>";
        
     while( $row = $sql->fetch()){
             echo "<tr>";
             echo  "</td>".$row["course_no"]."</td>";
             echo  "</td>".$row["course_title"]."</td>";
             echo  "</td>".$row["course_sub"]."</td>";
             echo  "</td>".$row["course_hour"]."</td>";
             echo "</tr>";
     }
echo "</table>";



// output data of each row
        while($row = mysqli_fetch_assoc($query)) {
            echo "no: " . $row["course_no"]. " - Course Title: " . $row["course_title"]. " - Course Subject: " . $row["course_sub"]. 
            " - Course Hour: " . $row["course_hour"]."<br>";
        }

border: 1px solid black;border-collapse: collapse;padding: 15px;text-align: left;
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

import cv2

# input image dimensions
img_rows, img_cols = 128,128

for file in list:
    base = os.path.basename("../input/" + file)
    fileName = os.path.splitext(base)[0]
    im = cv2.imread("../input/" + file)   
    img = cv2.resize(im,(img_rows,img_cols))
    cv2.imwrite("../input/" + fileName +".jpeg",img)

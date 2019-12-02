<?php

$yooh = "SELECT * FROM form ORDER BY id DESC ;";
$result = mysqli_query($conn,$yooh);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
while($rows = mysqli_fetch_assoc ($result))
    echo '
    <tbody>
    <tr>
        <th scope="row">'.$rows['ID'].'</th>
        <td>'.$rows['name'].'</td>
        <td>'.$rows['phone'].'</td>
              
    </tr>
    </tbody>
        ';

}
?>    
<?php
// Create database connection using 
//include_once("config.php");

include 'koneksi.php';

// Fetch all users data from database
$result = mysqli_query($conn,"SELECT * FROM pegawai");
?>

<html>
<head>    
    <title>Data Pegawai</title>
</head>

<h2>CRUD DEMO</h2>
<br/>
<br/>
<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=2>

    <tr>
        <th>NO</th> <th>NIP</th> <th>NAMA</th> <th>ALAMAT</th> <th>EDIT</th>
    </tr>
    <?php
    $i=0;  
    while($user_data = mysqli_fetch_array($result)) { 
    $i++;        
    echo "<tr>
        <td><center>$i</center></td>
        <td>".$user_data['nip']."</td>
        <td>".$user_data['nama']."</td>
        <td>".$user_data['alamat']."</td>   
        <td> <a href='edit.php?nip=$user_data[nip]'><left>Edit</left></a> |
        <a href='delete.php?nip=$user_data[nip]'><Left>Delete</Left></a></td>";        
    
    }
    ?>
    </tr>
    </table>
</body>
</html>
<?php
include 'db.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM menuitems WHERE name LIKE '%$search%'";
   
}else {

$query = "SELECT * FROM menuitems";
}
$result = mysqli_query($conn,$query);
?>

<table  border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
      
     <?php
     while ($row = mysqli_fetch_assoc($result)){

     ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['category']?></td>
            <td><?php echo $row['price']?></td>
            <td>
                <?php
                if($row['isAvailable'] == 1){
                    echo "Available";
                }
                else{
                    echo "not available";
                }
                ?>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row['id'];?>">DELETE</a>
            </td>

            <td>
                <a href="edit.php?id=<?php echo $row['id']?>">EDIT</a>
            </td>
        </tr>
        
<?php
     }
?>



</table>

<form method='GET'>
    <input type="text"  name 'search'>
    <button type="submit">Search</button>
</form>

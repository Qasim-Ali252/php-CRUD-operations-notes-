<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu items </title>
</head>
<body>
     <h2>add menu items </h2>

     <form action="insert.php" method = "POST">
    
     <input type="hidden" name="id" value="<?php echo $row['id']?>">
     <input type="text"  name= "name" placeholder="item name value" value="<?php echo $row['name']?>">

     <br><br>
      
     <select name="category" value="<?php echo $row['category']?>">
        <option >Fast Food </option>
        <option >Drinks </option>
        <option >Dessert</option>
     </select>

     <br><br>
      
     <input type="number" step="10" name="price"  placeholder="price" value="<?php echo $row['price']?>">

     <br><br>

     <select    name="isAvailable" value="<?php echo $row['isAvailable']?>">
        <option value="1">Available</option>
        <option value="0"> Not Available</option>
     </select>

      <br><br>

      <button type="submit">Add item</button>
     </form>
</body>
</html>
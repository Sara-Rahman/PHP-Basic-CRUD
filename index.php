<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation Using PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>PHP CRUD Operation</h1><br>
    <?php if(isset($_SESSION['msg'])): ?>
        <div class="msg">
            <?php 
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
        </div>
        <?php endif ?>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phon</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_array($results)){ ?>
                 <tr>
                 <td><?php echo $row['name']; ?></td>
                 <td><?php echo $row['email'];?></td>
                 <td><?php echo $row['phone'];?></td>
                 <td><?php echo $row['address'];?></td>
                 <td>
                     <a href="#">Edit</a>
                 </td>
                 <td>
                     <a href="#">Delete</a>
                 </td>
             </tr>
          <?php 
         }
        ?>

           

        </tbody>
    </table>
    
</body>
<form method="post" action="server.php">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
        <div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="">
		</div>
        <div class="input-group">
			<label>Phone</label>
			<input type="text" name="phone" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</html>
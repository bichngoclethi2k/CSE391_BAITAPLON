<?php
 require_once('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
    <body>
        <div class="text-center">
            <form action="search.php" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
        
        if (isset($_GET['ok'])) 
        {
            
            $search = addslashes($_GET['search']);
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
               
                $query = "SELECT * from user WHERE ten like '%$search%'";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result);
                $num= mysqli_num_rows($result);
                if ($row > 0 && $search != "") 
                {
                     echo " ket qua tra ve voi tu khoa <b>$search</b>"; 
                   ?> 
                   <table  class="table table-striped ">
                        <tr>
                            <th>id</th>
                            <th>ho</th>
                            <th>ten</th>
                            <th>email</th>
                            <th>chude</th>
                            <th>noidung</th>
                            <th></th>
                            <th></th>
                        </tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['ho'];?></td>
                        <td><?php echo $row['ten'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['chude'];?></td>
                        <td><?php echo $row['noidung'];?></td>
                        <td><button onclick="window.open('edit.php?id=<?php echo $row['id']; ?>','_self')">edit</button></td>
                        <td><button onclick="window.open('del.php?id=<?php echo $row['id']; ?>','_self')">delete</button></td>
                    </tr>
                <?php
                    }
                
                 } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
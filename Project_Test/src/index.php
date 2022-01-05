<?php
    require "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class='container'>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Chi tiết
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="select.php">Thêm</a></li>
                                    <li><a class="dropdown-item" href="update.php">Sửa</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="delete.php">Xóa</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <body>
        <div class='container'>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">sex</th>
                    <th scope="col">age</th>
                    <th scope="col">bgroup</th>
                    <th scope="col">regdate</th>
                    <th scope="col">phone</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM blood_donor";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id'];  ?></th>
                                    <td><?php echo $row['name'];  ?></td>
                                    <td><?php echo $row['sex'];  ?></td>
                                    <td><?php echo $row['age'];  ?></td>
                                    <td><?php echo $row['bgroup'];  ?></td>
                                    <td><?php echo $row['regdate'];  ?></td>
                                    <td><?php echo $row['phone'];  ?></td>
                                </tr>
                    <?php
                            }
                            
                        }
                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </body>

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
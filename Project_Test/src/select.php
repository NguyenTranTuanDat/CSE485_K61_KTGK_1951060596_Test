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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class='container'>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Chi tiết
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
      <form action="process_select.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="nhập họ tên đầy đủ">
        </div>
        <div class="mb-3">
          <label for="sex" class="form-label">Sex</label>
          <input type="text" class="form-control" id="sex" name="sex" placeholder="nhập giới tính">
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" name="age" placeholder="nhập tuổi">
        </div>
        <div class="mb-3">
          <label for="bgroup" class="form-label">Bgroup</label>
          <input type="text" class="form-control" id="bgroup" name="bgroup" placeholder="nhập nhóm máu">
        </div>
        <div class="mb-3">
          <label for="regdate" class="form-label">Reg Date</label>
          <input type="date" class="form-control" id="regdate" name="regdate" placeholder="nhập ngày tháng năm đi hiến máu">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="number" class="form-control" id="phone" name="phone" placeholder="nhập số điện thoại">
        </div>  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
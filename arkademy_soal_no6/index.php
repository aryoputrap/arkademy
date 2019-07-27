<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>

  <body>
    <header>
      <div class="container">
            <img src="img/logo.svg">
            <h2>ARKADEMY BOOTCAMP</h2>
            <div class="clearfix"></div>
        </div>
    </header>

    <div class="container">
       <button id="button-add">ADD</button>

        <div class="bg-form">
        <form action="add.php" method="post" id="form">
          <div class="form-header">
            <div class="container">
              <h4>ADD DATA<h4>
                <button type="button" id="close">X</button>
              </div>
          </div>
          <div class="form-body">
            <div class="container">

        <input type="text" name="nama" id="name" placeholder="Name..." autofocus="on" required>
        <br><br>
        <select name="kerja" id="kerja" required>
          <option selected disabled>Work...</option>
          <option value="1">Frontend Dev</option>
          <option value="2">Backend Dev</option>
        </select>
        <br><br>
          <select name="gaji" id=gaji required>
          <option selected disabled>Salary...</option>
          <option value="1">10.000.000</option>
          <option value="2">12.000.000</option>
        </select>
        <br><br>
        <input type="hidden" name="id" id="id" class="id">
        <button type="submit" id="add">ADD</button>
        <div class="clearfix"></div>
        <br><br>
      </div>
    </div>
</form>
</div>

<div class="bg-alert">
            <div class="alert">
                <div class="alert-header">
                    <div class="container">
                        <button type="button" id="alert-close">X</button>
                    </div>
                </div>
                <div class="alert-body">
                    <h1><i class="fa fa-check"></i></h1>
                    <h2></h2>
                </div>
            </div>
        </div>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Work</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include("config/koneksi.php");
        $sql = mysqli_query($con,"SELECT*,name.name,work.work,category.salary FROM name,work,category \n"
                ."WHERE name.id_work=work.id AND name.id_salary=category.id");

                while($r=mysqli_fetch_array($sql)){
                  echo
              "<tr>
                  <td>$r[name]</td>
                  <td>$r[work]</td>
                  <td>$r[salary]</td>
                  <td>

                  <button style='background: transparent;border:
                                none' id='$r[id]' nama='$r[name]' class='doDelete'>
                                <i class='fa fa-trash' style='color: rgb(230, 109, 109)
                                ;font-size: 20px'></i></button>

                                <a href='#button-update' id='button-update' class='$r[id]'
                                nama='$r[name]' pekerjaan='$r[work]'
                                gaji='$r[salary]'><i class='fa fa-edit'
                                style='color: rgb(80, 212, 173);font-size: 20px'></i></a>

                  </td>
              </tr>
            ";
        }

       ?>
    </tbody>
  </table>
  <br><br><br>
</div>


<!-- Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/style.js"></script>
  </body>
</html>

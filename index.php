<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>統一發票管理系統</title>
  <link rel="stylesheet" href="./css/style.css">

  <style>
  
  </style>
</head>

<body>
  <?php include "./include/header.php"; ?>

  <body class="d-flex justify-content-between vw-100 flex-column">

    <form action="save_invoice.php" class="w-75" method="post">


      <div class="card my-5 mx-auto shadow alert-success border-success" style="max-width: 540px;">
        <div class="row ">
          <div class="col-md-4">
            <img src="https://picsum.photos/180/250?random=1">
          </div>

          <div class="form-row fr">
            <div class="card-body">

              <div class="form-group col-md-4">
                <label for="year">年份:</label>
                <select name="year">
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="period">期別:</label>
                <select name="period">
                  <option value="1">1,2月</option>
                  <option value="2">3,4月</option>
                  <option value="3">5,6月</option>
                  <option value="4">7,8月</option>
                  <option value="5">9,10月</option>
                  <option value="6">11,12月</option>
                </select>
              </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label for="code">字軌:</label>
                    <input type="text" class="form-control" name="code">
                    <label for="number">獎號:</label>
                    <input type="number" class="form-control" name="number" >
                  </div>
                  <div class="form-group">
                    <label for="expend">支出:</label>
                    <input type="number" class="form-control"  >
                  </div>
                  <div class="text-center form-group">
                    <button type="submit" class="btn btn-primary "> 儲存</button>
                    <button type="reset" class="btn btn-secondary ">重置</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

    </form>
  </body>
</html>
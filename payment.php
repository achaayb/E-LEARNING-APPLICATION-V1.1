
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
    </style>
    <style>
      @media screen and (max-width: 990px) {
        .hide-sm{
          display: none;
        }
      }
    </style>
    <style>
      ul li:hover {
          background-color: #00C1FE;
          border-radius: 5px;
      }
      ul li span:hover {
          background-color: #00C1FE;
          border-radius: 5px;
      }
  </style>
</head>
<body>
    <div class="d-flex">
    <?php include("nav.php")?>    
        <main style="max-height: 100vh;overflow-y:scroll;" class="w-100 px-4">
            <div class="w-100 py-2 d-flex justify-content-between align-items-center">
                <a class="text-muted"  href=""> <ion-icon name="arrow-back-circle-outline"></ion-icon> </a>
                <form class="d-flex align-items-center ">
                  <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                  <a class="text-muted" href=""><ion-icon name="search-outline"></ion-icon></a>
                </form>
              </div>


            

              <div class="hide-sm navbar navbar-light px-3">
                <div class="container-fluid">
                  <a class=" hide-sm navbar-brand fw-bold">Payment Details</a>
                  <form class="d-flex">
                    <a class=" mt-1 " href="#"><img src="sf.png" alt=""></a>
                  </form>
                </div>
              </div>
              
              <div class="container-fluid border-top border-2 ps-5" >

                <div class="hide-sm row row-cols-7 py-3 text-muted">
                  <div class="col">Name</div>
                  <div class="col">Payment Schedule</div>
                  <div class="col">Bill Number</div>
                  <div class="col">Balance amount</div>
                  <div class="col">Date </div>
                  <div class="col"></div>
                </div>


              <?php


$newfile = fopen("payment.json", "r");

$data = json_decode(fread($newfile,filesize("payment.json")),true);

fclose($newfile);

//foreach($data as $value) {
  for($i = 0 ;$i < count($data); $i++){

  echo '
  
<div class="row row-cols-7 py-3 '.(($i%2==0)?'bg-light':'').' my-2 me-2" >
<div class="col-12 col-lg" >'.$data[$i]['name'].'</div>
<div class="col-12 col-lg">'.$data[$i]['schedule'].'</div>
<div class="col-12 col-lg">'.$data[$i]['bn'].'</div>
<div class="col-12 col-lg">'.$data[$i]['ba'].'</div>
<div class="col-12 col-lg">'.$data[$i]['date'].'</div>
<div class="col-12 col-lg text-end">
  <a href="#"><img class="pe-2" src="view.png" alt=""></a>
</div>
</div>

  ';
  
}
?>
                
            </div>


        </main>
    </div>
</body>
</html>

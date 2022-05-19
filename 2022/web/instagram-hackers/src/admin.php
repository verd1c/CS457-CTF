<?php
session_start();
if (empty($_SESSION['login_user'])) {
	header('Location: /login.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Neon Glow - Bootstrap Theme</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    
  </head>
  <body>

  <div class="navbar-dark text-white">
    <div class="container">
      <nav class="navbar px-0 navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a href="#" class="pl-md-0 p-3 text-light text-mono">adm1n</a>
            <a href="index.html" class="pl-md-0 p-3 text-light">logout</a>
        </div>
      </nav>

    </div>
  </div>


  
<div class="container py-5 mb5">
  <h1 class="mb-5 text-mono">Transactions</h1>

  <div class="row">
    <div class="col-md-3">
        <form class="mb-3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </div>
        </form>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action"> <span class="font-weight-bold">Dashboard</span> </a>
          <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            Inbox
            <span class="badge badge-primary badge-pill ml-auto">14</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action">Orders</a>
          <a href="#" class="list-group-item list-group-item-action">Products</a>
          <a href="#" class="list-group-item list-group-item-action">Customers</a>
          <a href="#" class="list-group-item list-group-item-action">Reports</a>
        </div>
    </div>
    <div class="col-md-9">

      <div class="row d-none">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">
                Some quick example text to build on the card title
                and make up the bulk of the card's content.
              </p>
              <!--<a href="#!" class="btn btn-primary">Go somewhere</a>-->
            </div>
          </div>
        </div>
      </div>

      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Buyer</th>
      <th scope="col">Product</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">1</th>
      <td>
        <a href="#" class="text-grey">
          @alexandros_kopsialis 
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> 20k FOLLOWERS 
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">2</th>
      <td>
        <a href="#" class="text-grey">
          @dr_xtapodias 
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> 20k FOLLOWERS 
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">3</th>
      <td>
        <a href="#" class="text-grey">
          @j.touni 
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> 10k FOLLOWERS 
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">4</th>
      <td>
        <a href="#" class="text-grey">
          @snikthehustla
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> 100k FOLLOWERS
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">5</th>
      <td>
        <a href="#" class="text-grey">
          @vickykaya_ 
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> 20k FOLLOWERS 
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">6</th>
      <td>
        <a href="#" class="text-grey">
          @nikoleta_tsompanidou 
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> 5k FOLLOWERS 
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">7</th>
      <td>
        <a href="#" class="text-grey">
          @anastasia_giousef 
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> 5k LIKES PLAN 
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">8</th>
      <td>
        <a href="#" class="text-grey">
          @flag 
        </a>
      </td>
      <td>
        <i class="fa fa-flag-checkered"></i> CS457{Y0u_H4ck3d_th3_h4ck3rs}
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
    <tr>
      <th scope="row">9</th>
      <td>
        <a href="#" class="text-grey">
          @sofiapavlidi 
        </a>
      </td>
      <td>
        <i class="fab fa-instagram"></i> PREMIUM APP 
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary my-1 my-sm-0"><span class="fas fa-edit"></span></a>
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0"><span class="fas fa-trash"></span></a>
      </td>
    </tr>
  
  </tbody>
</table>

    </div>
  </div>

</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  </body>
</html>

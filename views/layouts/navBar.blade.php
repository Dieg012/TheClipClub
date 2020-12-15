<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">


</head>
<body>

  <!-- Navegador -->

  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('img/logo2.png') }}">
      </a>

         
    <div class="input-group">
     
      <div class="input-group-append" id="button-addon4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Login</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop2">Sign In</button>
      </div>
    </div>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Idioma
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Euskera</a>
        <a class="dropdown-item" href="#">English</a>
      </li>
  </nav>

    <!-- Modal Y Login -->

  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog"  id="loginModal">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login Area</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="loginModalBody"> 
                <div class="from-label-group">
                  <div class="col-md-9 mb-3">
                    <label for="validationDefault04">Email</label>
                    <input type="text" class="form-control" id="validationDefault04" required>
                  </div>
                  <div class="col-md-9 mb-3">
                    <label for="validationDefault05">Password</label>
                    <input type="text" class="form-control" id="validationDefault05" required>
                  </div>
                </div>
                    <button id="send" class="btn btn-primary btn-block mt-3" type="submit">Login</button>       
        </div>
        <div class="modal-footer">
          <p class="col-9 text-left">¿Aún no eres parte the The Clip Club?</p>
          <button type="button" class="btn btn-primary"  data-toggle="modal"  data-target="#staticBackdrop2">Registrate</button>
        </div>
      </div>
    </div>
</div>

    <!-- Modal Y Registro -->

     

<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel2">Register Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <form>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault01">Username</label>
              <input type="text" class="form-control" id="validationDefault01" value="" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault03">Phone number</label>
              <input type="text" class="form-control" id="validationDefault03" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationDefault04">Email</label>
              <input type="text" class="form-control" id="validationDefault04" required>
            </div>
       
          </div>
          <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="validationDefault05">Password</label>
              <input type="text" class="form-control" id="validationDefault05" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault05">Confirm Password</label>
              <input type="text" class="form-control" id="validationDefault05" required>
            </div>

          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
            <label for="customFile">Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose an Image for your Username</label>
              </div>
            </div>
          </div>
         
            <label for="custom-control-input">Role</label>
            <div class="col-md-12 mb-3">
            <div class="form-row">
              
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input " id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Director</label>
              </div>
              <div class="custom-control custom-checkbox ml-4">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Actor</label>
              </div>
              <div class="custom-control custom-checkbox ml-4">
                <input type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3">Screen Writer</label>
              </div>
              <div class="custom-control custom-checkbox ml-4">
                <input type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4">Technician</label>
              </div>
              </div>
          </div>
        
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationDefault01">Bio</label>
              <textarea type="text" class="form-control" id="validationDefault01" value="" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div>

  
              <button type="submit" class="btn btn-primary">Sumbit</button>
          
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
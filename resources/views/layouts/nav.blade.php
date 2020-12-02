<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <a class="navbar-brand" href="/">UC System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link" href="/students">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/books" >Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/equipments" >Equipments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/devices" >Devices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lockers" >Lockers</a>
            </li>

            <!--dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Borrowed Sections
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/borrowed_devices">Borrowed Devices</a>
                  <a class="dropdown-item" href="/rental_history/books">Borrowed Books</a>
                  <a class="dropdown-item" href="/borrowed_equipments">Borrowed Equipments</a>
                  <a class="dropdown-item" href="/locker_rents">Locker Renting</a>
              </div>
          </li>
      </ul>

      <ul class="navbar-nav ml-auto mt-2 mt-md-0">
        <div class="btn-group dropleft">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/users">Account</a>
            <a class="dropdown-item" href="/login">Login</a>
            <a class="dropdown-item" href="/logout">Logout</a>
            <a class="dropdown-item" href="/register">Register</a> 
                  
        </div>
    </div>
</ul>
</div>
</div>



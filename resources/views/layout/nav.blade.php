<div class="container-fluid bg-dark">

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="#">E-Commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jobs
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="{{route('cats.index')}}">Catogery</a></li>
                    <li><a class="dropdown-item" href="#">Products</a></li>
                    <li><hr class="dropdown-driver"></li>
                    <li><a class="dropdown-item" href="#">Users</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('user-logout')}}">Logout</a>
            </li>
          </ul>

        </div>
    </nav>

</div>

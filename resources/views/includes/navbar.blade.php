<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{config('app.title', 'Larvel_app')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class=" navbar-nav me-auto  mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home
              
              {{-- <lord-icon
                 src="https://cdn.lordicon.com/qeltvbrs.json"
                 trigger="loop"
                 delay="500"
                 state="loop-smoke"
                 style="width:30px;height:30px">
             </lord-icon>
        
         --}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true"></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-Primary" type="submit">
            
            <lord-icon
              src="https://cdn.lordicon.com/jtkfemwz.json"
              trigger="click"
              style="width:23px;height:23px">
            </lord-icon>
           
          </button>
        </form>
      </div>
    </div>
  </nav>
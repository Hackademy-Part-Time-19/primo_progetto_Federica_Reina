<div>
   
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" style="padding: 5px 10px 10px 20px; border-bottom: solid; border-width:1px;margin-left:0;">
      <a class="navbar-brand" href="{{ route('home')}}" style="font-size: 25px;"><b>BLOG</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
          <li class="nav-item" style="margin-left: 20px;">
            <a class="nav-link active" aria-current="page" href="{{ route('home')}} ">Home</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articoli')}} ">Articoli</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('article.create')}} ">Scrivi il tuo articolo</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contatti')}} ">Contatti</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" style="margin-right:10px" type="submit">Search</button>
  
  
        </form>
      </div>
    </div>
  </nav>
</div>
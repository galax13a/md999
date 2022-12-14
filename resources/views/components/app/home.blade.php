<div>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <h3 class="masthead-brand"> {{ config('app.name', 'Laravel') }}</h3>
         
          </div>
        </header>
  <x-sidebar.inicio>  </x-sidebar.inicio>

  <div class="d-flex flex-row-reverse bd-highlight">
    <div class="p-2 bd-highlight">
        <a href="#" class="">Subcription</a>
        <br>
        <main role="main" class="inner cover">
            <h1 class="cover-heading">Home # Dashboard</h1>
            <p class="lead"> {{ config('app.name', 'Laravel') }} is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-danger shadow-lg">Download App v1.0</a>
            </p>
    </div>
    <div class="p-2 bd-highlight">Fans</div>
    <div class="p-2 bd-highlight">Artista</div>
  </div>

        </main>
  
        <footer class="mastfoot mt-auto">
          <div class="inner">
            <p>Development  for <a href="#">{{ config('app.name', 'Laravel') }} </a>, by <a href="#">@App Tecnology ┬ęCopyright /  2020-2022</a>.</p>
          </div>
        </footer>
      </div>
      <style>
        /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #333;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-pack: center;
  -webkit-box-pack: center;
  justify-content: center;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
      </style>
</div>
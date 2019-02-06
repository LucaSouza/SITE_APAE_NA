<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APAE DE NOVA ANDRADINA - MS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="{{ mix('/css/material.min.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/style.css') }}" rel="stylesheet">


    </head>

    <body>
      <header>
        <section class="cd-slider">
          <ul>
            <li data-color="#FF384B">
              <div class="content" style="background-image:url({{asset('img/01.jpg')}})">
                <blockquote>
                  <p>APAE DE NOVA ANDRADINA.</p>
                  <span>apae de nova andradina</span>
                </blockquote>
              </div>
            </li>
            <li data-color="#FF9C00">
              <div class="content" style="background-image:url({{asset('img/02.jpg')}})">
                <blockquote>
                  <p>APAE DE NOVA ANDRADINA.</p>
                  <span>apae de nova andradina</span>
                </blockquote>
              </div>
            </li>
            <li data-color="#002AFF">
              <div class="content" style="background-image:url({{asset('img/03.jpg')}})">
                <blockquote>
                  <p>APAE DE NOVA ANDRADINA.</p>
                  <span>apae de nova andradina</span>
                </blockquote>
              </div>
            </li>
            <li data-color="#002AFF">
              <div class="content" style="background-image:url({{asset('img/04.jpg')}})">
                <blockquote>
                  <p>APAE DE NOVA ANDRADINA.</p>
                  <span>apae de nova andradina</span>
                </blockquote>
              </div>
            </li>
          </ul>
          <nav>
            <div><a class="prev" href="#"></a></div>
            <div><a class="next" href="#"></a></div>
          </nav>
        </section>
        <div class="mdl-grid container-superior-menu">
          <div class="mdl-cell mdl-cell--8-col">
            <span class="mdl-layout-title">
              <a href="#">
                <img src="{{asset('img/novaMarca.png')}}" alt="" id="logo">
              </a>
            </span>
          </div>

            <div class="mdl-cell mdl-cell--2-col doacao">
              <a href="#">DOAÇÃO</a>
            </div>
            <div class="mdl-cell mdl-cell--2-col voluntario">
              <a href="#">SER VOLUNTÁRIO</a>
            </div>

        </div>
      </header>
      <main>
        <h1>titulo</h1>
      </main>
    </body>
    <script src="{{ mix('/js/jquery.min.js') }}"></script>
    <script src="{{ mix('/js/material.min.js') }}"></script>
    <script src="{{ mix('/js/js-slide-principal.js') }}"></script>
</html>

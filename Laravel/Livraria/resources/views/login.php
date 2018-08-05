<html>
  <head>
      <link href="/css/app.css" rel="stylesheet">
      <title>Controle de estoque</title>
  </head>
  <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-primary text-white">
      <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><svg class="d-block" width="36" height="36" viewbox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false"><title>Books</title><path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"/><path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"/></svg>
      </a>
      <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3  bg-light text-dark"  href="/docs/4.1/getting-started/download/">Logout</a>
    </header>

    <h2>Login</h2>
    <form action="../controller/login.php" method="post">
      <table class="table">
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
          <td>Senha</td>
          <td><input type="password" name="senha" class="form-control"></td>
        </tr>
        <tr>
          <td><button class="btn btn-primary">Login</button></td>
        </tr>
      </table>
    </form>


    <p><cite>"Pouco conhecimento faz com que as pessoas se sintam orgulhosas.
      Muito conhecimento, que se sintam humildes."</cite> Leonardo da Vinci</p>

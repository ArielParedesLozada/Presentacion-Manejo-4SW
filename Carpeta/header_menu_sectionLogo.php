<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    CodeCrafters
  </title>
  <!-- CSS files -->
  <link href="../dist/css/tabler.min.css?1684106062" rel="stylesheet" />
  <link href="../dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
  <link href="../dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
  <link href="../dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
  <link href="../dist/css/demo.min.css?1684106062" rel="stylesheet" />
  <link href="../css/styles.css" rel="stylesheet" />


  </style>
  <style>
    @import url("https://rsms.me/inter/inter.css");

    :root {
      --tblr-font-sans-serif: "Inter Var", -apple-system, BlinkMacSystemFont,
        San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
  <style>
    .error-container {
      display: flex;
      align-items: center;
    }

    .error {
      color: crimson;
      font-size: smaller;
      margin-right: 10px;
      /* Ajusta el margen entre el ícono y el mensaje de error según sea necesario */
    }

    .error-icon {
      color: crimson;
    }
  </style>

  <script src="https://kit.fontawesome.com/e6b9a81de9.js" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <script src="../dist/js/demo-theme.min.js?1684106062"></script>
  <div class="page">
    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
          aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 style="font-family: cursive;"
          class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          CodeCrafters
        </h1>

        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list"></div>
          </div>
          <div class="d-none d-md-flex">
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
              </svg>
            </a>
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </header>
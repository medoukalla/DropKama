<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" />
  <title>Dropkamas</title>
  <style>
    /* Error page style  */
    .error-page {
      background-color: var(--white-clr);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      width: 100%;
    }

    .error-page .error-heading {
      font-size: 150px;
      font-weight: 800;
      color: var(--orange-clr);
    }

    .error-page .error-type {
      font-size: 30px;
      font-weight: 600;
      color: var(--body-clr);
    }

    .error-page .error-msg {
      width: 50%;
      text-align: center;
      margin-top: 20px;
    }

    .error-page .back-home ul {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 20px;
      margin-bottom: 0;
    }

    .error-page .back-home ul li a {
      color: var(--orange-dark-clr);
    }

    .error-page .back-home ul li a:hover {
      text-decoration: underline;
    }

    /* Responsive */
    @media screen and (max-width: 576px) {
      .error-page .error-heading {
        font-size: 80px;
      }

      .error-page .error-type {
        font-size: 18px;
        font-weight: 700;
      }

      .error-page .error-msg {
        width: 100%;
      }

      .back-home ul {
        flex-direction: column;
        gap: 10px !important;
      }

      .error-page .error-msg {
        width: 90%;
        font-size: 13px;
      }
    }
  </style>
</head>

<body>
  <div class="error-page">
    <div class="error-heading">Oops!</div>
    <div class="error-type">401 - Non Autorisé</div>
    <div class="error-msg">
      Nous sommes désolés, mais vous n'êtes pas autorisé à accéder à cette page. Veuillez vous connecter et vous assurer que vous avez les autorisations nécessaires. Si le problème persiste, veuillez contacter le support.
    </div>
    <div class="back-home">
      <ul>
        <li><a href="{{ route('frontend.index') }}">Accueil</a></li>
        <li><a href="{{ route('frontend.achat') }}">Acheter Kamas</a></li>
        <li><a href="{{ route('frontend.vendre') }}">Vendre Kamas</a></li>
        <li><a href="{{ route('frontend.echange') }}">Echanger Kamas</a></li>
      </ul>
    </div>
  </div>

  <!-- Bootstrap script -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
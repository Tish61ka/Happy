<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");

    @font-face {
      font-family: 'Clicker Script';
      src: local('Clicker Script'),
        url(/fonts/ClickerScript-Regular.ttf);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style-type: none;
      text-decoration: none;
      background-repeat: no-repeat;
    }

    h1,
    h2,
    h3,
    h4,
    p,
    a {
      font-family: "Comfortaa", sans-serif;
    }

    a {
      cursor: pointer;
    }

    html {
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    :root {
      --main-bg-color: #ffffff;
      --second-bg-color: #ECE4FE;
      --btn-color: #B09CD7;
      --main-txt-color: #000000;
      --second-txt-color: #ffffff;
    }

    body {
      background-color: var(--main-bg-color);
    }

    .container {
      width: 1560px;
      margin: 0 auto;
      padding-top: 25px;
    }

    @media screen and (max-width: 450px) {
      .container {
        width: 100vw;
        margin: 0 auto;
        padding-top: 5px;
      }
    }

    @media screen and (max-width: 420px) {
      main {
        width: 100%;
      }
    }
  </style>
  @vite('resources/css/app.css')
</head>

<body id="app">
  @vite('resources/js/app.js')
</body>

</html>
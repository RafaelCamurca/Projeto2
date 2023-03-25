<?php
  session_start();
  include_once("../php/bancodedados/conexao.php");
  if(isset($_SESSION['usuarioNome']) && !empty($_SESSION['usuarioNome'])):
?>
<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/logoicon1.ico">
  <title>For Your Church</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
  <link href="sidebars.css" rel="stylesheet">
</head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
      </symbol>
      <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
      </symbol>
      <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
      </symbol>
      <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </symbol>
      <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
      </symbol>
      <symbol id="collection" viewBox="0 0 16 16">
        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
      </symbol>
      <symbol id="calendar3" viewBox="0 0 16 16">
        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </symbol>
      <symbol id="chat-quote-fill" viewBox="0 0 16 16">
        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
      </symbol>
      <symbol id="cpu-fill" viewBox="0 0 16 16">
        <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
        <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
      </symbol>
      <symbol id="gear-fill" viewBox="0 0 16 16">
        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
      </symbol>
      <symbol id="speedometer" viewBox="0 0 16 16">
        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
      </symbol>
      <symbol id="toggles2" viewBox="0 0 16 16">
        <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
        <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
        <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
      </symbol>
      <symbol id="tools" viewBox="0 0 16 16">
        <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
      </symbol>
      <symbol id="chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </symbol>
      <symbol id="geo-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
      </symbol>
    </svg>
    <main class="d-flex flex-nowrap">
      <h1 class="visually-hidden">Sidebars Principal</h1>

      <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button" viewBox="0 0 16 16">
            <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h8A1.5 1.5 0 0 1 11 1.5v2A1.5 1.5 0 0 1 9.5 5h-8A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-8z"/>
            <path d="m7.823 2.823-.396-.396A.25.25 0 0 1 7.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <span class="fs-4">&nbsp;&nbsp;Menu</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16"><path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/></svg>
                Secretaria</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="secretaria/documentos/documentos.php">Documentos</a></li>             
              <li><a class="dropdown-item" href="secretaria/listademembro.php">Lista de Membros</a></li>
              <li><a class="dropdown-item" href="secretaria/cadastromembro.php">Registrar Membro</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16"><path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/></svg>
                Tesouraria</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="tesouraria/lancamento.php">Lançamento</a></li>
              <li><a class="dropdown-item" href="#">Histórico</a></li>
            </ul>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>
          &nbsp;&nbsp;
          <?php echo $_SESSION['usuarioNome'] ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Configuração</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../php/loginelogout/logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
      <div class="b-example-divider b-example-vr"></div>
      <div class="svg" style="margin-left: 200px; margin-top: 170px;">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="700.32677" height="350.8366" viewBox="0 0 979.32677 424.8366" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M993.71816,412.83936H419.142a9.19888,9.19888,0,0,0,0,18.39776H435.417V651.3026a9.19888,9.19888,0,0,0,18.39776,0l.1398-220.06548h461.1557l42.52,220.06548a9.19887,9.19887,0,1,0,18.39775,0l2.67633-220.06548h15.01383a9.19888,9.19888,0,0,0,0-18.39776Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M518.73716,371.85047v38.9547H421.141a19.48915,19.48915,0,1,1-1.35523-38.95474q.67739-.02358,1.35523,0Z" transform="translate(-110.33661 -237.5817)" fill="#f2f2f2"/><path d="M521.13449,410.50552a1.49881,1.49881,0,0,1-1.49822,1.49822H419.40273a20.52615,20.52615,0,0,1,0-41.05229H519.63627a1.49827,1.49827,0,1,1,0,2.99653H419.40273a17.52964,17.52964,0,0,0,0,35.05924H519.63627A1.49883,1.49883,0,0,1,521.13449,410.50552Z" transform="translate(-110.33661 -237.5817)" fill="#6c63ff"/><path d="M518.73716,380.84H413.85905a.29966.29966,0,0,1-.00552-.59929H518.73716a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M518.73716,388.03169H413.85905a.29966.29966,0,0,1-.00552-.59929H518.73716a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M518.73716,395.22332H413.85905a.29966.29966,0,0,1-.00552-.59929H518.73716a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M518.73716,402.41487H413.85905a.29966.29966,0,0,1-.00552-.59929H518.73716a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M500.33941,330.80932v38.95474H402.74324a19.48915,19.48915,0,0,1-1.35522-38.95474q.67737-.02358,1.35522,0Z" transform="translate(-110.33661 -237.5817)" fill="#f2f2f2"/><path d="M502.73673,369.46442a1.49885,1.49885,0,0,1-1.49822,1.49826H401.005a20.52614,20.52614,0,0,1,0-41.05229H501.23851a1.49826,1.49826,0,1,1,0,2.99652H401.005a17.52964,17.52964,0,0,0,0,35.05928H501.23851A1.49884,1.49884,0,0,1,502.73673,369.46442Z" transform="translate(-110.33661 -237.5817)" fill="#3f3d56"/><path d="M500.33941,339.79886H395.4613a.29966.29966,0,0,1-.00553-.59929H500.33941a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M500.33941,346.99054H395.4613a.29966.29966,0,0,1-.00553-.59929H500.33941a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M500.33941,354.18217H395.4613a.29966.29966,0,0,1-.00553-.59929H500.33941a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M500.33941,361.37376H395.4613a.29966.29966,0,0,1-.00553-.59929H500.33941a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M613.87355,550.68347V516.71838a5.661,5.661,0,0,0-5.66085-5.66085H479.4284a5.661,5.661,0,0,0-5.66084,5.66085v33.96509Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><rect x="363.43092" y="325.83868" width="140.10602" height="43.87158" fill="#ccc"/><path d="M473.76756,620.02887V653.994a5.661,5.661,0,0,0,5.66084,5.66084H608.2127a5.661,5.661,0,0,0,5.66085-5.66084V620.02887Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><circle cx="432.77633" cy="294.70402" r="4.24564" fill="#fff"/><circle cx="432.77633" cy="351.3125" r="4.24564" fill="#fff"/><circle cx="433.00385" cy="406.72228" r="4.24564" fill="#fff"/><path d="M597.989,472.33053v38.9547H500.39287a19.48916,19.48916,0,0,1-1.35647-38.9547q.678-.02358,1.35647,0Z" transform="translate(-110.33661 -237.5817)" fill="#f2f2f2"/><path d="M600.38637,510.98558a1.49881,1.49881,0,0,1-1.49822,1.49822H498.65461a20.52615,20.52615,0,0,1-.0247-41.05229H598.88815a1.49827,1.49827,0,1,1,0,2.99653H498.65461a17.52963,17.52963,0,0,0,0,35.05923H598.88815A1.49885,1.49885,0,0,1,600.38637,510.98558Z" transform="translate(-110.33661 -237.5817)" fill="#3f3d56"/><path d="M597.989,481.32H493.111a.29966.29966,0,0,1-.00553-.59929H597.98913a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M597.989,488.51175H493.111a.29966.29966,0,0,1-.00553-.59929H597.98913a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M597.989,495.70338H493.111a.29966.29966,0,0,1-.00553-.59929H597.98913a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M597.989,502.89493H493.111a.29966.29966,0,0,1-.00553-.59929H597.98913a.29966.29966,0,0,1,0,.59929Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M483.36747,317.81415H438.90162a2.74745,2.74745,0,0,0-1.21689.28306l-11.22288,5.61835a2.0452,2.0452,0,0,0,0,3.76443l11.22288,5.61835a2.74718,2.74718,0,0,0,1.21689.28306h44.46585a2.33381,2.33381,0,0,0,2.4628-2.16532v-11.2367A2.3338,2.3338,0,0,0,483.36747,317.81415Z" transform="translate(-110.33661 -237.5817)" fill="#3f3d56"/><path d="M485.83027,319.97947v11.2367a2.33383,2.33383,0,0,1-2.4628,2.16532h-8.8589V317.81415h8.8589A2.33383,2.33383,0,0,1,485.83027,319.97947Z" transform="translate(-110.33661 -237.5817)" fill="#6c63ff"/><path d="M216.78083,537.99332a35.33951,35.33951,0,0,0,34.12552-6.01134c11.95262-10.03214,15.70013-26.56,18.74934-41.864q4.50949-22.63308,9.019-45.26617l-18.88217,13.00153c-13.57891,9.34993-27.46375,18.99939-36.86572,32.54233S209.42082,522.42587,216.975,537.08" transform="translate(-110.33661 -237.5817)" fill="#e6e6e6"/><path d="M218.39489,592.79741c-1.91113-13.92071-3.87625-28.0202-2.53572-42.09016,1.19057-12.4956,5.00277-24.70032,12.764-34.70734a57.73582,57.73582,0,0,1,14.81307-13.42309c1.48131-.935,2.84468,1.41257,1.36983,2.34348a54.88844,54.88844,0,0,0-21.71125,26.19626c-4.72684,12.02273-5.48591,25.12848-4.67135,37.90006.4926,7.72345,1.53656,15.39627,2.58859,23.05926a1.40615,1.40615,0,0,1-.94781,1.66928,1.3653,1.3653,0,0,1-1.6693-.94781Z" transform="translate(-110.33661 -237.5817)" fill="#f2f2f2"/><path d="M236.80246,568.16434a26.01425,26.01425,0,0,0,22.6665,11.69871c11.47417-.54466,21.04-8.55293,29.651-16.15584l25.46969-22.48783-16.85671-.80672c-12.12234-.58011-24.55745-1.12124-36.10356,2.617s-22.19457,12.73508-24.30583,24.68624" transform="translate(-110.33661 -237.5817)" fill="#e6e6e6"/><path d="M212.99392,600.79976c9.19853-16.27621,19.86805-34.36538,38.93262-40.14695A43.445,43.445,0,0,1,268.3022,558.962c1.73863.14991,1.30448,2.82994-.431,2.6803a40.36111,40.36111,0,0,0-26.133,6.91386c-7.36852,5.01554-13.10573,11.98848-17.96161,19.383-2.97439,4.52936-5.63867,9.25082-8.30346,13.966-.85161,1.50687-3.34078.41915-2.47922-1.10534Z" transform="translate(-110.33661 -237.5817)" fill="#f2f2f2"/><path d="M198.25523,617.93168a19.69836,19.69836,0,0,1,12.0709-16.49847v-9.40956h15.782v9.70608a19.68812,19.68812,0,0,1,11.41362,16.202l3.711,43.13835H194.54417Z" transform="translate(-110.33661 -237.5817)" fill="#f2f2f2"/><path d="M734.973,411.955l-4.69488-1.97685-3.22067-23.53551h-42.889l-3.491,23.43936-4.20031,2.10013a.99744.99744,0,0,0,.44611,1.88955h57.66283A.99739.99739,0,0,0,734.973,411.955Z" transform="translate(-110.33661 -237.5817)" fill="#e6e6e6"/><path d="M811.1898,389.574H600.50692a4.174,4.174,0,0,1-4.16467-4.174V355.69092H815.35446V385.4A4.17408,4.17408,0,0,1,811.1898,389.574Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/><path d="M815.57469,369.73213H596.15V242.61337a5.0375,5.0375,0,0,1,5.03186-5.03167h209.361a5.03755,5.03755,0,0,1,5.03191,5.03167Z" transform="translate(-110.33661 -237.5817)" fill="#3f3d56"/><path d="M802.46932,360.50584h-193.214a3.88344,3.88344,0,0,1-3.87919-3.87908V250.68707a3.88365,3.88365,0,0,1,3.87919-3.87932h193.214a3.88366,3.88366,0,0,1,3.8792,3.87932V356.62676A3.88345,3.88345,0,0,1,802.46932,360.50584Z" transform="translate(-110.33661 -237.5817)" fill="#fff"/><path d="M751.57964,397.88662a11.6159,11.6159,0,0,1,17.666,2.27241l26.13446-4.64642,6.69716,15.19317-36.99908,6.04328a11.67883,11.67883,0,0,1-13.49855-18.86244Z" transform="translate(-110.33661 -237.5817)" fill="#ffb6b6"/><path d="M775.77611,417.286l27.24571-.33963,3.44882-.04668,55.43253-.69843s15.05312-14.3609,28.16068-29.1465l-1.83719-13.28833A54.29159,54.29159,0,0,0,870.023,340.1519C851.24988,352.696,840.363,377.52559,840.363,377.52559l-34.37018,8.22071-3.43848.82227-21.35608,5.10326Z" transform="translate(-110.33661 -237.5817)" fill="#6c63ff"/><path d="M915.25011,498.96167H864.39249c0,2.17915-55.59414,3.94772-55.59414,3.94772a20.30858,20.30858,0,0,0-3.33166,3.15818,19.59694,19.59694,0,0,0-4.58,12.63271v3.15818a19.74588,19.74588,0,0,0,19.73861,19.73861h94.62478a19.75579,19.75579,0,0,0,19.73862-19.73861v-3.15818A19.76607,19.76607,0,0,0,915.25011,498.96167Z" transform="translate(-110.33661 -237.5817)" fill="#e4e4e4"/><rect x="747.4019" y="303.23122" width="20.52816" height="118.48951" fill="#e4e4e4"/><path d="M799.31222,658.58132c0,2.218,31.10721.858,69.47992.858s69.47991,1.36012,69.47991-.858-31.1072-19.807-69.47991-19.807S799.31222,656.36323,799.31222,658.58132Z" transform="translate(-110.33661 -237.5817)" fill="#e4e4e4"/><polygon points="675.186 407.461 659.908 407.46 652.64 348.531 675.188 348.532 675.186 407.461" fill="#ffb6b6"/><path d="M789.41863,659.852l-49.2623-.00183v-.62309a19.17528,19.17528,0,0,1,19.17426-19.17395h.00122l30.08773.00122Z" transform="translate(-110.33661 -237.5817)" fill="#2f2e41"/><polygon points="630.031 407.461 614.753 407.46 607.485 348.531 630.033 348.532 630.031 407.461" fill="#ffb6b6"/><path d="M744.2636,659.852l-49.2623-.00183v-.62309a19.1753,19.1753,0,0,1,19.17426-19.17395h.00122l30.08773.00122Z" transform="translate(-110.33661 -237.5817)" fill="#2f2e41"/><circle cx="766.88656" cy="41.63615" r="26.56401" fill="#ffb6b6"/><path d="M920.21655,461.22417s8.91308,47.1307-24.99958,53.13247-82.86639,10.21993-82.86639,10.21993L790.36706,627.14324l-29.53443-2.63675s3.928-123.46737,13.5876-133.127,70.71212-38.58282,70.71212-38.58282Z" transform="translate(-110.33661 -237.5817)" fill="#2f2e41"/><path d="M853.98286,441.47135,839.151,456.35062s-107.0941,17.25-111.22553,41.9852c-6.23747,37.34427-13.60493,118.552-13.60493,118.552l32.1988-2.41491,12.62647-92.31123,51.5182-11.71874L869.27729,478.5Z" transform="translate(-110.33661 -237.5817)" fill="#2f2e41"/><path d="M902.78526,263.36115c-2.6223-4.94751-5.95413-14.80785-11.24679-16.63657a42.07731,42.07731,0,0,0-9.05841-1.92972l-8.99618,3.46009,4.89616-3.808q-1.42988-.08519-2.85817-.13928l-6.0699,2.33453,3.10542-2.41532c-5.65883-.05808-11.5.53031-15.88468,3.9752-3.73817,2.93677-7.44169,14.06185-8.04057,18.77753a35.9171,35.9171,0,0,0,.6603,13.53055l1.53716,1.46166a18.85936,18.85936,0,0,0,1.206-3.83883,18.18056,18.18056,0,0,1,8.70263-11.80641l.08368-.0472c2.5782-1.451,5.7065-1.3841,8.66308-1.27769l14.04158.50527c3.37829.12158,7.01608.33533,9.64978,2.45443a15.888,15.888,0,0,1,3.85826,5.58929c1.30868,2.6414,3.8661,12.60418,3.8661,12.60418s1.44689-1.88062,2.1404-.48092a48.39766,48.39766,0,0,0,2.01437-11.23347A22.00877,22.00877,0,0,0,902.78526,263.36115Z" transform="translate(-110.33661 -237.5817)" fill="#2f2e41"/><path d="M995.69426,290.88349A11.61582,11.61582,0,0,0,985.181,305.26136l-21.3614,15.75722,6.40951,15.31674,29.8539-22.67594a11.67883,11.67883,0,0,0-4.38876-22.77589Z" transform="translate(-110.33661 -237.5817)" fill="#ffb6b6"/><path d="M992.25627,323.052l-53.551,59.4744s-25.60913-8.19816-45.41466-17.08624l-8.8977-27.32787a54.34329,54.34329,0,0,1-2.60112-19.66442c27.45606-7.306,59.391,19.87863,59.391,19.87863l40.08517-31.39877Z" transform="translate(-110.33661 -237.5817)" fill="#6c63ff"/><path d="M867.301,465.6169c-9.554-3.30029-19.43312-6.71277-30.08912-7.99385l-.45773-.05533.12632-.443c11.03073-38.7308,8.27761-63.50657,2.87195-100.72306a37.59072,37.59072,0,0,1,21.5483-39.50121l.06542-.02958,30.43436-1.93391.06935-.00423,22.13437,6.50989a15.18313,15.18313,0,0,1,10.86724,14.83111c-.23987,12.23937.26868,25.9043.80711,40.37114,1.20787,32.45569,2.45686,66.01647-4.63045,87.79166l-.03718.11412-.09462.07416a36.09883,36.09883,0,0,1-23.08086,8.10758C887.90057,472.73235,877.76186,469.23034,867.301,465.6169Z" transform="translate(-110.33661 -237.5817)" fill="#6c63ff"/><path d="M1088.24817,662.4183H111.75183a1.41521,1.41521,0,1,1,0-2.83042h976.49634a1.41521,1.41521,0,1,1,0,2.83042Z" transform="translate(-110.33661 -237.5817)" fill="#ccc"/></svg>
      </div>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
  </body>
</html>
<?php  else: header("Location: login.php"); endif; ?>
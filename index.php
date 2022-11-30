<?php 
include("var.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "$headTitle"?></title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="p-3 mb-2 bg-light text-dark">
    <header>
      <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
          <a href="#" class="navbar-brand">
            <img id="logo" src="images/logo.png" alt="Logo U" /> <?php echo "$tLogo"?>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-links"
            aria-controls="navbar-links"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbar-links"
          >
            <div class="navbar-nav">
              <a class="nav-item nav-link" id="home-menu" href="#">Home</a>
              <a class="nav-item nav-link" id="sobre-menu" href="#"
                >Sobre o OCAU</a
              >
              <a class="nav-item nav-link" id="manual-menu" href="#"
                >Manual OCAU</a
              >
              <a class="nav-item nav-link" id="letter-menu" href="#"
                >NewsLetter</a
              >
              <a class="nav-item nav-link" id="contact-menu" href="#"
                >Nossas Redes</a
              >
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div id="mainSlider">
        <div class="ocaucanvas">
          <h3> <?php echo "$mainSlider"?>
          </h3>
          <img id="ocaucanvas" class="img-fluid" src="images/OCAU 1.png" alt="Logo OCAU" />
        </div>
      </div>
      <br />
      <br />
      <div id="sobre-area">
        <div class="main-title">
          <h2><?php echo "$mainTitle"?></h2>
        </div>
        <div>
          <p class="fs-5"><?php echo "$mainTitleTexto"?>
          </p>
        </div>
      </div>
      <div class="container">
        <ol class="list-group list-group-numbered">
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_1"?></div>
              <?php echo "$dim_1_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">1</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_2"?></div>
              <?php echo "$dim_2_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">2</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_3"?></div>
              <?php echo "$dim_3_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">3</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_4"?></div>
              <?php echo "$dim_4_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">4</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_5"?></div>
              <?php echo "$dim_5_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">5</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_6"?></div>
              <?php echo "$dim_6_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">6</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_7"?></div>
              <?php echo "$dim_7_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">7</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              <div class="fw-bold"><?php echo "$dim_8"?></div>
              <?php echo "$dim_8_texto"?>
            </div>
            <span class="badge bg-primary rounded-pill">8</span>
          </li>
        </ol>
      </div>
      <div id="manual-area">
        <div class="downloads">
          <p class="fs-4">
            <strong> <?php echo "$manual"?></strong>
          </p>
          <button type="button" class="btn btn-outline-secondary">
            <a href="pdf/Manual OCAU.pdf" download="Manual OCAU.pdf"
              ><?php echo "$tDownload"?></a
            >
          </button>
        </div>
        <br />
      </div>
      <div class="downloads">
        <p class="fs-4">
          <strong> <?php echo "$tEstudoCasos"?></strong>
        </p>
        <button type="button" class="btn btn-outline-secondary">
          <a href="pdf/autopass.pdf" download="autopass.pdf"
            ><?php echo "$tAtopass"?></a
          >
        </button>
        <button type="button" class="btn btn-outline-secondary">
          <a
            href="pdf/linkedin-caso-de-exito-olx.pdf"
            download="linkedin-caso-de-exito-olx.pdf"
            ><?php echo "$tOlx"?></a
          >
        </button>
      </div>
      <div id="letter-area">
        <div id="news-area">
          <div class="container">
            <div class="col-md-12">
              <h3 class="main-title"><?php echo "$newsletter"?></h3>
            </div>
            <p>
            <?php echo "$newsletterTexto"?>
            </p>
            <form action="email_create.php" method="POST">
              <input
                type="text"
                class="form-control"
                id="email-input"
                name="email"
                placeholder="Seu melhor e-mail"
                name="email"
              />
              <input type="submit" id="news-btn" value="Inscrever" />
            </form>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <section id="contact-area">
        <div id="contact-area">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3 class="main-title"><?php echo "$contato"?></h3>
              </div>
              <div class="col-md4-4 contact-box">
                <a
                  class="linkface"
                  href="https://www.facebook.com/ocanvasdeusabilidade/"
                  target="blank"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-facebook"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                    />
                  </svg>
                  <p>
                    <span class="contact-tile">Facebook:</span>
                    <?php echo "$ocanvasdeusabilidade"?>
                  </p>
                </a>
              </div>
              <div class="col-md4-4 contact-box">
                <a
                  class="linkface"
                  href="https://www.instagram.com/ocanvasdeusabilidade/"
                  target="blank"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-instagram"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                    />
                  </svg>
                  <p>
                    <span class="contact-tile">Instagram:</span>
                    <?php echo "$ocanvasdeusabilidade"?>
                  </p>
                </a>
              </div>
              <div class="col-md4-4 contact-box">
                <a
                  class="linkface"
                  href="https://wa.me/5583996954919"
                  target="blank"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg>
                  <p>
                    <span class="contact-tile">WhatsApp:</span>
                    <?php echo "$whatsNumber"?>
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <script src="scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

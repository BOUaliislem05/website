<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <nav id="navbar">
      <div class="nav">
        <div class="logo">
          <h1>Logo</h1>
        </div>

        <ul>
          <li>
            <a href="home.php#Home">Home</a>
          </li>
          <li>
            <a href="home.php#Gallery">Project</a>
          </li>
          <li>
            <a href="home.php#ABOUT">About</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="contact">
      <div class="contact1">
        <div class="form-card">
          <div class="contact-head">
            <h2>Vous avez une question ou une idée à partager ?</h2>
            <br>
            <p>
              N'hésitez pas à nous contacter. Nous aimerions recevoir de vos
              nouvelles.
            </p>
          </div>
          <form class="contact-form">
            <div class="input">
              <div class="mb-30">
                <label class="mb-3">Nom</label>
              </div>
              <input class="text-input" type="text" required placeholder="Votre nom" />
            </div>
            <div class="input">
              <div class="mb-30">
                <label class="mb-3">Email</label>
              </div>
              <input class="text-input" type="email" required placeholder="Example@mail.com" />
            </div>
            <div class="input">
              <div class="mb-30">
                <label class="mb-3">Sujet</label>
              </div>
              <input class="text-input" type="text" required placeholder="Sujet" />
            </div>
            <div class="input">
              <div class="mb-30">
                <p>Comment pouvons-nous vous aider?</p>
              </div>
              <textarea
              placeholder="Dites-nous quelques mots..."
                class="text-input h-100"
                cols="300"
                rows="3000"
              ></textarea>
            </div>
            <div class="input"><button class="submit-btn" type="submit">envoyer</button></div>
          </form>
        </div>
      </div>

      <div class="contact2">
        <h1>Nous sommes prêts à vous aider.</h1>
        <img src="assets/img/office.svg" style="margin-top: 10%;" alt="IMG" srcset="" />
      </div>
    </div>
  </body>
</html>

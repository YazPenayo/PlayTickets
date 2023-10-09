<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/barnavfooter.css">
    <link rel="stylesheet" href="../assets/css/end.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"><!--Icono de menu-->
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <title>PlayTickets</title>
</head>
<body onload="updateDate()">
  <div class="main-content">
    <header>
      <div class="navbar">
        <img src="../assets/img/logo.png" alt="Logo" height="80px">
        <h1 class="logo">PLAYTICKETS</h1>
        <button class="accordion"><i class="fas fa-bars"></i></button>
        <div class="panel">
          <ul>
               <li>Hola <?php echo $_SESSION["name"]?>!</li>
                <li><a href="record.php">Mis reservas</a></li>
                <hr class="hr">
                <li><a href="#">Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </header>

    <main>
        <img class="img_tick" src="../assets/img/vecteezy_tickets_1189271.png" alt="">
     <p class="centered-bold">¡Reserva Confirmada!</p>
    </main> 
  </div>    
  <footer>
    <div class="footer-logo"></div>
    <div class="footer-content">
      <div class="footer-links">
          <a href="politic_private.php">Política de Privacidad</a>
          <a href="termin_condiction.php">Términos y Condiciones</a>
          <a href="contact_page.php">Contacto</a>
      </div>
      <div class="footer-copyright">
        &copy; 2023 PlayTickets
      </div>
    </div>
  </footer>
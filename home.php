<?php
session_start();
require_once'baza.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cosmina Alupoaei</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Grand Hotel' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
  if($_SESSION['role'] === 'admin' )  {
    echo "<script type='text/javascript'>alert('Te-ai conectat ca ADMIN!');</script>";
  }
  if($_SESSION['role'] === 'user' )  {
    echo "<script type='text/javascript'>alert('Te-ai conectat ca USER!');</script>";
  }
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Vintage Shop</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="https://ie.usv.ro/~cosminaa/ExamenTweb/inregistrare.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="https://ie.usv.ro/~cosminaa/ExamenTweb/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
  </div>
</nav>
  <div class="home">
<h1 class=site-title>Vintage shop</h1>
<h3 class=site-subtitle>Cine suntem noi si ce inseamna stilul vintage?</h3>
<p>Magazin online de haine și accesorii vintage, retro și second hand. Rochii de seară, bavareze, fuste, sacouri, bluze, pantaloni, cămăsi, costume, eșarfe, kaftan, cașmir, mătase naturală, bijuterii, genți, curele, piele naturală, piele șarpe.</p>
<p>Stilul vintage se confunda deseori cu stilul retro, pentru ca ambele apartin esteticii secolului trecut, dar nu acelorasi decenii. Astfel, stilul vintage poate cuprinde o plaja foarte larga de piese de mobilier si obiecte decorative realizate intre anii 1960 si 1990, iar stilul retro se refera la elementele de design interior din prima jumatate a secolului XX. Intr-o amenajare in stil vintage putem avea atat mobila vintage din anii ‘70, cat si obiecte decorative vintage din anii ‘90. </p>
<p>Ce culori predomină în interioarele vintage? Sunt multe culori specifice în amenajări interi-oare stil vintage. Cele mai populare sunt verdele, portocaliul, roșul, galbenul și albastrul. Rozul și albul sunt de evitat. Pereții sunt fie în culori pastelate, fie acoperiți cu tapet deschis, cu modele dinamice. Podeaua este executată de obicei din parchet laminat de culoare de-schisă, sau mai rar, din gresie. O mică parte a podelei poate fi acoperită de un covor mic, cu model.</p>
<p>Prin ce se caracterizează mobila în stil vintage? Aceasta trebuie să fie mai veche de 25 de ani, cu o istorie foarte bogată. Dar poți folosi și piese de mobilier noi, cu efect de patină. Obiecte perfecte pentru interioarele în stilul vintage poți găsi în propriul pod, la târgurile de antichități, precum și în magazinele de mobilă cu piese care aparțin stilurilor din anii ’50, ’60 și ’70.</p>
<p>Un important element al interioarelor îl constituie elemente decorative. Ce fel de ornamente se potrivesc cel mai bine într-un interior vintage? Acest stil este caracterizat de eclectism. Își găsesc aici locul atât obiectele cumpărate, cât și cele realizate manual. Cel mai important este ca designerul să aleagă cu grijă elementele decorative care vor sublinia caracterul interiorului. Acestea trebuie să fie realizate din lemn, piele, metal și ceramică.</p>
</div>

<h1 class=site-title>Produse</h1>
  <div class="block col-md-6 col-lg-4" >
    <img src="palton.jpg" alt="Palton" class="image-container">
    <h3 style="color: white;">Palton</h3> &nbsp; <p style="color: white;">Pret:300 lei</p>
    <!-- Butonul pentru a deschide Modalul-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#palton">
      Informatii
    </button>

    <!-- Modalului -->
    <div class="modal fade" id="palton">
      <div class="modal-dialog">
        <div class="modal-content">


          <div class="modal-header">
            <h4 class="modal-title">Informatii palton</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Continutul modalului -->
          <div class="modal-body">
            <h6>PALTON DE LÂNĂ ÎN CAROURI</h6>
            <ul>
              <li> Gri - 2092/540</li>
              <li>Palton cu guler și rever</li>
              <li>Mânecă lungă</li>
              <li>Buzunare în față cu clapă</li>
              <li>Închidere petrecută în față, cu nasturi</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

  </div>


</div>

          <div class="block col-md-6 col-lg-4">
            <img src="palton2.jpg" alt="Palton" class="image-container">
            <h3 style="color: white;">Palton</h3> &nbsp; <p style="color: white;">Pret:400 lei</p>
            <!-- Butonul pentru a deschide Modalul-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#palton1">
              Informatii
            </button>

            <!-- Modalului -->
            <div class="modal fade" id="palton1">
              <div class="modal-dialog">
                <div class="modal-content">


                  <div class="modal-header">
                    <h4 class="modal-title">Informatii palton</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Continutul modalului -->
                  <div class="modal-body">
                    <h6>PALTON OFFICER LIMITED EDITION</h6>
                    <ul>
                      <li>Verde de apă - 2384/800</li>
                      <li>Palton lung </li>
                      <li>Confecționat cu țesătură de bumbac 100%</li>
                      <li>Buzunare în față cu clapă</li>
                      <li>Benzi combinate aplicate, de culoare contrastantă</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>

          </div>


        </div>
        <div class="block col-md-6 col-lg-4">
          <img src="papuci.jpg" alt="Ghete" class="image-container">
          <h3 style="color: white;">Ghete</h3> &nbsp; <p style="color: white;">Pret:400 lei</p>
          <!-- Butonul pentru a deschide Modalul-->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ghete">
            Informatii
          </button>

          <!-- Modalului -->
          <div class="modal fade" id="ghete">
            <div class="modal-dialog">
              <div class="modal-content">


                <div class="modal-header">
                  <h4 class="modal-title">Informatii ghete</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Continutul modalului -->
                <div class="modal-body">
                  <h6>BOTINE FĂRĂ TOC DIN PIELE CU PERLE</h6>
                  <ul>
                    <li>Negru - 2164/510</li>
                    <li>Ghete joase din piele </li>
                    <li>Exterior din piele</li>
                    <li>Barete cu perle de diferite dimensiuni</li>
                    <li>Sireturi și găici</li>
                  </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>

        </div>


      </div>
      <div class="block col-md-6 col-lg-4">
        <img src="pulover.jpg" alt="Pulover" class="image-container">
        <h3 style="color: white;">Pulover</h3> &nbsp; <p style="color: white;">Pret:250 lei</p>
        <!-- Butonul pentru a deschide Modalul-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pulover">
          Informatii
        </button>

        <!-- Modalului -->
        <div class="modal fade" id="pulover">
          <div class="modal-dialog">
            <div class="modal-content">


              <div class="modal-header">
                <h4 class="modal-title">Informatii pulover</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Continutul modalului -->
              <div class="modal-body">
                <h6>PULOVER CU LÂNĂ ȘI CAȘMIR</h6>
                <ul>
                  <li>Maro / Cârtiță - 9598/021</li>
                  <li>Pulover confecționat cu țesătură din amestec de lână și cașmir </li>
                  <li>Guler rotund</li>
                  <li>Mânecă lungă</li>
                  <li>Margini reiate</li>
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

      </div>


    </div>
    <div class="block col-md-6 col-lg-4">
      <img src="sacou.jpg" alt="Sacou" class="image-container">
      <h3 style="color: white;">Sacou</h3> &nbsp; <p style="color: white;">Pret:160 lei</p>
      <!-- Butonul pentru a deschide Modalul-->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sacou">
        Informatii
      </button>

      <!-- Modalului -->
      <div class="modal fade" id="sacou">
        <div class="modal-dialog">
          <div class="modal-content">


            <div class="modal-header">
              <h4 class="modal-title">Informatii sacou</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Continutul modalului -->
            <div class="modal-body">
              <h6>SACOU CAMBRAT ÎN CAROURI</h6>
              <ul>
                <li>Gri - 8073/346</li>
                <li>Sacou cu guler şi rever</li>
                <li>Mânecă lungă</li>
                <li>Buzunare în faţă cu paspoal dublu</li>
                <li>Deschizătură în partea de jos a spatelui</li>
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

    </div>


  </div>
  <div class="block col-md-6 col-lg-4">
    <img src="trench.jpg" alt="Trench" class="image-container">
    <h3 style="color: white;">Trench</h3> &nbsp; <p style="color: white;">Pret:300 lei</p>
    <!-- Butonul pentru a deschide Modalul-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trench">
      Informatii
    </button>

    <!-- Modalului -->
    <div class="modal fade" id="trench">
      <div class="modal-dialog">
        <div class="modal-content">


          <div class="modal-header">
            <h4 class="modal-title">Informatii trench</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Continutul modalului -->
          <div class="modal-body">
            <h6>GABARDINĂ OVERSIZE COMBINATĂ</h6>
            <ul>
              <li>Ecru - 8299/027</li>
              <li>Gabardină oversize cu guler și rever</li>
              <li>Mânecă lungă ajustabilă cu capsă</li>
              <li> Buzunare în față cu clapă</li>
              <li>Țesătură combinată contrastantă</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

  </div>


  </div>
</body>

<?php
if($_SESSION['role'] === 'admin')
{
  $query_users="SELECT * FROM alupoaei_utilizatori";
  $result_users = mysqli_query($con,$query_users);

    echo "<table class='table'>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Role</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result_users)) {
      echo "
      <tr>
        <td>$row[id]</td>
        <td>$row[username]</td>
        <td>$row[role]</td>
      </tr>";
    }
    echo "</table>";
}
?>
<footer class="footer">
  <h3 style="margin-top:0;">Ne puteti gasi:</h3>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/login?lang=ro" class="fa fa-twitter"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>
<a href="https://ro.linkedin.com/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
</footer>
</html>

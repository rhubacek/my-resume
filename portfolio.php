<html>
    <head>
        <title>Ren's Resume</title>
        <link rel="stylesheet" href="index.css" />
    </head>

    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <body>
        
        <nav class="navbar navbar-expand-md">
            <a href="#" class="navbar-brand"></a>
               <ul class="navbar-nav">
                <li class="navbar-item"> <a href="./index.php" class="nav-link">Home</a>
                <li class="navbar-item"> <a href="./about.php" class="nav-link">About</a>
                <li class="navbar-item"> <a href="./portfolio.php" class="nav-link">Portfolio</a>
                <li class="navbar-item"> <a href="./contact.php" class="nav-link">Contact</a>
                <li class="navbar-item"> <a href="./test.php" class="nav-link">JavaScript</a>
               <a href="./resume.docx"download Resume></a>
               </ul>
           </nav>
        <hr
        <section>
            <div class="card-footer">
                <a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#">Read More</a>
              </div>
            </div>
          </div>
          <!-- Portfolio Item End -->
          <!-- Portfolio Item -->
          <div class="col mb-4">
            <div class="card bg-light text-center border-light shadow h-100">
              <!-- Optional Card Image -->
              <img src="https://images.unsplash.com/photo-1541753866388-0b3c701627d3" alt="Art" class="card-img-top" style="object-fit: cover; height: 15em;" />
              <div class="card-body">
                <h3 class="card-title">Work Example</h3>
                <hr class="bg-primary" />
                <p class="card-text">
                  This is an example of the work I've done.
                </p>
              </div>
              <div class="card-footer">
                <a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#">Read More</a>
              </div>
            </div>
          </div>
          <!-- Portfolio Item End -->
        </div>
      </div>
    </section>

    <?php
      $skills = array ("familiarity with graphic design as well as overall web design", "proficiency in HTML.", "proficiency in JavaScript.");
      echo '<h4>My skills include:</h2><ul>'
      for each ($skills a $c) {
        echo '<li>' . $c . '</li>';
      }
      echo '</ul>';
      ?>
</html>
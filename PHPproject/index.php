<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project</title>
    <meta name="description" content="This week we will look at how we can protect pages behind a level of authenication.">
    <meta name="robots" content="noindex, nofollow">
    <!-- add our fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <!-- add Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <!-- add our custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
<?php require ('./inc/header.php'); ?>
<body>
    <main>
        <section class = "logo">
            <div>
               <h1>NYKAA COSMETIC</h1>
            </div>
        </section>
        <section class = "note">
            <h2>WE BELIEVE ALL WOMEN ARE PRETTY WITHOUT MAKEUP- BUT WITH RIGHT MAKEUP CAN BE PRETTY POWERFULL</h2>
            <h2>LIFE ISN'T PERFECT BUT YOUR MAKEUP CAN BE</h2>
        </section>
        <section class = "images">
        <div class = "small-img-group">
            <div class = "small-img-col">
              <img src = "./img/image11.webp" width="100%" class="small-img" alt="image 3">
            </div>
              <div class = "small-img-col">
                <img src = "./img/img7.jpg" width="100%" class="small-img" alt="image 3">
              </div>
              <div class = "small-img-col">
                  <img src = "./img/photo2.webp" width="100%" class="small-img" alt="image 3">
              </div>
        </div>
        </section>

    </main>
</body>

<?php require ('./inc/footer.php'); ?>
</html>
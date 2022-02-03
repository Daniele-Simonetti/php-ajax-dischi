<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <title>spotify</title>
</head>
<body>

  <!-- main -->
  <?php 
  include_once __DIR__ . '/server/data.php'; 
  ?>
  <main id="app">
    <!-- header -->
    <!-- includo il mio componente header -->
    <?php 
    include_once __DIR__ . '/partials/header.php';
    ?>
    <div class="row row-col-5">
      <div class="card col text-center" v-for="disc in discs">
        <img :src="disc.img" :alt="disc.title">
        <h2 class="fs-5 fw-bold mt-3 mb-4">
          {{disc.title}}
        </h2>
        <h3 class="fs-6">
          {{disc.author}}
        </h3>
        <h4 class="fs-6">
          {{disc.year}}
        </h4>
      </div>
    </div>
  </main>

  <!-- footer -->
  <!-- includo il mio componente footer -->
  <?php 
    include_once __DIR__ . '/partials/footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
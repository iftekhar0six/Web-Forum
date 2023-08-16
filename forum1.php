<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mydiscuss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background:-moz-linear-gradient(to right, );">
    <?php include 'partial/_header.php'; ?>
    <?php include 'partial/_dbconnect.php'; ?>
   
    <div class="container my-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://kariera.future-processing.pl/wp-content/uploads/2016/10/blog_DevDay2016-1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Programming</h1>
        <p>In this section you can find programming related conversation.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://t3.ftcdn.net/jpg/03/24/64/44/360_F_324644401_lYsDy30Cjk7e3WRPEnt7qck5h9GktqPU.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Sports</h1>
        <p>In this section you can find sports related conversation.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/premium-vector/cinema-poster-night-film-movies-popcorn-retro-movie-posters-template-illustration-set_102902-1871.jpg?w=2000" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Movies</h1>
        <p>In this section you can find Movies related conversation.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <h2 align="center">Web Forum - category</h2>
        <hr>
        <div class="row">
<h3 align="center">Programming</h3>

            <?php
    
        $sql = "SELECT * FROM `programming`";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $id = $row['category_id'];
            $title = $row['category_name'];
            $des = $row['category_description'];
            echo '  <div class="col-md-4 my-2">
                        <div class="card" style="width: 18rem;">
                            <img src=" https://st2.depositphotos.com/3474805/6276/v/450/depositphotos_62769623-stock-illustration-creative-illustration-on-programming.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="explore.php?catid=' . $id . '">' . $title . '</a></h5>
                                <p class="card-text">' . substr($des, 0, 100) . '...</p>
                                <a href="explore.php?catid=' . $id . '" class="btn btn-primary">Explore</a>
                            </div>
                        </div>
                    </div>';
        }

    ?><hr>
    <h3 align="center">Sports</h3>

            <?php
        
        $sql = "SELECT * FROM `sports`";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $id = $row['category_id'];
            $title = $row['category_name'];
            $des = $row['category_description'];
            echo '  <div class="col-md-4 my-2">
                        <div class="card" style="width: 18rem;">
                            <img src="https://assets.herbalifenutrition.com/content/dam/regional/nam/en_us/sites/herbalife_nutrition/web_graphic/billboards/2022/05-May/SPN_NAMSponsorshipKyleImage_USEN.jpg
                            " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="explore.php?catid=' . $id . '">' . $title . '</a></h5>
                                <p class="card-text">' . substr($des, 0, 100) . '...</p>
                                <a href="explore.php?catid=' . $id . '" class="btn btn-primary">Explore</a>
                            </div>
                        </div>
                    </div>';
        }

    ?><hr>
     <h3 align="center">Movies</h3>
            <?php
        
        $sql = "SELECT * FROM `movies`";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $id = $row['category_id'];
            $title = $row['category_name'];
            $des = $row['category_description'];
            echo '  <div class="col-md-4 my-2">
                        <div class="card" style="width: 18rem;">
                            <img src="https://is4-ssl.mzstatic.com/image/thumb/Music112/v4/25/5a/68/255a68be-b1aa-85c6-a7a7-5480beda1289/22UM1IM05503.rgb.jpg/600x600bf-60.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="explore.php?catid=' . $id . '">' . $title . '</a></h5>
                                <p class="card-text">' . substr($des, 0, 100) . '...</p>
                                <a href="explore.php?catid=' . $id . '" class="btn btn-primary">Explore</a>
                            </div>
                        </div>
                    </div>';
        }

    ?>

        </div>
    </div>
    <?php include 'partial/_footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
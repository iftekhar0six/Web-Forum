<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mydiscuss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'partial/_header.php'; ?>
    <?php include 'partial/_dbconnect.php'; ?>

    <?php
        $id=$_GET['catid'];
        $sql = "SELECT * FROM `programming` WHERE category_id=$id";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $name=$row['category_name'];
            $des=$row['category_description'];
        }
    ?>
    <?php
        $id=$_GET['catid'];
        $sql = "SELECT * FROM `sports` WHERE category_id=$id";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $name=$row['category_name'];
            $des=$row['category_description'];
        }
    ?>
    <?php
        $id=$_GET['catid'];
        $sql = "SELECT * FROM `movies` WHERE category_id=$id";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $name=$row['category_name'];
            $des=$row['category_description'];
        }
    ?>

    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method=='POST')
        {
            // insert into thread DB
            $th_title=$_POST['title'];
            $th_desc=$_POST['desc'];
            $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp())";
            $res = mysqli_query($conn,$sql);
            $showAlert = true;
            if($showAlert)
            {
                echo '<div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Your thread has been added! Please wait community to respond</p>
                    </div>';
            }
        }
    ?>

    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $name;?></h1>
            <p class="lead"><?php echo $des;?> </p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing the knowledge. Keep it friendly. Be courteous and respectful.
                Stay on topic. Share your knowledge. Refrain from demeaning, discriminatory, or harassing behaviour and
                speech. </p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    
    <div class="container">
        <h1 class="py-2">Start Discussion</h1>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Title">
                <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as possible</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Elaborate Your Problem</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <div class="container">
        <h1 class="py-2">Browse Questions</h1>
        <?php
            $id=$_GET['catid'];
            $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
            $res = mysqli_query($conn,$sql);
            $noResult=true;
            while($row = mysqli_fetch_assoc($res))
            {
                $noResult=false;
                $id=$row['thread_id'];
                $title=$row['thread_title'];
                $desc=$row['thread_desc'];
            
                echo '<div class="media">
                        <img class="mr-3"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1-NGoY_Bs5YNRt6oShFnxWqwWFIKUpZgDwQ&usqp=CAU"
                            width="35px" alt="Generic placeholder image">
                        <div class="media-body">
                        <p class="font-weight-bold my-0"><b>Anonymous</b></p>
                            <h5 class="mt-1 "> <a href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
                            '.$desc.'
                        </div>
                    </div>';
            }
            if($noResult){
                echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <p class="display-4">No Threads Found</p>
                  <p class="lead">Be the first person to ask the Question</p>
                </div>
              </div>';
            }
        ?>

    </div>

    <?php include 'partial/_footer.php'; ?>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>

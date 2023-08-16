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
        $id=$_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $title=$row['thread_title'];
            $desc=$row['thread_desc'];
        }
    ?>

    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method=='POST')
        {
            // insert into Comment DB
            $comment=$_POST['comment'];
            $sql = "INSERT INTO `comments`(`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment','$id','0', current_timestamp())";
            $res = mysqli_query($conn,$sql);
            $showAlert = true;
            if($showAlert)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your comment has been added!
                    </div>';
            }
        }
    ?>

    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead"><?php echo $desc;?> </p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing the knowledge. Keep it friendly. Be courteous and respectful.
                Stay on topic. Share your knowledge. Refrain from demeaning, discriminatory, or harassing behaviour and
                speech. </p>
            <p class="lead">
            <p class="font-weight-bold my-0">posted by: <b>Anonymous</b></p>
            </p>
        </div>
    </div>

    <div class="container">
        <h1 class="py-2">Post a Comment</h1>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
    </div>

    <div class="container">
        <h1 class="py-2">Discussions</h1>
        <?php
            $id=$_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
            $res = mysqli_query($conn,$sql);
            $noResult=true;
            while($row = mysqli_fetch_assoc($res))
            {
                $noResult=false;
                $id=$row['comment_id'];
                $content=$row['comment_content'];
            
                echo '<div class="media">
                        <img class="mr-3"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1-NGoY_Bs5YNRt6oShFnxWqwWFIKUpZgDwQ&usqp=CAU"
                            width="35px" alt="Generic placeholder image">
                        <div class="media-body">
                        <p class="font-weight-bold my-0"><b>Anonymous</b></p>
                            '.$content.'
                        </div>
                    </div>';
            }

            if($noResult){
                echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <p class="display-4">No Comment Found</p>
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

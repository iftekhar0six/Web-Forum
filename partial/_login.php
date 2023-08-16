<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginLabel">Login in Web Forum</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form style="background-color:black" action="/myForum/partial/_handleLogin.php" method="POST">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="loginEmail" class="form-label" style="color:white" >Email address</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label" style="color:white" >Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass">
                    </div>
                    <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" style="color:white">Check me out</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
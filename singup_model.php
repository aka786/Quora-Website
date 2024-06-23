<!-- Button trigger modal -->

<!-- Modal -->

<div class="modal fade" id="signup_model" tabindex="-1" aria-labelledby="signup_modelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modelLabel">Singup for an Quora Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/aryan/forum.php/_handelsingup.php" method="post">
            <div class="modal-body">
            
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="singnup" name="singup" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cPassword" name="cPassword">
                        <div id="emailHelp" class="form-text">We'll never share your Password with anyone else.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Singup</button>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               
            </div>
            </form>
        </div>
    </div>
</div>
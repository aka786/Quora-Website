<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="login_model" tabindex="-1" aria-labelledby="login_modelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login_modelLabel">login to Quora</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/aryan/forum.php/handle_login.php" method="post">
            <div class="modal-body">
            
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="lemail" name="lemail"  aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="lpassword" name="lpassword">
                        <div id="emailHelp" class="form-text">We'll never share your Password with anyone else.</div>
                    </div>
                   
                    <button type="submit" class=" btn-primary">login</button>
             
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn-secondary" data-bs-dismiss="modal">Close</button>
               
            </div>
            </form>
      
    </div>
  </div>
</div>
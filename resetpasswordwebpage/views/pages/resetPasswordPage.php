<div class="container-wrapper">
    <div class="container">
        <div class="title-container">
            <h1>Reset Password</h1>
            <p>Reset your password if you forget them.</p>
        </div>
        <div>
            <form  method="get" action="">
                <div class="input-wrapper">
                    <span>New Password* :</span>
                    <div class="input-container">
                        <input id="newPassword" type="password" name="password" placeholder="New Password" required/>
                        <i id="eyeIcon" class="fa-solid fa-eye-slash icon"></i>
                    </div>
                    <span>Confirm Password* :</span>
                    <div class="input-container">
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confirm Password" required/>
                        <i id="eyeIcon" class="fa-solid fa-eye-slash icon"></i>
                    </div>
                </div>
                <div class="btn-sub">
                    <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                    <input type="hidden" name="controller" value="pages"/>
                    <button type="submit" name="action" value="update">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $( function() {
    $("i").on( "click", function() {
        if($(this).closest("div").find("input").get(0).type === "password"){
            $(this).closest("div").find("input").get(0).type = "text";
        }else{
            $(this).closest("div").find("input").get(0).type = "password";
        }
        $(this).toggleClass(".fa-solid fa-eye");
    });

    $("form").on("submit" , function(e){
        if($("#newPassword").val() != $("#confirmPassword").val()){
            alert("The confirmation password does not match the new password.");
            e.preventDefault();
        }
    });

  } );
</script>


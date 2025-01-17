<div class="well">
    <h3>Admin Login</h3>
    <form method="post" autocomplete="off" action="" id="login_form1">
        <div class="form-group">
            <label class="control-label">Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="control-label">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Log in</button>
    </form>
</div>

<div class="well">
    <label><a href="password.php">Forget Password?</a></label>
</div>

<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#login_form1").submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "login.php",
            data: formData,
            success: function(response){
                if(response.trim() === 'true') {
                    $.jGrowl("Loading Project Files Please Wait......", { sticky: true });
                    $.jGrowl("Welcome to Student's Project Management System", { header: 'Access Granted' });
                    var delay = 5000;
                    setTimeout(function(){ window.location = 'dashboard.php'; }, delay);  
                } else {
                    $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
                }
            },
            error: function(){
                $.jGrowl("An error occurred. Please try again.", { header: 'Login Failed' });
            }
        });
    });
});
</script>

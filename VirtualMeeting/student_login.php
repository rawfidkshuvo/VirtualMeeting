
<?php 
  include_once "inc/conn.php";
  include "inc/header.php";
?>
    <title>Student Login</title>
</head>
<body>
<?php include "inc/nav.php"; date_default_timezone_set("Europe/Berlin");?>
<div class="container">
    <h3 class="shadow-sm bg-light my-4">Student Login</h3>
    <form action="select_meeting.php" method="post">
        <div class="row">
                <div class="col-4 shadow p-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Username</label>
                        <div class="col">
                        <input type="text" class="form-control" name="username" placeholder="username">
                        </div>
                    </div>
                    </br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Password</label>
                        <div class="col">
                        <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                    </br>
                    <div class="form-group row">
                        <div class="d-grid gap-2">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="col">
                
                    </div>
            
        </div>
    </form>
</div>

<?php include "inc/footer.php"; ?>
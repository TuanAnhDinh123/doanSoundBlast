<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
      <div id="wrapper"style="background:#320c59; height:100vh; " >
        <div class="container py-3"  >
            <div class="row justify-content-around mt-4">
                <form action="register-request" method="post" class="col-md-6 bg-light p-3 my-3" style="align-items:center"  enctype="multipart/form-data">
                {{csrf_field() }}
                    <h1 class="text-center text-uppercase h3 py-3">Register</h1>
                    <div class="form-group">
                        <label for="txtname">Fullname:</label>
                        <input type="text" name="txtname" id="txtname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Username:</label>
                        <input type="text" name="name" id="txtuser" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="txtpass" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="img">Avatar</label>
                        <input type="file" name="img" class="form-control">
                    </div>
                    <div class="form-group py-3 ">
                        <input type="submit" value="SIGN UP" class="btn btn-primary mb-2 ">
                    </div>
                    <div class="form-group d-flex ">
                        <div class="form-group mx-auto " >        
                            <a href="/login" style="text-decoration-none">Sign in</a>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
      </div>  
</body>
</html>

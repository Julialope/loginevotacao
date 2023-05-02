<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>LOGIN</title>
</head>
<body class="bg-body-secondary">
	<div class="container text-center bg-white">
	<div class="row">   
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
				<div class="mb-3" align="left">
                        <a class="navbar-brand" href="#">LOGIN</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
                     </button>
                        </div>
                    </div>
                  </div>
                </nav>
            </div> 
            <div class="container text-center">
                <div class="row">
                  <div class="col">
                   
                  </div>
                  <div class="col">
                    <form method="POST" action="login.php">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Digite seu Email: </label>
                          <input type="username" class="form-control" name="username" id="username" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Senha:</label>
                          <input type="password" class="form-control" name="password" id="password">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <div class="mb-3 form-check">
                         
                         </div>
                      </form>


                  </div>
                  <div class="col">
                   
                  </div>
                </div>
              </div>
</body>
</html>
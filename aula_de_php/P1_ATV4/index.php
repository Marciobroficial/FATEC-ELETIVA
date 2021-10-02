<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Marcio Santos">
  <meta name="Description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <style>
    button{
            box-shadow:  -4px 4px 5px 0px rgba(93, 95, 93, 1);
        }

  </style>
</head>
<body style="background-color: #3BD9BC;">
  
  <main>

    <form class="mt-5 col-lg-6 offset-lg-3" action="process_login.php" method="POST">
      <h1 class="text-center">LOGIN</h1>

      <div class="form-floating mt-5">
        <input type="text" class="form-control rounded-pill" name="login" id="login" placeholder="marcio">
        <label for="floatingInput">Login</label>
      </div>

      <div class="form-floating my-4">
        <input type="password" class="form-control rounded-pill" name="senha" id="senha" placeholder="senha">
        <label for="floatingPassword">Senha</label>
      </div>

      <div class="mx-5 row justify-content-center">
        <button class="btn btn-lg rounded-pill btn-primary"  type="submit">Login</button>
      </div>

    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>
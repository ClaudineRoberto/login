<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <main class="container">

    
        <form action='validate.php' method='post'>

            <div class="row">
                <div class="col">
                    <label class="form-label">Usuário:</label>
                    <input class="form-control" name='user'>
                </div>

                <div class="col">
                    <label class="form-label">Senha:</label>
                    <input class="form-control" type="password" name='password'>
                </div>
            </div>

            <div class="row text-center mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </div>

        </form>

    
    </main>
    
    
    
        <footer class="container-fluid bg-dark text-light text-center mt-5 pt-3 pb-1 fixed-bottom">
            <p>Todos os direitos reservados &copy; <?php echo date ('Y');?> </p>
        </footer>




</body>
</html>

<?php
    include('conectar.php');

    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <title>Notas</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-light bg-dark">
            <a class="navbar-brand " id="logo" href="#">
                <img src="../imagens/logo.png" width="100" height="100" class="d-inline-block align-top" alt="Logo">
                Notas
            </a>
        </nav>
    </header>
    <main>

        <div class="container container-fluid">
            <h4 class="titulo mt-4 mb-4">Publique seus pensamentos</h4>
        </div>
        <div class="container jumbotrom">
            <form method="post" action="enviar.php" class="form-group">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Digite o título" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" placeholder="Digite seu nome" name="autor" required>
                </div>
                <div class="form-group">
                    <label for="nota">Conte sua história</label>
                    <textarea class="form-control" id="nota" rows="5 " name="mensagem"required></textarea>
                </div>
                <div class="container container-fluid mt-4 d-flex">
                    <button name="submit" type="submit" class="btn btn-secondary btn-lg btn-block">Adicionar Nota</button>

                </div>
            </form>
        </div>
        <div class="container container-fluid mt-5">
        <div class="jumbotron jumbotron-fluid d-flex flex-wrap">
                <?php
                        $sql="Select * from nota";
                        $result=$conn->query($sql);
                
                        if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            
                ?>
                    
                            <div class="card text-white bg-dark conteudo" style="width:     18rem;" id="<?php echo $rows["idnota"];?> ">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $rows["titulo"];?></  h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo    $rows["autor"];?></h6>
                                    <p class="card-text"><?php echo $rows["mensagem"];?></p>
                                    <a href="apagar.php?p=apagar&id=<?php echo $rows    ['idnota'];?>" onclick="return confirm('Confirma exclusão?')" class="btn btn-outline-danger ">Apagar</a>
                                </div>
                            </div>
                    
                    <?php
                            }
                        }else{
                            echo "<p style='margin: 0 auto;'>Nenhuma nota criada</p>";
                        }
                ?>
                </div>
        </div>
        


        <footer>

        </footer>
    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
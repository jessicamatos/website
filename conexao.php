<html>
<body>
<?php
    include_once("conexao.php");
    $nome= $_POST['nome'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $opcao = $_POST["opcao"];

    

    $result_usuario = "INSERT INTO cadastro (nome, cpf_cnpj, email, telefone, senha, opcao)
     VALUES ('$nome','$cpf_cnpj','$email','$telefone','$senha', $opcao)";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) != 0){
         echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projeto_Energy_Solutions_-_ODS7/arealogin.html'>";
         echo "<script>alert('Cadastro realizado com sucesso!');</script>";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projeto_Energy_Solutions_-_ODS7/cadastro.html'>";        
        echo "<script>alert('Erro ao realizar o cadastro!');</script>";        
    }   
?>
</body>
</html>

<?php
    include('conexao.php');
    
    if(empty($_POST['nome']) || empty($_POST['nomeusuario']) || empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: cadastro.html');
        exit();
    }
    
    $nome = $_POST['nome'];
    $nomeusuario = $_POST['nomeusuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $i;

    $stmt = $conn->prepare("INSERT INTO `usuario`(`nome`, `nomeusuario`, `email`, `senha`) 
    VALUES (:nome, :nomeusuario, :email, :senha);");

    $response = "SELECT `nomeusuario`,`email` FROM `usuario`";
    $result = $conn->query($response);
    while($row = $result->fetch()) {
        if($row['nomeusuario'] == $username || $row['email'] == $email){
            $i++;
        }
    }

    if($i>0){
        echo "Usuário ou E-mail já existentes.";
    }else{
        $stmt->execute(array(':nome' => $nome, ':nomeusuario' => $nomeusuario, ':email' => $email, ':senha'=> $senha));

        echo "Cadastro realizado com sucesso.";
        header("Location: index.html");
    }
?>
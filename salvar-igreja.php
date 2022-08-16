<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $website = $_POST["website"];
            $foto = $_POST["foto"];

            $sql = "INSERT INTO Igreja (Nome, Endereco, Website, Foto) VALUES ('{$nome}', '{$endereco}','{$website}','{$foto}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'editar':
            //code...
        break;

        case 'excluir':
            //code...
        break;
    }
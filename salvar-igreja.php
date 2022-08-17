<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $website = $_POST["website"];
            $foto = $_FILES["foto"];

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
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $website = $_POST["website"];
            $foto = $_FILES["foto"];

            $sql = "UPDATE Igreja SET Nome='{$nome}', Endereco='{$endereco}', Website='{$website}', Foto='{$foto}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM Igreja WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;
    }
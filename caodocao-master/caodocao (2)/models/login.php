<?php
    require_once "Usuario.php";
    require_once "CrudUsuario.php";
class login
{
        public function CadastroUser($nome, $email, $telefone, $senha, $cidade, $cnpj){
                $usuario = new Usuario($nome, $email, $telefone, $senha, $cidade, $cnpj);

                $cadastro = new CrudUsuario();

                $cadastro->CadastrarUsuario($usuario);
        }


}

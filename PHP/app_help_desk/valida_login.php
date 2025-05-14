    <?php
    session_start();

    $Usuarios=array(
        ['id' => '1' ,
        'perfil' => 'adm' ,
        'nome' => 'Ruan',
        'email' => 'assuncaoruan7@gmail.com',
        'senha' => '4509' ,
    ],
    [
        'id' => '2' ,
        'perfil' => 'user' ,
        'nome' => 'Lucas',
        'email' => 'lucas2@gmail.com',
        'senha' => '1234' ,
    ],
    [
        'id' => '3' ,
        'perfil' => 'user' ,
        'nome' => 'Catarina',
        'email' => 'catarina4@gmail.com',
        'senha' => '4321' ,
    ]
    );
     $UsuarioAutenticado = false;

     
     $UsuarioEmail = $_GET['email'];
     $UsuarioSenha = $_GET['senha'];
     

for ($Indice = 0; $Indice < count($Usuarios); $Indice++){
    if ($UsuarioEmail == $Usuarios[$Indice]['email'] && $UsuarioSenha == $Usuarios[$Indice]['senha']){
     $UsuarioAutenticado = true;
     $_SESSION['id'] = $Usuarios[$Indice]['id'];
     $_SESSION['perfil'] = $Usuarios[$Indice]['perfil'];
     $_SESSION['nome'] = $Usuarios[$Indice]['nome'];
     break;
    }
    else {
        $UsuariosAutenticado = false;
    }
}

if ($UsuarioAutenticado){
    $_SESSION['autenticado'] = 'sim';
    header('location: home.php');
}
else {
    $_SESSION['autenticado'] = 'nao';
    header('location: index.php?login=erro');
}
    ?>

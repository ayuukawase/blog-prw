<?php

    require_once '../core/sql.php';

    $id = 1;
    $nome = 'ayumi';
    $email = 'leticiakawase@gmail.com';
    $senha = '100806';
    $dados = ['nome' => $nome,
              'email' => $email,
              'senha' => $senha];
              
    $entidade = 'usuario';
    $criterio = [['id', '=', $id]];
    $campos = ['id', 'nome', 'email'];
    print_r($dados);
    echo '<br>';
    print_r($campos);
    echo '<br>';
    print_r($criterio);
    echo '<br>';

    //teste geração insert
    $instrucao = insert($entidade, $dados);
    echo $instrucao.'<br>';

    //teste geração update
    $instrucao = update($entidade, $dados, $criterio);
    echo $instrucao.'<br>';
    
    //teste geração select
    $instrucao = select($entidade, $campos, $criterio);
    echo $instrucao.'<br>';

    //teste geração delete
    $instrucao = delete($entidade, $criterio);
    echo $instrucao.'<br>';

?>
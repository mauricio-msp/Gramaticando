<?php
    
    require_once '../Classes/DAO/conexao.php';
    
    if(isset($_POST['Nome'])):
        $data['nome'] = $_POST['Nome'];
        $user = Users::find_by_nome($data['nome']);
        if(count($user) <= 0):
            $ver = Users::create($data);

            if (count($ver) > 0):
                echo 1;
            else:
                echo 2;
            endif;
            
        else:
            echo 4;
        endif;
    else:
        echo 3;
    endif;
	
?>
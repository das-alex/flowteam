<?
#Файл для работы с навигацией

if (isset($page)){
    if($data = $database->fetchAssoc($connectHost, "SELECT * FROM `Flow_Pages` WHERE `name`='" . $page . "'")){
        $template->assign('title', $arrayMessages['13'] . $data['title']);
        if (!empty($data['path'])){
            include ENGINE_DIR . 'modules/' . $data['path'];
        }else{
            $template->assign('enableIndex',true);
        }
    }else{
        $template->assign('title', $arrayMessages['14']);
        include ENGINE_DIR . 'modules/moduleError/error.php';
    }
}else{
    $template->assign('title', $arrayMessages['14']);
    include ENGINE_DIR . 'modules/moduleError/error.php';
}
?>

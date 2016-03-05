<?php
require 'msg.php';

$template->assign('title','Lab1 Page');
$template->assign('errMsgState', false);
$errCount = 0;

$lab = get_str_check($_GET['lab']);

if (isset($lab)){
	$template->assign('lab1_enable',true);
    switch ($lab){
    	case 'lab1':
    		$template->assign('lab11_enable',true);
    		$template->assign('view1', $mysql->getRow('SELECT * FROM `Lab1_View1`'));
    		if(isset($_POST['submit1'])){
    			if(empty($_POST['Name_1'])){
    				$errCount++;
    			}
    			if ($errCount == 0){
    				$mysql->insert("INSERT INTO `Lab1_View1` SET  `Name_1`='". $_POST['Name_1'] ."', `In_1`='". $_POST['select'] ."', `Cost_1`='". $_POST['Cost_1'] ."'");
    				header("Location: index.php?page=lab1&lab=lab1"); exit();
    			}else{
    				$template->assign('errMsg', $msg_array[0]);
    				$template->assign('errMsgState', true);
    			}
    		}
    		if(isset($_POST["del1"])){

    		}
    		break;
    	case 'lab12':
    		$template->assign('lab12_enable',true);
    		$template->assign('view2', $mysql->getRow('SELECT * FROM `Lab1_View2`'));
    		if(isset($_POST['submit2'])){
    			if(empty($_POST['Name_2'])){
    				$errCount++;
    			}
    			if(empty($_POST['Count_2'])){
    				$errCount++;
    			}
    			if(empty($_POST['Num_2'])){
    				$errCount++;
    			}
    			if ($errCount == 0){
    				$mysql->insert("INSERT INTO `Lab1_View2` SET  `Name_2`='". $_POST['Name_2'] ."', `Data_2`='".date("Y-m-d")."', `Count_2`='". $_POST['Count_2'] ."', `Num_2`='". $_POST['Num_2'] ."'");
    				header("Location: index.php?page=lab1&lab=lab12"); exit();
    			}else{
    				$template->assign('errMsg', $msg_array[0]);
    				$template->assign('errMsgState', true);
    			}
    		}
    		break;
    	case 'lab13':
    		$template->assign('lab13_enable',true);
    		$template->assign('view3', $mysql->getRow('SELECT * FROM `Lab1_View3`'));
    		if(isset($_POST['submit3'])){
    			if(empty($_POST['Name_3'])){
    				$errCount++;
    			}
    			if(empty($_POST['Count_3'])){
    				$errCount++;
    			}
    			if(empty($_POST['Fio_3'])){
    				$errCount++;
    			}
    			if ($errCount == 0){
    				$mysql->insert("INSERT INTO `Lab1_View3` SET  `Name_3`='". $_POST['Name_3'] ."', `Count_3`='". $_POST['Count_3'] ."', `FIO_3`='". $_POST['FIO_3'] ."',`Data_3`='".date("Y-m-d")."'");
    				header("Location: index.php?page=lab1&lab=lab13"); exit();
    			}else{
    				$template->assign('errMsg', $msg_array[0]);
    				$template->assign('errMsgState', true);
    			}
    		}
    		break;
    	default:
			include ENGINE_DIR . 'modules/moduleError/error.php';
			break;
    }
    if(isset($_POST['go'])){
    	if ($_POST['rbut'] == '1'){
    		header("Location: index.php?page=lab1&lab=lab1"); exit();
    	}
    	if ($_POST['rbut'] == '2'){
    		header("Location: index.php?page=lab1&lab=lab12"); exit();
    	}
    	if ($_POST['rbut'] == '3'){
    		header("Location: index.php?page=lab1&lab=lab13"); exit();
    	}

    }
}
?>

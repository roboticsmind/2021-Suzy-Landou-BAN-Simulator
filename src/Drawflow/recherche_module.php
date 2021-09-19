<?php
  session_start();
  require_once('../../database.php');
 
  if(isset($_GET['modules'])){
    $modules = (String) trim($_GET['modules']);
    //echo "connect:ok";
    $req = $db->query("SELECT *
      FROM t_module 
      WHERE module LIKE 'b%'"); // reqette pour sélectionner au fur à 
                          //mésure dans la table t_module, 
                          //tous les module qui correspondent à la saisie
      
    $req = $req->fetchALL();
  
    foreach($req as $r){
      ?>   
        <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc"><?= $r['module'] . " " . $r['type'] ?></div><?php    
    }
  } 
?>


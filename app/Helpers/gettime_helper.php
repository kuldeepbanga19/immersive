<?php

function gettime($stime){
    $data=array();
    
    $data['time']=time()-$stime;
    $data['tempvar']=time()-$stime;
    $data['days']=(int)($data['tempvar']/86400);
    $leftsecs=$data['tempvar']%86400;
    $data['hours']=(int)($leftsecs/3600);
    $data['minutes']=(int)(($leftsecs%3600)/60);
    $data['seconds']=($leftsecs%3600)%60;
    $updateago="DAYS=".$data['days']." hours=".$data['hours']." minutes=".$data['minutes']." seconds=".$data['seconds'];
    if($data['days']!=0){
           echo $data['days'].' days ago';  
        }
        elseif($data['hours']!=0){
           echo $data['hours'].' hours ago'; 
        }
        elseif($data['minutes']!=0){
           echo $data['minutes'].' minutes ago'; 
        }
        else{
           echo 'just now';
        }
    // return $updateago;
    // var_dump($data['days']);die;

}



?>
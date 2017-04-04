<?php

     require  ('file.class.php');

     $data = array(
                
                 'id' =>1,

                  'name' =>'koala',

                  'sex'  => '男',

                  'type' => array(1,2,3,4,5,6),

     	); 


    $file  = new  FileCache();

    $res = $file -> CacheData('demo_cache',$data);

    if ($res) {
    	
          echo " 存入成功";

    }else{

          echo "error"; 
          	
    }


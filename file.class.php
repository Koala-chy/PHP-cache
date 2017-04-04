<?php

           class   FileCache{

                   private   $_dir;

                   const    EXT  = '.cache';  //定义文件后缀

                   public  function  __construct(){

                               $this ->_dir =dirname(__FILE__).'/files/';  //获取文件路径

                   }                      

                  public   function   CacheData($key,$value ='',$path =''){

                                $filename  = $this ->_dir.$path.$key.self::EXT;

                                if($value !==''){   //判断 value 值是否为空，写入缓存

                                          if (is_null($value)) {    //当 value  值为 null   删除缓存文件
                                          
                                              return   @unlink($filename);

                                          }

                                	$dir  = dirname($filename);

                                	if(!is_dir($dir)){
                                            
                                                    mkdir($dir,0777);
                                	}

                                         return   file_put_contents($filename, json_encode($value));
                                }  

                              //获取缓存文件

                                if (!is_file($filename)) {
                                	
                                	return  false;

                                }else{

                                         return   json_decode( file_get_contents($filename),true); //第二个参数  返回数组形式

                                }


                  }

 

           }
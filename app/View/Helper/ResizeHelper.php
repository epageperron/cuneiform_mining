<?php
/*
 * Usage : 
 * 
 * 
 * Include this file in your controller $helper array
 * In your view 
 * $imgPath = WWW_ROOT . "files"
 * $resize->fit($imagePath , true , 300 , 0);
 * if the image is 600 * 400 this will set tis size to 300 * 200 
 * 
 * If you want to specify dimensions manually 
 * $resize->fit($imagePath , false , 300 , 130);
 * 
 * 
 * */
  class    ResizeHelper extends AppHelper{
      
      
      /*
       * 
       * 
       * @params String $image = path to image -- Use core constants of cake. WWW_ROOT
       * @params String $url = Location of the image. 
       * @params Bool $fit = set to true if you want helper to determine image height due to the width you specified . 
       * @params Int $maxWidth = Maximum width of the image . 
       * @params Int $maxHeight = Maximum Height of the image . (Default value is 0 if you want the helper to determine due to width)
       * 
       * 
       * */
      
      function fit($image  , $url ,  $fit = true , $maxWidth , $maxHeight ){

            $imgSize = getimagesize($image);
		 if($fit){
                                
                   $ratio = floatval($maxWidth / $imgSize[0]) ;
                   $height = $imgSize[1] * $ratio ; 
                
            }else {
                   $height = $maxHeight;
            }
            $output = '<img src ="'.$url.'" width="'.$maxWidth.'" height="'.$height.'" border="0">'; 
            return $this->output($output);
          
          
      }
  }
?>

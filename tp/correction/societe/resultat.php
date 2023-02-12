<?php


if($_POST['cin']!="")
{
   rechercheparcin($_POST['cin'],$_POST['societe']);
   

   
    
}

function rechercheparcin($cin,$societe):void
{
    $dirname="../fiche/";
    $dir=opendir($dirname);
    while($file=readdir($dir))
    {
        $file=$dirname.$file;
        if(is_file($file))
        
        {
           
            echo  $ouvre=fopen($file,"r");
         
        $lecture=fgets($ouvre,10000000);
            if(strpos($lecture,$cin)!==false)
            {
             if(feof($ouvre))
              {
                fputs($ouvre,$societe,strlen($societe));
            
                echo "ajout effectuer avec succes ";
              }
               else 
               {
                echo "ajout echoue";
               }
            }
               
                    
         
          
        
            
        }
        

        }
        
    }
    






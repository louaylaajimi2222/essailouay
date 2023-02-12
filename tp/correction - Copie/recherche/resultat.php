<?php

if($_POST['nom']!="")
{
    rechereparnom($_POST['nom']);
    
}

if($_POST['prenom']!="")
{
    rechereparprenom($_POST['prenom']);
    
}
if($_POST['cin']!="")
{
    rechereparcin($_POST['cin']);
    
}
if($_POST['adresse']!="")
{
    rechereparadresse($_POST['adresse']);
    
}
if($_POST['tel']!="")
{
    recherepartel($_POST['tel']);
    
}



function rechereparnom($nom)
{
    $dirname="./fiche/";
    $dir=opendir($dirname);
    while($file=readdir($dir))
    {
       
        $file=$dirname.$file;
        if(is_file($file))
        
        {
           
        $ouvre=fopen($file,"r");
        while(!feof($ouvre))
        
        {
            
            
            $lecture=fgets($ouvre,10000000);
            if(strpos($lecture,$nom)!==false)
            {
               
                
                
           
            $donne=explode(" ",$lecture);
            $compteur=count($donne)-1;
           
            echo" <table border='1' >
            <tr>
            <td >   <strong> nom </strong> </td>
            <td>  <strong> prenom </strong> </td>
            <td>  <strong> cin </strong> </td>
            <td>  <strong> tel </strong> </td>
            <td>  <strong> adresse </strong></td>
            <td> <strong> email </strong> </td>
            
            </tr> <tr>";
            for($i=0;$i<=$compteur;$i++)
            {
               echo" <td>  ";
          echo $donne[$i];
          echo" </td>  ";
         
          
          
            }
            echo " </tr> </table>  ";
            
        }
        

        }
       
    }
    }

    


}
///////////////////////////////////
function rechereparprenom($prenom)
{
    $dirname="./fiche/";
    $dir=opendir($dirname);
    while($file=readdir($dir))
    {
        $file=$dirname.$file;
        if(is_file($file))
        
        {
           
        $ouvre=fopen($file,"r");
        while(!feof($ouvre))
        {
            
            $lecture=fgets($ouvre,10000000);
            if(strpos($lecture,$prenom)!==false)
            {
                
                
           
            $donne=explode(" ",$lecture);
            $compteur=count($donne)-1;
           
            echo" <table border='1' >
            <tr>
            <td >   <strong> nom </strong> </td>
            <td>  <strong> prenom </strong> </td>
            <td>  <strong> cin </strong> </td>
            <td>  <strong> tel </strong> </td>
            <td>  <strong> adresse </strong></td>
            <td> <strong> email </strong> </td>
         
            </tr> <tr>";
            for($i=0;$i<=$compteur;$i++)
            {
               echo" <td>  ";
          echo $donne[$i];
          echo" </td>  ";
         
          
          
            }
            echo " </tr> </table>  ";
            
        }
        

        }
        
    }
    }   
}
///////////////////////
function rechereparcin($cin)
{
    $dirname="./fiche/";
    $dir=opendir($dirname);
    while($file=readdir($dir))
    {
        $file=$dirname.$file;
        if(is_file($file))
        
        {
           
        $ouvre=fopen($file,"r");
        while(!feof($ouvre))
        {
            
            $lecture=fgets($ouvre,10000000);
            if(strpos($lecture,$cin)!==false)
            {
                
                
           
            $donne=explode(" ",$lecture);
            $compteur=count($donne)-1;
           
            echo" <table border='1' >
            <tr>
            <td >   <strong> nom </strong> </td>
            <td>  <strong> prenom </strong> </td>
            <td>  <strong> cin </strong> </td>
            <td>  <strong> tel </strong> </td>
            <td>  <strong> adresse </strong></td>
            <td> <strong> email </strong> </td>
            
            </tr> <tr>";
            for($i=0;$i<=$compteur;$i++)
            {
               echo" <td>  ";
          echo $donne[$i];
          echo" </td>  ";
         
          
          
            }
            echo " </tr> </table>  ";
            
        }
        

        }
        
    }
    }

}
//////////////////////
function rechereparadresse($adresse)
{
    $dirname="./fiche/";
    $dir=opendir($dirname);
    while($file=readdir($dir))
    {
        $file=$dirname.$file;
        if(is_file($file))
        
        {
           
        $ouvre=fopen($file,"r");
        while(!feof($ouvre))
        {
            
            $lecture=fgets($ouvre,10000000);
            if(strpos($lecture,$adresse)!==false)
            {
                
                
           
            $donne=explode(" ",$lecture);
            $compteur=count($donne)-1;
           
            echo" <table border='1' >
            <tr>
            <td >   <strong> nom </strong> </td>
            <td>  <strong> prenom </strong> </td>
            <td>  <strong> cin </strong> </td>
            <td>  <strong> tel </strong> </td>
            <td>  <strong> adresse </strong></td>
            <td> <strong> email </strong> </td>
          
            </tr> <tr>";
            for($i=0;$i<=$compteur;$i++)
            {
               echo" <td>  ";
          echo $donne[$i];
          echo" </td>  ";
         
          
          
            }
            echo " </tr> </table>  ";
            
        }
        

        }
       
    }
    }

    
       

}
////////////////////////
function recherepartel($tel)
{
    $dirname="./fiche/";
    $dir=opendir($dirname);
    while($file=readdir($dir))
    {
        $file=$dirname.$file;
        if(is_file($file))
        
        {
           
        $ouvre=fopen($file,"r");
        while(!feof($ouvre))
        {
            
            $lecture=fgets($ouvre,10000000);
            if(strpos($lecture,$tel)!==false)
            {
                
                
           
            $donne=explode(" ",$lecture);
            $compteur=count($donne)-1;
           
            echo" <table border='1' >
            <tr>
            <td >   <strong> nom </strong> </td>
            <td>  <strong> prenom </strong> </td>
            <td>  <strong> cin </strong> </td>
            <td>  <strong> tel </strong> </td>
            <td>  <strong> adresse </strong></td>
            <td> <strong> email </strong> </td>
           
           
            </tr> <tr>";
            for($i=0;$i<=$compteur;$i++)
            {
               echo" <td>  ";
          echo $donne[$i];
          echo" </td>  ";
         
          
          
            }
            echo " </tr> </table>  ";
            
        }
        

        }
        
    }
    }

    
       

}
function rechereparemail($email)
{
    $dirname="./fiche/";
    $dir=opendir($dirname);
    while($file=readdir($dir))
    {
        $file=$dirname.$file;
        if(is_file($file))
        
        {
           
        $ouvre=fopen($file,"r");
        while(!feof($ouvre))
        {
            
            $lecture=fgets($ouvre,10000000);
            if(strpos($lecture,$email)!==false)
            {
                
                
           
            $donne=explode(" ",$lecture);
            $compteur=count($donne)-1;
           
            echo" <table border='1' >
            <tr>
            <td >   <strong> nom </strong> </td>
            <td>  <strong> prenom </strong> </td>
            <td>  <strong> cin </strong> </td>
            <td>  <strong> tel </strong> </td>
            <td>  <strong> adresse </strong></td>
            <td> <strong> email </strong> </td>
          
            </tr> <tr>";
            for($i=0;$i<=$compteur;$i++)
            {
               echo" <td>  ";
          echo $donne[$i];
          echo" </td>  ";
         
          
          
            }
            echo " </tr> </table>  ";
            
        }
        

        }
       
    }
    }
}

//     function rechereparsociete($societe)
// {
//     $dirname="./fiche/";
//     $dir=opendir($dirname);
//     while($file=readdir($dir))
//     {
//         $file=$dirname.$file;
//         if(is_file($file))
        
//         {
           
//         $ouvre=fopen($file,"r");
//         while(!feof($ouvre))
//         {
            
//             $lecture=fgets($ouvre,10000000);
//             if(strpos($lecture,$societe)!==false)
//             {
                
                
           
//             $donne=explode(" ",$lecture);
//             $compteur=count($donne)-1;
           
//             echo" <table border='1' >
//             <tr>
//             <td >   <strong> nom </strong> </td>
//             <td>  <strong> prenom </strong> </td>
//             <td>  <strong> cin </strong> </td>
//             <td>  <strong> tel </strong> </td>
//             <td>  <strong> adresse </strong></td>
//             <td> <strong> email </strong> </td>
//             <td> <strong> societe </strong> </td>
//             </tr> <tr>";
//             for($i=0;$i<=$compteur;$i++)
//             {
//                echo" <td>  ";
//           echo $donne[$i];
//           echo" </td>  ";
         
          
          
//             }
//             echo " </tr> </table>  ";
            
//         }
        

//         }
//         break;
//     }
//     }
       

// }




    
       




?>
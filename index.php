<?php
include "QRGenerator.php"; 
if($_POST)
{
    $ex1 = new QRGenerator($_POST['url'],$_POST['size']); 
    $img1 = "<img src=".$ex1->generate().">";
    $content ='<form method="post" action="">
    <table>
        <tr>
            <td colspan="2">'.$img1.'</td>
        </tr>          
        <tr>
            <td>Text/URL</td>
            <td><input type="text" name="url" /></td>
        </tr>          
        <tr>
            <td>Size</td>
            <td><input type="text" name="size" /> <i>min: 100 and max: 800</i></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="generate" value="Generate" /></td>
        </tr>
    </table></form>';
}
else
{
    $content ='<form method="post" action="">
    <table>
        <tr>
            <td>Text/URL</td>
            <td><input type="text" name="url" /></td>
        </tr>          
        <tr>
            <td>Size</td>
            <td><input type="text" name="size" /> <i>min: 100 and max: 500</i></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="generate" value="Generate" /></td>
        </tr>
    </table></form>';
    $ex1 = new QRGenerator(); 
    $img1 = "<img src=".$ex1->generate().">"; 
      
    $ex2 = new QRGenerator('http://yahoo.com',100); 
    $img2 = "<img src=".$ex2->generate().">"; 

    $ex3 = new QRGenerator('THIS IS JUST A TEXT',100,'ISO-8859-1'); 
    $img3 = "<img src=".$ex3->generate().">"; 

    $ex4 = new QRGenerator('THIS IS JUST A TEXT','ISO-8859-1'); 
    $img4 = "<img src=".$ex4->generate().">";

    $content .='
    <table>
        <tr>
            <td>'.$img1.'</td>
            <td>'.$img2.'</td>
        </tr>          
        <tr>
            <td>'.$img3.'</td>
            <td>'.$img4.'</td>
        </tr>
    </table>';
}



$pre = 1;
$title = "Capstone QR code encoder";
$heading = "Capstone QR code encoder";
include("html.inc");            
?>
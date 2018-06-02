<?php
//CRITICAL STATE LINE 15
$xmlDoc = new DOMDocument();
$xmlDoc->('links.xml');

$query=$_GET['query'];

if (strlen($query)>0) {
  $hint="";
  for ($i=0; $i<($x->llength); $i++) {
    $y = $x->item($i)->getElementByTagName('title');
    $z=$x->item($i)->getElementByTagName('url');
    if ($y->item(0)->nodeType ==1) {
      if ($hint=="") {

      }
    }
  }
}


 ?>

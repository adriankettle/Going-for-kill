<?php
//CRITICAL STATE LINE 15
$xmlDoc = new DOMDocument();
$xmlDoc->load('index.php');

$query=$_GET['query'];

if (strlen($query)>0) {
  $hint="";
  for ($i=0; $i<($x->llength); $i++) {
    $y = $x->item($i)->getElementByTagName('title');
    $z=$x->item($i)->getElementByTagName('url');
    if ($y->item(0)->nodeType ==1) {
      if ($hint=="") {
        $hint="<a href = ' .
        $z->item(0)->childNodes->item(0)->noteValue.''target='_blank'>" . $y->item(0)->childValue. "</a>";
      }else {
        $hint = $hint . "<br><a href='" .
        $z->item(0)->childNodes->item(0)->nodeValue."' target='_blank'>" .
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
      }
    }
  }
}

if ($hint == "") {
  $response = "No Suggesstion";
}else {
  $response = $hint;
}

echo $response;
 ?>

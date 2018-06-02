function showResult(str) {
  if (str.length==0) {
    document.getElementById('output').innerHTML = "";
    document.getElementById('output').style.border="0px";
    return ;
  }

  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  }else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('output').innerHTML = this.responseText;
      document.getElementById('output').style.border="1px solid black";
    }
  }

  xmlhttp.open("GET", "/php/livesearch.php?query="+str, true);
  xmlhttp.send();
}

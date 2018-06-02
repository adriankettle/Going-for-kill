var xmlhttp = new XMLHttpRequest();

function showUser(str) {
  if (str == "") {
    document.getElementById('output').innerHTML ="";
    return ;
  }else {
    if (window.XMLHttpRequest) {
      xmlhtp = new XMLHttpRequest();
    }else {
      xmlhtp = new ActiveXOBject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
      document.getElementById('output').innerHTML = this.responseText;
      }
    }
  };
  xmlhttp.open("GET", "index.php?query= " +str, true);
  xmlhttp.send();
}

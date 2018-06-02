

function load() {
  var xhr;

  xhr = new XMLHttpRequest();
  xhr.onreadystatechange =function () {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById('info').innerHTML =this.resposeText;
      console.log(this.resposeText);
    }
  }
}

xhr.open("GET", "index.php", true);
xhr.send();

const Gallery = document.getElementById("Gallery");
const List = [];


function ADDIMG(src) {
    return Gallery.innerHTML += `<div class="img"><img class="pic" src=assets/img/${src} alt="NO PHOTO" /></div>`
}


var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    const data = [JSON.parse(this.responseText)]
    data.map(item=>{
      ADDIMG(item.imgUrl)
    })
    }
  };
  xhttp.open("GET", "/images.php", true);
  xhttp.send();
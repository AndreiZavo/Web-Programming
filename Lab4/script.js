var lastImage = "forest_image";
document.getElementById("cover-image").src = document.getElementById(lastImage).src;
document.getElementById(lastImage).className = "selected-image";

function preview(image){
    document.getElementById(lastImage).className = "normal-image";
    image.className = "selected-image";
    document.getElementById("cover-image").src = image.src;
    lastImage = image.id;

}
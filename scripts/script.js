let currentImageIndex = 0;
const images = document.getElementsByClassName("imgslideshow");

function changeImage() {
  for (let i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  currentImageIndex = (currentImageIndex + 1) % images.length;
  images[currentImageIndex].style.display = "block";
}

setInterval(changeImage, 3000); // Change image every 3 seconds
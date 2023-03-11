imgArray = [
    "1.jpg",
    "2.jpg",
    "3.jpg",
    "4.jpg",
    "5.jpg",
    "6.jpg",
    "7.jpg",
    "8.jpg",
    "9.jpg",
    "10.jpg",
    "11.jpg",
    "12.jpg",
    "13.jpg",
    ]
    
    
    function images(){
        // the random images
        var randomNumber1 = Math.floor(Math.random() * imgArray.length);
        // get images at randomNumber1
        selectedImages = imgArray[randomNumber1]
        // display the images()
        document.getElementsByClassName("img1")[0].src = 'images/' + selectedImages;
      }
      
      window.onload = images;
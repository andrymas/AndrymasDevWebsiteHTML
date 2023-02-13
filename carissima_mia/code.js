imgArray = [
    "1.png",
    "2.png",
    "3.png",
    "4.png",
    "5.png",
    "6.png"
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
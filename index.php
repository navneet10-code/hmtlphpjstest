<html>
<button id="upload_widget" class="cloudinary-button">Upload files</button>
  
</html>
<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>  

<script type="text/javascript"> 
  
  var url;
var myWidget = cloudinary.createUploadWidget({
  cloudName: 'ddumb92d7', 
  uploadPreset: 'vqqpvdfw'}, (error, result) => { 
    if (!error && result && result.event === "success") { 
      console.log('Done! Here is the image info: ', result.info); 
    url  = console.log('urllllll: ',result.info.eager[0].url);
    
      
    console.log('inside fucntion', url);


      
    }
  }
)

document.getElementById("upload_widget").addEventListener("click", function(){
    myWidget.open();
  }, false);
   
  
  
  
</script>

<html>
  <button onclick="myFunction()">Try it</button>
  <iframe width="560" height="315"
        src="{!url}"
        allowfullscreen="true"/>
</html>

<html>
<button id="upload_widget" class="cloudinary-button">Upload files</button>
</html>
<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>  

<script type="text/javascript">  
var myWidget = cloudinary.createUploadWidget({
  cloudName: 'ddumb92d7', 
  uploadPreset: 'vqqpvdfw'}, (error, result) => { 
    if (!error && result && result.event === "success") { 
      console.log('Done! Here is the image info: ', result.info); 
      console.log('urllllll: ',result.info.eager.url);
    }
  }
)

document.getElementById("upload_widget").addEventListener("click", function(){
    myWidget.open();
  }, false);
</script>

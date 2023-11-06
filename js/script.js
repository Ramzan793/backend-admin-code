// function showImage(inputId, imageId) {
//   var fileInput = document.getElementById(inputId);
//   var imageDisplay = document.getElementById(imageId);

//   if (fileInput.files && fileInput.files[0]) {
//       var reader = new FileReader();

//       reader.onload = function (e) {
//           imageDisplay.src = e.target.result;
//       };

//       reader.readAsDataURL(fileInput.files[0]);
//   }
// }

  $(document).ready(function(){
    $('.deletebtn').click(function(e){
      e.preventDefault();

      var user_id = $(this).val();
      console.log(user_id);
    });
  });

 
// SWALERT ORIGINAL

// function showConfirmation() {
//   Swal.fire({
//     title: "Are you sure?",
//     text: "You want to reserve?",
//     icon: "question",
//     showCancelButton: true,
//     confirmButtonText: "Yes",
//     cancelButtonText: "Cancel",
//     confirmButtonColor: "#008000",
//     cancelButtonColor: "#ff0000",
//     customClass: {
//       confirmButton: "green-ok-button",
//     },
//   }).then((result) => {
//     if (result.isConfirmed) {

//       axios
//         .post(
//           "forms/reservation_form.php",
//           new FormData(document.querySelector("form"))
//         )
//         .then((response) => {
//           if (response.data.status === "success") {

//             Swal.fire({
//               title: "Success!",
//               text: "Reservation Successfully",
//               icon: "success",
//             });

//             document.querySelector("form").reset();
//           } else {

//             Swal.fire({
//               title: "Error!",
//               text: "Failed to process the reservation",
//               icon: "error",
//             });
//           }
//         })
//         .catch((error) => {

//           console.error(error);
//           Swal.fire({
//             title: "Error!",
//             text: "An unexpected error occurred",
//             icon: "error",
//           });
//         });
//     } else {

//     }
//   });
// }

// SWALERT

// function showConfirmation() {
//   Swal.fire({
//     title: "Are you sure?",
//     text: "You want to reserve?",
//     icon: "question",
//     showCancelButton: true,
//     confirmButtonText: "Yes",
//     cancelButtonText: "Cancel",
//   }).then((result) => {
//     if (result.isConfirmed) {

//       Swal.fire({
//         title: "Success!",
//         text: "Reservation Successful!",
//         icon: "success",
//       });

//       document.getElementById("msform").submit();
//     }
//   });
// }

function validateForm() {
  var fields = document.querySelectorAll("input[required]");
  for (var i = 0; i < fields.length; i++) {
    if (!fields[i].value) {
      Swal.fire({
        title: "Sorry!",
        text: "Please fill in all required fields!",
        icon: "error",
      });
      return false;
    }
  }
  return true;
}

function showConfirmation() {
  Swal.fire({
    title: "Are you sure?",
    text: "You want to reserve?",
    icon: "question",
    showCancelButton: true,
    confirmButtonText: "Yes",
    cancelButtonText: "Cancel",
  }).then((result) => {
    if (result.isConfirmed) {
      // Get form data
      var formData = new FormData(document.getElementById("msform"));

      // Use AJAX to send data to the server
      $.ajax({
        type: "POST",
        url: "../../forms/reservation_form.php", // Update with your server-side processing script
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
          // Handle the response from the server
          var data = JSON.parse(response);

          if (data.status === "success") {
            Swal.fire({
              title: "Success!",
              text: "Reservation Successful!",
              icon: "success",
            });
          } else {
            Swal.fire({
              title: "Error!",
              text: "Reservation failed. Please try again.",
              icon: "error",
            });
          }
        },
      });
    }
  });
}

// //jQuery time
// var current_fs, next_fs, previous_fs; //fieldsets
// var left, opacity, scale; //fieldset properties which we will animate
// var animating; //flag to prevent quick multi-click glitches

// $(".next").click(function () {
//   if (animating) return false;
//   animating = true;

//   current_fs = $(this).parent();
//   next_fs = $(this).parent().next();

//   //activate next step on progressbar using the index of next_fs
//   $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//   //show the next fieldset
//   next_fs.show();
//   //hide the current fieldset with style
//   current_fs.animate(
//     { opacity: 0 },
//     {
//       step: function (now, mx) {
//         //as the opacity of current_fs reduces to 0 - stored in "now"
//         //1. scale current_fs down to 80%
//         scale = 1 - (1 - now) * 0.2;
//         //2. bring next_fs from the right(50%)
//         left = now * 50 + "%";
//         //3. increase opacity of next_fs to 1 as it moves in
//         opacity = 1 - now;
//         current_fs.css({
//           transform: "scale(" + scale + ")",
//           position: "absolute",
//         });
//         next_fs.css({ left: left, opacity: opacity });
//       },
//       duration: 800,
//       complete: function () {
//         current_fs.hide();
//         animating = false;
//       },
//       //this comes from the custom easing plugin
//       easing: "easeInOutBack",
//     }
//   );
// });

// JavaScript Code

// Variables
// var current_fs, next_fs, previous_fs;
// var left, opacity, scale; //fieldset properties which we will animate
// var animating; //flag to prevent quick multi-click glitches

// // Next button click function
// $(".next").click(function () {
//   current_fs = $(this).parent();
//   next_fs = $(this).parent().next();

//   // Activate next step on progress bar
//   $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//   // Show next fieldset
//   next_fs.show();

//   // Hide current fieldset
//   current_fs.animate(
//     { opacity: 0 },
//     {
//       step: function (now, mx) {
//         // Animation code
//       },
//       duration: 800,
//       complete: function () {
//         // current_fs.hide();
//       },
//       easing: "easeInOutBack",
//     }
//   );

//   // Set form container height
//   setFormContainerHeight();
// });

// // Previous button click
// $(".previous").click(function () {
//   current_fs = $(this).parent();
//   previous_fs = $(this).parent().prev();

//   // De-activate current step on progress bar
//   $("#progressbar li")
//     .eq($("fieldset").index(current_fs))
//     .removeClass("active");

//   // Show previous fieldset
//   previous_fs.show();

//   // Hide current fieldset
//   current_fs.animate(
//     { opacity: 0 },
//     {
//       step: function (now, mx) {
//         // Animation code
//       },
//       duration: 800,
//       complete: function () {
//         // current_fs.hide();
//       },
//       easing: "easeInOutBack",
//     }
//   );

//   // Set form container height
//   setFormContainerHeight();
// });

// function setFormContainerHeight() {
//   var currentHeight = $(".form-container").height();
//   var nextHeight = $("#msform fieldset:visible").height();

//   if (currentHeight < nextHeight) {
//     // Going forward to a taller step
//     $(".form-container").height(nextHeight);
//   } else if (currentHeight > nextHeight) {
//     // Going back to a shorter step
//     $(".form-container").height(nextHeight);
//   }
// }

// $(".submit").click(function () {
//   return false;
// });

// MULTI FORM 0RIGINAL

//jQuery time
// var current_fs, next_fs, previous_fs; //fieldsets
// var left, opacity, scale; //fieldset properties which we will animate
// var animating; //flag to prevent quick multi-click glitches

// $(".next").click(function () {
//   if (animating) return false;
//   animating = true;

//   current_fs = $(this).parent();
//   next_fs = $(this).parent().next();

//   //activate next step on progressbar using the index of next_fs
//   $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//   //show the next fieldset
//   next_fs.show();
//   //hide the current fieldset with style
//   current_fs.animate(
//     { opacity: 0 },
//     {
//       step: function (now, mx) {
//         //as the opacity of current_fs reduces to 0 - stored in "now"
//         //1. scale current_fs down to 80%
//         scale = 1 - (1 - now) * 0.2;
//         //2. bring next_fs from the right(50%)
//         left = now * 50 + "%";
//         //3. increase opacity of next_fs to 1 as it moves in
//         opacity = 1 - now;
//         current_fs.css({
//           transform: "scale(" + scale + ")",
//           position: "absolute",
//         });
//         next_fs.css({ left: left, opacity: opacity });
//       },
//       duration: 800,
//       complete: function () {
//         current_fs.hide();
//         animating = false;
//         current_fs.find("input, textarea, select").prop("disabled", true);
//       },
//       //this comes from the custom easing plugin
//       easing: "easeInOutBack",
//     }
//   );
// });

// $(".previous").click(function () {
//   if (animating) return false;
//   animating = true;

//   current_fs = $(this).parent();
//   previous_fs = $(this).parent().prev();

//   //de-activate current step on progressbar
//   $("#progressbar li")
//     .eq($("fieldset").index(current_fs))
//     .removeClass("active");

//   //show the previous fieldset
//   previous_fs.show();
//   //hide the current fieldset with style
//   current_fs.animate(
//     { opacity: 0 },
//     {
//       step: function (now, mx) {
//         //as the opacity of current_fs reduces to 0 - stored in "now"
//         //1. scale previous_fs from 80% to 100%
//         scale = 0.8 + (1 - now) * 0.2;
//         //2. take current_fs to the right(50%) - from 0%
//         left = (1 - now) * 50 + "%";
//         //3. increase opacity of previous_fs to 1 as it moves in
//         opacity = 1 - now;
//         current_fs.css({ left: left });
//         previous_fs.css({
//           transform: "scale(" + scale + ")",
//           opacity: opacity,
//         });
//       },
//       duration: 800,
//       complete: function () {
//         current_fs.hide();
//         animating = false;
//         current_fs.find("input, textarea, select").prop("disabled", true);
//       },
//       //this comes from the custom easing plugin
//       easing: "easeInOutBack",
//     }
//   );
// });

// $(".submit").click(function () {
//   return false;
// });

var current_fs, next_fs, previous_fs; // fieldsets
var left, opacity, scale; // fieldset properties which we will animate
var animating; // flag to prevent quick multi-click glitches

$(".next").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  // activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  // show the next fieldset
  next_fs.show();
  // hide the current fieldset with style
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        // as the opacity of current_fs reduces to 0 - stored in "now"
        // 1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        // 2. bring next_fs from the right(50%)
        left = now * 50 + "%";
        // 3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          transform: "scale(" + scale + ")",
          position: "absolute",
        });
        next_fs.css({ left: left, opacity: opacity });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
        // Enable inputs in the next fieldset
        next_fs.find("input, textarea, select").prop("disabled", false);
      },
      // this comes from the custom easing plugin
      easing: "easeInOutBack",
    }
  );
});

$(".previous").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  // de-activate current step on progressbar
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");

  // show the previous fieldset
  previous_fs.show();
  // hide the current fieldset with style
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        // as the opacity of current_fs reduces to 0 - stored in "now"
        // 1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        // 2. take current_fs to the right(50%) - from 0%
        left = (1 - now) * 50 + "%";
        // 3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({ left: left });
        previous_fs.css({
          transform: "scale(" + scale + ")",
          opacity: opacity,
        });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
        // Enable inputs in the previous fieldset
        previous_fs.find("input, textarea, select").prop("disabled", false);
      },
      // this comes from the custom easing plugin
      easing: "easeInOutBack",
    }
  );
});

$(".submit").click(function () {
  return false;
});

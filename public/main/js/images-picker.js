
// Optional code

// Tile Picker Active Border
$(document).on("click", ".tile-picker input", function(e) {
    if ($(this).is(":checked")) {
      $(this).closest(".tile-picker").addClass("active");
    } else {
      $(this).closest(".tile-picker").removeClass("active");
    }
  });
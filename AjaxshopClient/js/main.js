var prodArray = [];

function getAllProducts() {
  $.ajax({
    method: "GET",
    url: "http://ajaxshop.test/index.php",
    success: function(dataFromDb) {
      console.log("something");
    }
  });
}

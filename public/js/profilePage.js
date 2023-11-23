$(function () {
  $("#pamit").on("click", function () {
    $.post("user/logout", { _token: token }).done(function () {
      $("#modalTitle").text("Pamit");

      $("#modalBody").html(`Sampai bertemu kembali!!!`);
      $("#modalContent").addClass("alert-success");

      $("#modal").on("hidden.bs.modal", function () {
        $("#modalTitle").text("Notifikasi");
        $("#modalBody").html("");
        $("#modalContent").removeClass("alert-success");
        window.location.href = window.location.origin;
      });

      var myModal = new bootstrap.Modal(document.getElementById("modal"), {
        keyboard: false,
      });
      myModal.show();
    });
  });

  $("#editProfile").on("click", function () {
    window.location.href = "profile/edit";
  });
  $("#deleteAccount").click(function () {
    if (
      confirm(
        "Are you sure you want to delete your account? This action cannot be undone."
      )
    ) {
      // Perform AJAX request to delete account
      $.ajax({
        type: "DELETE",
        url: "user/delete", // Replace with your actual route URL
        data: {
          _token: token,
          password: prompt(
            "Please enter your password to confirm account deletion:"
          ),
        },
        success: function (response) {
          alert("Account deleted successfully.");
          window.location.href = "/"; // Redirect to the home page or login page
        },
        error: function (error) {
          console.log("Error:", error);
          alert("An error occurred while deleting the account.");
        },
      });
    }
  });
});

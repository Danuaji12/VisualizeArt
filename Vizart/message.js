// JavaScript to handle form submission via AJAX
document.getElementById("art").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent the default form submission

  var formData = new FormData(this); // Collect form data
  var formAction =
    "https://script.google.com/macros/s/AKfycbywnNKTvrl-UgJFC10C94L5-UzwOXUzgNpWeDA-X6DkYpaVV1FIt0QhJ5xc05m7VNb08w/exec"; // Google Apps Script URL

  // Show loading spinner and text
  document.getElementById("loadingSpinner").style.display = "inline-block";
  document.getElementById("loadingText").style.display = "inline-block";

  fetch(formAction, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text()) // Wait for a response
    .then((responseText) => {
      console.log(responseText); // You can check if the response is successful or not
      alert("Your message has been sent!"); // Show a success message
      document.getElementById("art").reset(); // Reset form fields (clears the form)

      // Hide loading spinner and text after successful submission
      document.getElementById("loadingSpinner").style.display = "none";
      document.getElementById("loadingText").style.display = "none";
    })
    .catch((error) => {
      console.error("Error submitting form:", error);
      alert("There was an error submitting your form. Please try again.");

      // Hide loading spinner and text if there is an error
      document.getElementById("loadingSpinner").style.display = "none";
      document.getElementById("loadingText").style.display = "none";
    });
});

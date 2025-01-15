document.addEventListener("DOMContentLoaded", function () {
  const iconEye = document.querySelector(".icon_eye");
  iconEye.addEventListener("click", function () {
    const icon = this.querySelector("i");
    if (this.nextElementSibling.type === "password") {
      this.nextElementSibling.type = "text";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    } else {
      this.nextElementSibling.type = "password";
      icon.classList.add("fa-eye");
      icon.classList.remove("fa-eye-slash");
    }
  });
});
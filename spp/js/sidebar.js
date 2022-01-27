// let sidebar = document.querySelector(".sidebar1");
// let closeBtn = document.querySelector("#btn");
// let searchBtn = document.querySelector(".fa-search");

// closeBtn.addEventListener("click", () => {
//   sidebar.classList.toggle("open");
//   menuBtnChange(); //calling the function(optional)
// });

// searchBtn.addEventListener("click", () => {
//   // Sidebar open when you click on the search iocn
//   sidebar.classList.toggle("open");
//   menuBtnChange(); //calling the function(optional)
// });

// // following are the code to change sidebar button(optional)
// function menuBtnChange() {
//   if (sidebar.classList.contains("open")) {
//     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
//   } else {
//     closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
//   }
// }

// $(document).ready(() => {
//   $("#form").submit(function (event) {
//     event.preventDefault();
//     search();
//   });

//   function search() {
//     const input = document.getElementById("input").value.toLowerCase();

//     switch (input) {
//       case "login":
//         return (window.location.href = "../tampil/login.php");
//       case "dashboard":
//         return (window.location.href = "../tampil/dashboard_admin.php");
//       case "user":
//         return (window.location.href = "dakon.html");
//       case "product":
//         return (window.location.href = "gedrik.html");
//       case "add product":
//         return (window.location.href = "gobaksodor.html");
//       case "home":
//         return (window.location.href = "gangsing.html");
//       default:
//         return (window.location.href = "404.html");
//     }
//   }
// });s
// زر اخفاء و اظهار ال sidebar
document.addEventListener("DOMContentLoaded", function() {
  const sidebar = document.querySelector(".left-sidebar");
  const toggleBtn = document.querySelector("#toggleSidebar");
  const mainWrapper = document.querySelector("#main-wrapper");
  
  if (sidebar.classList.contains("hidden")) {
    toggleBtn.setAttribute("title", "Show Sidebar");
  } else {
    toggleBtn.setAttribute("title", "Hide Sidebar");
  }
  
  toggleBtn.addEventListener("click", function() {
    sidebar.classList.toggle("hidden");
    
    if (sidebar.classList.contains("hidden")) {
      mainWrapper.classList.add("sidebar-hidden");
      toggleBtn.style.left = "10px";
      toggleBtn.setAttribute("title", "Show Sidebar");
    } else {
      mainWrapper.classList.remove("sidebar-hidden");
      toggleBtn.style.left = (sidebar.offsetWidth + 10) + "px";
      toggleBtn.setAttribute("title", "Hide Sidebar");
    }
  });
});
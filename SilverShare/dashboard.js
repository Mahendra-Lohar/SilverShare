// Get references to the navbar items and content sections
const dashboardNavItem = document.getElementById('dashboard');
const videocallNavItem = document.getElementById('videocall');
const dashboardContent = document.getElementById('dashboard-content');
const videocallContent = document.getElementById('videocall-content');

// Add click event listeners to the navbar items
dashboardNavItem.addEventListener('click', () => {
  // Toggle the visibility of the Dashboard content
  dashboardContent.style.display = 'block';
  videocallContent.style.display = 'none';
});

videocallNavItem.addEventListener('click', () => {
  // Toggle the visibility of the Videocall content
  dashboardContent.style.display = 'none';
  videocallContent.style.display = 'block';
});
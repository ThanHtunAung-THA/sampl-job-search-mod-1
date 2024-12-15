// Email function
function sendEmail() {
var name = document.getElementById('name').value;
var email = document.getElementById('email').value;
var subj = document.getElementById('subj').value;
var msg = document.getElementById('msg').value;

var mailtoLink = 'mailto:t.thantunaung@gmail.com?subject=Contact%20Form%20Submission&body=' +
'Name: ' + encodeURIComponent(name) + '%0D%0A' +
'Email: ' + encodeURIComponent(email) + '%0D%0A' +
'Subj: ' + encodeURIComponent(subj) + '%0D%0A' +
'Message: ' + encodeURIComponent(msg);

window.location.href = mailtoLink;
}

// Popup message box function
function popupMessageBox() {
const popupMessage = document.getElementById('popup-message');
const closePopup = document.getElementById('close-popup');

if (popupMessage && closePopup) {
closePopup.addEventListener('click', () => {
popupMessage.style.display = 'none';
});

popupMessage.addEventListener('click', (e) => {
if (e.target === popupMessage) {
popupMessage.style.display = 'none';
}
});
}
}

// Show thumbnail function
function showThumbnail(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
var thumbnail = document.getElementById('thumbnail-container');
thumbnail.innerHTML = '<img src="' + e.target.result + '" style="width: 100%; height: 100%; object-fit: cover;">';
};
reader.readAsDataURL(input.files[0]);
}
}

// Initialize tooltip feature function
function initTooltips() {
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
});
}

// Get current year function
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var yearElement = document.querySelector("#displayYear");
    
    if (yearElement) { // Check if the element exists
        yearElement.innerHTML = currentYear;
    } else {
        console.error("Element with ID 'displayYear' not found.");
    }
}

// Nice select function
function niceSelect() {
$(document).ready(function () {
$('select').niceSelect();
});
}

// Search bar function
function searchBar() {
    alert('search bar function is under construction.'); 
}

// function toggleSidebar() {
//   const sidebar = document.getElementById('sidebar');
//   sidebar.classList.toggle('collapsed');
// }
function toggleSidebar() {
const sidebar = document.getElementById('sidebar');
sidebar.classList.toggle('collapsed'); // Toggle the sidebar's collapsed class

// Update the chart when sidebar is toggled
if (dashboardChart) {
dashboardChart.update(); // Update the existing chart
}
}

$(document).ready(function() {
$('#jobTable').DataTable({
dom: 'Bfrtip',
buttons: [
'copy', 'csv', 'excel', 'pdf', 'print'
]
});
});


// Run functions on page load
document.addEventListener('DOMContentLoaded', function () {
popupMessageBox();
initTooltips();
getYear();
niceSelect();

const sendButton = document.getElementById('sendButton');
if (sendButton) {
    sendButton.addEventListener('click', sendEmail);
}

});

function ALERT() {
    alert('Current Action is under construction.');
 }

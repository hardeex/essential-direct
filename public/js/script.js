


// TOGGLE THE MENU ICONS CODE --- show/hide the nav menu\
// access the document dom  upon loading the screen using DomContentLoader and access the variable using querySelector
document.addEventListener('DOMContentLoaded', function () {
    var menuIcon = document.querySelector('#menu-icon');
    var sidebar = document.querySelector('#sidebar');
    var closeButton = document.querySelector('#close-button');

    // Function to toggle the sidebar visibility 
    function toggleSidebar() {
        sidebar.classList.toggle('sidebar-open');
    }

    // Function to close the sidebar when the close button is clicked
    function closeSidebar() {
        sidebar.classList.remove('sidebar-open');
    }

    // Add a click event listener to the menu icon to open the sidebar
    menuIcon.addEventListener('click', toggleSidebar);

    // Add a click event listener to the close button to close the sidebar
    closeButton.addEventListener('click', closeSidebar);
});


// Playing around with my code



// end of toggling the nav menu




// FORGOT PASSWORD JAVASCRIPT TOOGLE JS CODE
function toggleResetOption() {
    const resetOption = document.getElementById("reset-option").value;
    const chooseOption = document.querySelector(".choose-option");
    const emailOption = document.querySelector(".email-option");
    const phoneOption = document.querySelector(".phone-option");
    const btnSendLink = document.querySelector(".btn-send-otp");
    
    // checking for the options selected by the user

    if (resetOption === "email") {
        emailOption.style.display = "block";
        phoneOption.style.display = "none";
        chooseOption.style.display = 'none';
        btnSendLink.style.display = "block";

    } else if (resetOption === "phone") {
        emailOption.style.display = "none";
        phoneOption.style.display = "block";
        chooseOption.style.display = 'none';
        btnSendLink.style.display = "block";

    } else {
        chooseOption.style.display = "block";
        phoneOption.style.display = "none";
        emailOption.style.display = "none";
        btnSendLink.style.display = "none";
       
    }
}

function sendResetLink() {
    // Implement the logic to send the reset link based on the selected option (email or phone).
    const resetOption = document.getElementById("reset-option").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone-number").value;

    if (resetOption === "email") {
        // Send reset link to the provided email address (email variable).
        alert(` Developer Adewale testing the Reset link sent to email: ${email}`);
    } else {
        // Send reset link to the provided phone number (phone variable).
        alert(`Developer Adewale testing the Reset link sent to phone number: ${phone}`);
    }
}

//   WORKING ON THE USER DASHBOARD --- SHOW AND UPDATE THE SWITCH ACCOUNT FROM THE DASHBOARD
function showSwitchAccountAlert() {
    const switchAccountAlert = document.getElementById('switch-account-alert');
    switchAccountAlert.style.display = 'block';

    // Attach a click event listener to the Cancel button
    const cancelButton = switchAccountAlert.querySelector('.cancel-button');
    cancelButton.addEventListener('click', closeSwitchAccountAlert);
}

function switchAccount() {
    const userRadio = document.getElementById('user-radio');
    const businessRadio = document.getElementById('business-radio');

    if (userRadio.checked) {
        // Redirect to the user account page
        window.location.href = 'profile';
    } else if (businessRadio.checked) {
        // Redirect to the business account page
        window.location.href = 'business_account_page_url_here';
    }

    // Close the custom alert
    closeSwitchAccountAlert();
}

function closeSwitchAccountAlert() {
    const switchAccountAlert = document.getElementById('switch-account-alert');
    switchAccountAlert.style.display = 'none';
}

// Add this function to show the alert when clicking "Switch Account"
document.querySelector('.switch-account').addEventListener('click', showSwitchAccountAlert);











// playing around with the code for loading the content from the db in the dashboard
function loadContent(sectionId) {
    // Get the content of the selected section
    const content = document.getElementById(sectionId);

    // Get the dashboard section
    const dashboardSection = document.getElementById('dashboard-section');

    // Clear the content of the dashboard section
    dashboardSection.innerHTML = '';

    // Append the selected content to the dashboard section
    dashboardSection.appendChild(content.cloneNode(true));
}





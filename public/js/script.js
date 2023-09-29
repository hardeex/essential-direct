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
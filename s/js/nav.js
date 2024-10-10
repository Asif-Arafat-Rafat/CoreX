document.addEventListener('DOMContentLoaded', function () {
    // Selecting the profile icon and dropdown
    const profileDropdownToggle = document.querySelector('.loggedinicon');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // Toggle dropdown on profile icon click
    profileDropdownToggle.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent event from bubbling up
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block'; // Toggle dropdown
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function () {
        dropdownMenu.style.display = 'none'; // Hide dropdown when clicking outside
    });

    // Prevent dropdown from closing when clicking inside it
    dropdownMenu.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the document-level click from closing the dropdown
    });
});

// Show login/register form on profile icon click if user is not logged in
const profileform = document.querySelector('.profileicon');

profileform.addEventListener('click', () => {
    const loginform = document.querySelector('.form');
    loginform.style.top = '50%';
    loginform.style.transform = 'translate(-50%,-50%)';
    document.querySelector('.formbg').style.display = 'inline';
    document.querySelector('body').style.overflow = 'hidden';
});

// Close form on background click
document.querySelector('.formbg').addEventListener('click', () => {
    const loginform = document.querySelector('.form');
    loginform.style.top = '-600px';
    document.querySelector('.formbg').style.display = 'none';
    document.querySelector('body').style.overflow = 'scroll';
});

// Switch between login and register form tabs
document.querySelector('.loginOption').addEventListener('click', () => {
    document.querySelector('.login').style.display = 'inline';
    document.querySelector('.loginOption').style.borderBottom = "4px solid yellow";
    document.querySelector('.registerOption').style.borderBottom = "0px solid yellow";
    document.querySelector('.register').style.display = 'none';
});

document.querySelector('.registerOption').addEventListener('click', () => {
    document.querySelector('.login').style.display = 'none';
    document.querySelector('.loginOption').style.borderBottom = "0px solid yellow";
    document.querySelector('.registerOption').style.borderBottom = "4px solid yellow";
    document.querySelector('.register').style.display = 'inline';
});

// Navigate to home page when the home button is clicked
document.querySelector('#homeButton').addEventListener('click', () => {
    window.location.href = "./index.php";
});

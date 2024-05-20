
const viewDetailsBtns = document.querySelectorAll('.View-Details');


const removeUserBtns = document.querySelectorAll('.remove-user');


viewDetailsBtns.forEach((btn) => {
    btn.addEventListener('click', handleViewDetails);
});

removeUserBtns.forEach((btn) => {
    btn.addEventListener('click', handleRemoveUser);
});


function handleViewDetails(event) {
    const container = event.target.parentNode.parentNode;
    const userId = container.querySelector('.user-id').textContent;
    const userName = container.querySelector('.user-name').textContent;
    const userAddress = container.querySelector('.user-address').textContent;
    const userPhone = container.querySelector('.user-phone').textContent;
    const userEmail = container.querySelector('.user-email').textContent;
  
  
    console.log("User ID: " + userId);
    console.log("Name: " + userName);
    console.log("Address: " + userAddress);
    console.log("Phone: " + userPhone);
    console.log("Email: " + userEmail);
}


function handleRemoveUser(event) {
    const container = event.target.parentNode.parentNode;
    container.remove();
}

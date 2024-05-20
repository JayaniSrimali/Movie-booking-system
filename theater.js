
const viewDetailsBtns = document.querySelectorAll('.View-Details');


const removeTheaterBtns = document.querySelectorAll('.remove-theater');


viewDetailsBtns.forEach((btn) => {
    btn.addEventListener('click', handleViewDetails);
});

removeTheaterBtns.forEach((btn) => {
    btn.addEventListener('click', handleRemoveTheater);
});


function handleViewDetails(event) {
    const container = event.target.parentNode.parentNode;
    const theaterId = container.querySelector('.theater-id').textContent;
    const theaterName = container.querySelector('.theater-name').textContent;
    const location = container.querySelector('.location').textContent;

  
  
    console.log("Theater ID: " + theaterId);
    console.log("TheaterName: " + theaterName);
    console.log("location: " + location);
   
}


function handleRemoveTheater(event) {
    const container = event.target.parentNode.parentNode;
    container.remove();
}
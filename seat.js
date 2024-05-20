const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const categorySelect = document.getElementById("category");

populateUI();

let ticketPrice = +categorySelect.value;


function setMovieData(categoryIndex, categoryPrice) {
  localStorage.setItem("selectedcategoryIndex", categoryIndex);
  localStorage.setItem("selectedcategoryPrice", categoryPrice);
}


function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;

  setcategoryData(categorySelect.selectedIndex, categorySelect.value);
}



function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        console.log(seat.classList.add("selected"));
      }
    });
  }

  const selectedcategoryIndex = localStorage.getItem("selectedcategoryIndex");

  if (selectedcategoryIndex !== null) {
    categorySelect.selectedIndex = selectedcategoryIndex;
    console.log(selectedcategoryIndex)
  }
}
console.log(populateUI())

categorySelect.addEventListener("change", (e) => {
  ticketPrice = +e.target.value;
  setcategoryData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});


container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    updateSelectedCount();
  }
});


updateSelectedCount();

function myFunction() {
  
  
  alert('Seats booked successfully!');
  
}

  


document.addEventListener("DOMContentLoaded", function() {
    var movieNameElement = document.getElementById('movie-name');
    var movieLanguageElement = document.getElementById('movie-language');
    var movieDateElement = document.getElementById('movie-date');
    var movieTheatreElement = document.getElementById('movie-theatre');
    var movieImgElement = document.getElementById('movie-img');
    var movieNameElement = document.getElementById('ticket-number');
    var movieLanguageElement = document.getElementById('ticket-type');
    var movieDateElement = document.getElementById('ticket-price');
    var movieTheatreElement = document.getElementById('noofticket');
    var movieImgElement = document.getElementById('ticket-img');
    var userTdElement = document.getElementById('user-td');
    var userNameElement = document.getElementById('user-name');
    var userAddressElement = document.getElementById('user-address');
    var userPhoneElement = document.getElementById('user-phone');
    var userEmailElement = document.getElementById('user-email');
    var userImgElement = document.getElementById('user-img');


    
    var movieDetails = {
      name: "Evil Dead Rise",
      language: " English",
      date: "May 4, 20233",
      theatre: "The Playhouse Theatre",
      imageSrc: "Evil_Dead_Rise.jpg"
    };
    
     var ticketDetails = {
        number: "T00163",
       type : " Balcony",
        price : " $7",
        noofticket: "03",
        imageSrc: "Ticket.jpg"
      };
     
  var userDetails = {
    td: "User ID : U_004",
    name: "Name: Sarah Davis",
    address: "Address: 1 The Mall,United kindom",
    phone: "Phone Number: 810047815",
    email: "Email: sarah56@gmail.com",
    imageSrc: "user.jpg"
  };
    movieNameElement.textContent = movieDetails.name;
    movieDateElement.textContent = movieDetails.date;
    movieLanguageElement.textContent = movieDetails.language;
    movieTheatreElement.textContent = movieDetails.theatre;
    movieImgElement.src = movieDetails.imageSrc;


    
    ticketnumberElement.textContent = ticketDetails.number;
    ticketDateElement.textContent = ticketDetails.type;
    ticketLanguageElement.textContent = ticketDetails.price;
    ticketTheatreElement.textContent = ticketDetails.noofticket;
    ticketImgElement.src = ticketDetails.imageSrc;


    userTdElement.textContent = userDetails.td;
    userNameElement.textContent = userDetails.name;
    userAddressElement.textContent = userDetails.address;
    userPhoneElement.textContent = userDetails.phone;
    userEmailElement.textContent = userDetails.email;
    userImgElement.src = userDetails.imageSrc;

    
  });
  
function firsthome(val) {
    if (val == 1) {
        document.getElementById("img").src = "pascal-blanche-dune-movie-dune-series-artwork-science-fiction-hd-wallpaper-preview.jpg";
    } else if (val == 2) {
        document.getElementById("img").src = "movies-007-skyfall-daniel-craig-wallpaper-preview.jpg";
    } else if (val == 3) {
        document.getElementById("img").src = "movie-poster-star-wars-leia-organa-darth-vader-wallpaper-preview.jpg";
    } else if (val == 4) {
        document.getElementById("img").src = "john-wick-movies-movie-poster-wallpaper-preview.jpg";
    } else if (val == 5) {
        document.getElementById("img").src = "godzilla-movies-digital-art-movie-poster-wallpaper-preview.jpg";
    } else if (val == 6) {
        document.getElementById("img").src = "alien-movie-poster-sigourney-weaver-movie-poster-wallpaper-preview.jpg";
    }
}



function sel(gen) {
    document.getElementById(gen).style.backgroundColor = 'blueviolet';
}

function unsel(gen) {

    document.getElementById(gen).style.backgroundColor = 'white';

}

function popup(smvies) {

    smvies = ["Search a movie here"];

    var cont = "";
    for (var i = 0; i < smvies.length; i++) {
        cont = cont + "<a href='moviedetail.html'>" + smvies[i] + "</a>" + "<br>";
    }

    var pwin = window.open('', 'popupWindow', 'width=500.height=300');

    pwin.document.write(cont);



}

function dat() {

    var dat = new Date();

    var day = dat.getDate();
    var month = dat.getMonth() + 1;
    var year = dat.getFullYear();

    var fullDate = day + '/' + month + '/' + year;

    document.getElementById("date").innerHTML = fullDate;

}


function change(data) {
    if (data == 1) {
        window.open('change.php', 'popupWindow', 'width=500.height=300');
    }else if (data == 2) {
        window.open('delete.php', 'popupWindow', 'width=500.height=300');
    }
}

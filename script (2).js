
        
        var fname = "<?php echo $fname; ?>";
        var lname = "<?php echo $lname; ?>";
        var add = "<?php echo $add; ?>";
        var conNo = "<?php echo $conNo; ?>";
        var fMovie = "<?php echo $fMovie; ?>";
        var cst = "<?php echo $cst; ?>";
        var theater = "<?php echo $theater; ?>";
        var castImages = <?php echo json_encode($castImages); ?>;

      
        document.getElementById("first-name").innerText = fname;
        document.getElementById("last-name").innerText = lname;
        document.getElementById("address").innerText = add;
        document.getElementById("contact-no").innerText = conNo;

        document.getElementById("favorite-movie").value = fMovie;
        document.getElementById("cast").value = cst;
        document.getElementById("theater").value = theater;

        
        var imageGallery = document.getElementById("image-gallery");
        castImages.forEach(function(castImage) {
            var img = document.createElement("img");
            img.classList.add("cast-image");
            img.src = "data:image/jpeg;base64," + castImage.cast_image;
            imageGallery.appendChild(img);
        });
    
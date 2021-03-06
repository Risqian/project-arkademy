<!DOCTYPE html>

<?php
include "show-data.php";
include "update-data.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assest/css/index.css" />
    <link rel="stylesheet" href="assest/css/mobileMiddle.css" />
    <link rel="stylesheet" href="assest/css/mobileSmall.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Page</title>
    <meta name="vieport" content="width-devide-width,initial-scale-1.0">

</head>

<body>

    <!-- Bagian Navigasi -->
    <nav>
        <div class="menu-mobile">
            <a href="#" onclick="showMenu()">Menu</a>
        </div>
        <ul id="menu">
            <li><a href="#"> HOME </a></li>
            <li><a href="#"> PRODUCT </a></li>
            <li><a href="#"> GALLERY </a></li>
            <li><a href="#"> NEWS </a></li>
            <li><a href="#"> MY INVENTORY </a></li>
        </ul>
    </nav>

    <!-- Bagian Section -->
    <section id="box-profile">
        <div class="img-profile">
            <div class="photo" style="background-image: url(assest/img/kojurou.png);">

            </div>
        </div>
        <div class="description">
            <h1 id="pName"> <?php echo $nama; ?> </h1>
            <p id="pRole"> <?php echo $role; ?> </p id="pRole">
            <a href="#input-form" class="button bg-green" onclick="editForm()"> Edit </a>
            <a href="#" class="button border-blue"> Resume </a>
        </div>
        <div class="information">
            <div class="data">
                <p class="field">Availability</p>
                <p id="pAvailable" class="text-grey"><?php echo $availability; ?></p>
            </div>
            <div class="data">
                <p class="field">Age</p>
                <p id="pAge" class="text-grey"><?php echo $age; ?></p>
            </div>
            <div class="data">
                <p class="field">Location</p>
                <p id="pLocation" class="text-grey"><?php echo $location; ?></p>
            </div>
            <div class="data">
                <p class="field">Years Experience</p>
                <p id="pExperience" class="text-grey"><?php echo $experience; ?></p>
            </div>
            <div class="data">
                <p class="field">Email</p>
                <p id="pEmail" class="text-grey"><?php echo $email; ?></p>
            </div>
        </div>
    </section>

    <!-- Form Input  -->
    <section id="input-form">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form">
                <label>Id User</label>
                <input id="inpIdUser" type="text" name="id_user" value="<?php echo $id; ?>" />
            </div>
            <div class="form">
                <label>Name</label>
                <input id="inpName" type="text" name="nama" />
            </div>
            <div class="form">
                <label>Role</label>
                <input id="inpRole" type="text" name="role" />
            </div>
            <div class="form">
                <label>Availability</label>
                <input id="inpAvailability" type="text" name="availability" />
            </div>
            <div class="form">
                <label>Age</label>
                <input id="inpAge" type="number" name="age" />
            </div>
            <div class="form">
                <label>Location</label>
                <input id="inpLocation" type="text" name="location" />
            </div>
            <div class="form">
                <label>Years Experience</label>
                <input id="inpYears" type="number" name="years" />
            </div>
            <div class="form">
                <label>Email</label>
                <input id="inpEmail" type="email" name="email" />
            </div>
            <div class="form">
                <input type="submit" name="submit" value="simpan" class="bg-blue" />
            </div>
        </form>
    </section>

    <script>
        var formMenu = document.getElementById("input-form");
        formMenu.style.display = "none";

        function editForm() {
            if (formMenu.style.display === "none") {
                formMenu.style.display = "block"
            } else {
                formMenu.style.display = "none"
            }

            var name = document.getElementById("pName").innerHTML
            var role = document.getElementById("pRole").innerHTML
            var availability = document.getElementById("pAvailable").innerHTML
            var age = document.getElementById("pAge").innerHTML
            var location = document.getElementById("pLocation").innerHTML
            var experience = document.getElementById("pExperience").innerHTML
            var email = document.getElementById("pEmail").innerHTML


            document.getElementById("inpName").value = name
            document.getElementById("inpRole").value = role
            document.getElementById("inpAvailability").value = availability
            document.getElementById("inpAge").value = age
            document.getElementById("inpLocation").value = location
            document.getElementById("inpYears").value = experience
            document.getElementById("inpEmail").value = email
        }

        // function simpanForm() {
        //     formMenu.style.display = "none";

        //     var name = document.getElementById("inpName").value
        //     var role = document.getElementById("inpRole").value
        //     var availability= document.getElementById("inpAvailability").value
        //     var age = document.getElementById("inpAge").value
        //     var location = document.getElementById("inpLocation").value
        //     var experience = document.getElementById("inpYears").value
        //     var email = document.getElementById("inpEmail").value

        //     document.getElementById("pName").innerHTML = name
        //     document.getElementById("pRole").innerHTML = role
        //     document.getElementById("pAvailable").innerHTML = availability
        //     document.getElementById("pAge").innerHTML = age
        //     document.getElementById("pLocation").innerHTML = location
        //     document.getElementById("pExperience").innerHTML = experience
        //     document.getElementById("pEmail").innerHTML = email
        // }

        function showMenu() {
            var menu = document.getElementById("menu");
            var box = document.getElementById("box-profile");

            if (menu.style.display === "block") {
                menu.style.display = "none";
                box.style.paddingTop = "0px"
            } else {
                menu.style.display = "block";
                box.style.paddingTop = "125px";
            }
        }
    </script>
</body>

</html>
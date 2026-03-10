<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Careers</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/intro.css">
    <link rel="stylesheet" href="assets/css/jobs.css">
    <link rel="stylesheet" href="assets/css/why.css">
    <link rel="stylesheet" href="assets/css/awards.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    <link rel="stylesheet" href="assets/css/facilities.css">
    <link rel="stylesheet" href="assets/css/cta.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

</head>

<body>
    <?php include "db_connect/db_connect.php"; ?>

    <?php include "includes/header.php"; ?>

    <?php include "includes/hero.php"; ?>

    <?php include "includes/intro.php"; ?>

    <?php include "includes/jobs.php"; ?>

    <?php include "includes/why.php"; ?>

    <?php include "includes/awards.php"; ?>

    <?php include "includes/contact.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $sql = "INSERT INTO contact_messages(name,surname,phone,email)
        VALUES('$name','$surname','$phone','$email')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Message Sent Successfully');</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    ?>

    <?php include "includes/faq.php"; ?>

    <?php include "includes/facilities.php"; ?>

    <?php include "includes/cta.php"; ?>

    <?php include "includes/footer.php"; ?>

    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/accordionscript.js"></script> -->


    <script>
        const tabs = document.querySelectorAll(".tab");
        const contents = document.querySelectorAll(".tab-content");
        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                tabs.forEach(btn => btn.classList.remove("active"));
                contents.forEach(content => content.classList.remove("active"));
                tab.classList.add("active");
                const target = document.getElementById(tab.dataset.tab);
                target.classList.add("active");
            });
        });
    </script>

    <script>
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach(item => {

            const question = item.querySelector(".faq-question");

            question.addEventListener("click", () => {

                faqItems.forEach(el => {
                    if (el !== item) {
                        el.classList.remove("active");
                    }
                });

                item.classList.toggle("active");

            });

        });
    </script>


</body>

</html>
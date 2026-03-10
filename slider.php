<?php

$sliders = [
    [
        "image" => "assets/images/hero1.jpg",
        "title" => "Careers",
        "breadcrumb" => "HOME • CAREERS"
    ],
    [
        "image" => "assets/images/hero2.jpg",
        "title" => "Join Our Team",
        "breadcrumb" => "HOME • JOBS"
    ],
    [
        "image" => "assets/images/hero3.jpg",
        "title" => "Build Your Future",
        "breadcrumb" => "HOME • FUTURE"
    ]
];

?>

<div class="hero-slider">

<!-- <?php foreach($sliders as $slide): ?> -->

    <div class="slide" style="background-image:url('<?php echo $slide['image']; ?>')">

        <div class="overlay"></div>

        <div class="container slide-content">
            <h1><?php echo $slide['title']; ?></h1>

            <div class="breadcrumb">
                <?php echo $slide['breadcrumb']; ?>
            </div>
        </div>

    </div>

<?php endforeach; ?>

</div>
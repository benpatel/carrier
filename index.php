<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Images Demo</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <img src="./images/table.png" class="hero-image" alt="Dining table">
    </header>

    <main>

        <section class="content">
            <img src="./images/table.png" class="image-left" alt="Dining table">

            <div>
                <h2>Modern Dining Table</h2>
                <p>
                    This dining table combines a clean, modern design with durable
                    materials. The responsive image scales automatically to fit
                    different screen sizes while maintaining its aspect ratio.
                </p>
            </div>
        </section>

        <section class="content reverse">
            <div>
                <h2>Perfect for Any Home</h2>
                <p>
                    Images can be aligned to either side of the content using Flexbox.
                    On smaller devices, the layout automatically stacks for a better
                    viewing experience.
                </p>
            </div>

            <img src="./images/table.png" class="image-right" alt="Dining table">
        </section>

        <section class="gallery">
            <img src="./images/table.png" alt="">
            <img src="./images/table.png" alt="">
            <img src="./images/table.png" alt="">
        </section>

    </main>

</body>
</html>
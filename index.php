<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pre Summative 3 no. 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://i.postimg.cc/Y9PN7fws/GIANATICS-FINAL.png" class="header-img" alt="Logo">
            </a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="centered-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="greetings">
                                <h1>Hello!</h1>
                            </div>
                            <div>
                                <h2>You can add up to 10 different data of 10 different people, and I would display them!</h2>
                                <form action="device.php" method="post">
                                    <label for="name">Name:</label><br>
                                    <input type="text" id="name" name="name" required><br>

                                    <label for="brand">Image:</label><br>
                                    <input type="text" id="brand" name="image" required><br>

                                    <label for="price">Age:</label><br>
                                    <input type="number" id="price" name="age" min="0" required><br>

                                    <label for="quantity">Birthday:</label><br>
                                    <input type="number" id="quantity" name="birthday" min="0" required><br>

                                    <label for="quantity">Contact Number:</label><br>
                                    <input type="number" id="quantity" name="contact number" min="0" required><br>

                                    <input type="submit" value="Add Data" class="green-button">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="image-container">
                                <img src="https://c1.wallpaperflare.com/preview/597/640/878/technology-business-man-marketing.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p></p>
    <div class="container d-flex justify-content-center align-items-center vh-50">
            <h1>You can find your data here!</h1>
    </div>

    
    <p></p>

    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="collab">
                        <h1>APPLICATIONS DEVELOPMENT AND EMERGING TECHNOLOGIES</h1>
                        <h2>Pre Summative 3 - 1</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collab">
                        <img src="https://www.bangkokabayan.com/images/npc_seal.png" class="collab-img img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footerBottom text-center text-md-end">
                        <h2>DISCLAIMER</h2>
                        <p>This website is for educational purposes only and no copyright infringement is intended.</p>
                        <p>Copyright &copy;2024; All images used in this website are from the Internet.</p>
                        <p>Designed by <a href="https://github.com/giancarlo0326">GIAN CARLO S. VICTORINO</a>, BSITWMA - FEU TECH</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

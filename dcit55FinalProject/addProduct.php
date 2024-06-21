<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="addProduct.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
</head>
<body>

<div class="navbar">
        <img src="images/logo.png" alt="image of our logo" id="logo">
        <a href="#informationSection">Information</a>
        <a href="#ingridentsSection">Ingridients</a>
        <a href="#finalizeSection">Finalize</a>
    </div>


        <form action="productAdder.php" method="POST" enctype="multipart/form-data" class="inputform">
            <section id="informationSection">
            <div class="inputContainer">
            <br><br><br> <h2>PRODUCT INFORMATION</h2><br><br>
            <div class="input">
                <div class="input-photo"><img id="photo" src="images/placeholder.jpg" alt="Image Preview"></div>
                <label for="prodPic" class="custom-file-label">Choose a file...</label><br>
                <input type="file" id="prodPic" name="prodPic" accept="image/*" class="custom-file-input"><br><br>
                <span id="fileNameDisplay" class="file-name"></span><br>
                <label for="prodName">Name: </label><br>
                <input type="text" id="prodName" name="prodName"><br><br>
                <label for="prodPrice">Price: </label><br>
                <input type="number" id="prodPrice" name="prodPrice">
                </div>
            </div>
            </section>
            
            <section id="ingridentsSection">
            <div class="ingridientsContainer">
                <h2>INGRIDIENTS</h2><br><br>
                <div class="ingridients"> 
                    <label><input type="checkbox" name="espresso" value="espresso">espresso</label><br>
                    <label><input type="checkbox" name="wholeMilk" value="wholeMilk">whole milk</label><br>
                    <label><input type="checkbox" name="skimMilk" value="skimMilk">skim milk</label><br>
                    <label><input type="checkbox" name="espresso" value="espresso">almond milk</label><br>
                    <label><input type="checkbox" name="espresso" value="espresso">sugar</label><br>
                    <label><input type="checkbox" name="espresso" value="espresso">vanilla syrup</label><br>
                    <label><input type="checkbox" name="espresso" value="espresso">caramel syrup</label><br>
                    <label><input type="checkbox" name="espresso" value="espresso">cinammon</label><br>
                    <label><input type="checkbox" name="espresso" value="espresso">cocoa powder</label><br>
                    <label><input type="checkbox" name="espresso" value="espresso">ice</label><br>
                </div>
            </div>
            </section>

            <section id="finalizeSection">
            <div class="finalButtonsContainer">
                <h2>FINALIZE</h2><br><br>
                <div class="finalButtons">
                    <input type="reset" class="button">
                    <input type="submit" class="button">
                    
                </div>
            </div>
            </section>
        </form>
    
        <script>
            document.getElementById('prodPic').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const preview = document.getElementById('photo');
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });
        </script>

</body>
</html>
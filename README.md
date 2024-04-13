
<!DOCTYPE html>
<html>

<head>
    <title>Save the Planet App</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Save the Planet App</h1>

    <p>Welcome to the Save the Planet app! This app will help you learn how to protect the environment.</p>

    <button onclick="showInfo()">Learn More</button>

    <div id="info" style="display:none">

        <h2>Why Recycle?</h2>

        <p>Recycling reduces waste and protects natural resources. It's one easy way you can make a difference.</p>

        <h2>How to Recycle</h2>

        <ol>
            <li>Rinse and separate recyclable materials</li>
            <li>Place in curbside recycling bin</li>
            <li>Make sure bin gets picked up on collection day</li>
        </ol>

    </div>

    <script>
        function showInfo() {
            document.getElementById("info").style.display = "block";
        }
    </script>

</body>

</html>


</html>

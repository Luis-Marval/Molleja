<!DOCTYPE html>
<html>
<head>
    <title>Conjugate Gradient Method</title>
</head>
<body>
    <button id="run">Run Conjugate Gradient Method</button>
    <script>
    document.getElementById("run").addEventListener("click", function(){
        fetch('conjugate_gradient.php')
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.error('Error:', error));
    });
    </script>
</body>
</html>

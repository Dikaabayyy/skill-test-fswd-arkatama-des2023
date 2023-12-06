<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript">
           function convertCase(text){
                var strUCase= text.toUpperCase();
                document.getElementById("dispText").innerHTML = strUCase;
            }
    </script>
</head>
<body>
    <div class="container mt-3">
        <form action="/submit" method="POST" enctype="multipart/form-data" name="myForm" onsubmit="return convertCase(inputText.value)">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Input Nama, Usia dan Kota</label>
                    <input type="text" name="datainput" class="form-control" style="text-transform: uppercase" id="inputText" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Input Data</button>
            </div>
        </form>
           </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

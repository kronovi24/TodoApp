<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">


    <link type="image/png" sizes="16x16" rel="icon" href="https://img.icons8.com/fluency/96/000000/note.png">
</head>

<body>
    <div class="container-fluid p-0 m-0">
        <div class="bkgContainer">
            <div class="bkg"></div>
            <div class="bkg2"></div>
        </div>


        <div class="row justify-content-center">
            <div class="mainCon col-lg-5 col-8">
                <div class="main">
                    <label for="title" class="labels">Title</label>
                    <input type="text" id="title" required>

                    <label for="about" class="labels">About</label>
                    <textarea name="text" id="about" rows="14" cols="10" wrap="soft"> </textarea>
                    <br>
                    <button onclick="createData();">Create</button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center p-0">
            <div class="col-lg-5 p-0">
                <h2 style="color: antiquewhite ;">To Do List</h2>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9 col-10">
                <div class="lists">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">About</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="items">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>
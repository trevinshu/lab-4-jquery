<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Five: Chosen Multi Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="chosen.min.css">
    <script src="chosen.jquery.min.js"></script>
</head>

<body class="container mt-5">
    <h1 class="text-center">Five: Chosen Multi-Select Script</h1>
    <form action="" method="post">
        <select multiple name="skills[]" id="skills" class="form-select">
            <option>PHP</option>
            <option>jQuery</option>
            <option>HTML</option>
            <option>CSS</option>
            <option>Angular</option>
            <option>Python</option>
            <option>Bootstrap</option>
            <option>Vue</option>
            <option>C#</option>
            <option>React</option>
        </select>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#skills').chosen({
                width: '200px'
            });
        });
    </script>
    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['skills'])) {
            echo "<br>";
            echo '<h2 class="alert alert-success text-center">Selected Skills:</h2>';
            echo "<br>";
            foreach ($_POST['skills'] as $selected) {
                echo '  ' . "<b>$selected</b>";
            }
        } else {
            echo "<br>";
            echo '<h2 class="alert alert-danger text-center">Please select a skill.</h2>';
        }
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Three: FLOT Chart</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
    <script language="javascript" type="text/javascript" src="flot.js"></script>
    <script type="text/javascript">
        $(function() {

            var datasets = {
                <?php include("data.php"); ?>
            };

            var i = 0;
            $.each(datasets, function(key, val) {
                val.color = i;
                ++i;
            });

            // insert checkboxes 
            var choiceContainer = $("#choices");
            $.each(datasets, function(key, val) {
                choiceContainer.append("<br/><input type='checkbox' name='" + key +
                    "' checked='checked' id='id" + key + "'></input>" +
                    "<label for='id" + key + "'>" +
                    val.label + "</label>");
            });

            choiceContainer.find("input").click(plotAccordingToChoices);

            function plotAccordingToChoices() {

                var data = [];

                choiceContainer.find("input:checked").each(function() {
                    var key = $(this).attr("name");
                    if (key && datasets[key]) {
                        data.push(datasets[key]);
                    }
                });

                if (data.length > 0) {
                    $.plot("#placeholder", data, {
                        yaxis: {
                            min: 0
                        },
                        xaxis: {
                            tickDecimals: 0
                        }
                    });
                }
            }

            plotAccordingToChoices();
            $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
        });
    </script>
</head>

<body class="container">

    <div id="header">
        <h1 class="text-center mt-3">Three: FLOT Chart</h1>
    </div>

    <div id="content">

        <div class="demo-container">
            <div id="placeholder" class="demo-placeholder" style="float:left; width:675px;"></div>
            <p id="choices" style="float:right; width:135px;"></p>
        </div>

        <p>My demo shows how some of the major smartphone manufacturers have increased (in some cases decreased) the price of their flagship smartphones in two years increments.</p>
    </div>

    <div id="footer">
        Copyright &copy; 2007 - 2013 IOLA and Ole Laursen
    </div>

</body>

</html>
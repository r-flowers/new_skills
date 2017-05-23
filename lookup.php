<?php session_start(); ?>

<!doctype html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>lookup</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-store" />
</head>
<body>
    <header>
        <?php 
        require_once "nav.php";
        require_once "jumbotron.php";
        ?>
    </header>

    <br><br>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
                <div class="form-group">
                    <label for="searchbox">Search for a study partner by skill:</label>
                    <input class="form-control" name="search" id="searchbox" rows="1">
                </div>
            <a href="#" class="btn" id="submit">find</a>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div id="profile_recommend">
        <h1>profiles you may be interested in:</h1>
    </div>

    <script>
        var check = false;
        
        $("#submit").click(function(){
//            $('.nomatch').remove();
            var search = $("#searchbox").val();
            var search = search.toUpperCase();
            check = false;
            $.ajax({
                url: 'users.json',
                type: 'get',
                dataType: 'JSON',
                cache: false,
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    //$('.nomatch').remove();
                    $('.person').remove();
                    $.each(data, function(index, value) {
                        console.log(Object.keys(value));
                        console.log(index);
                        console.log(value);
                        console.log(value.id);
                        console.log(value.name);
                        console.log(value.skill);

                        var id = value.id;
                        var name = value.name;
                        var skill = value.skill;
                        if (search == value.skill) {
                            check = true;
                            $('#profile_recommend').append('<div class="person" id="p' + id + '"></div>');
                            $('#p' + id).append('<h3>' + id + '</h3>');
                            $('#p' + id).append('<div class="profileImage"><img src="img/' + id + '.jpg"></div>');
                            $('#p' + id).append('<h4>name: ' + name + '</h4><p>skill: ' + skill + '<br></p>');
                            //$('.nomatch').remove();
                        }
                    });
                    if (check == false) {
                        //$('.nomatch').remove();
                        $('#profile_recommend').append('<p class="nomatch">Sorry, no one else is studying that skill right now.</p>');
                    }
                }
            });
        });


    </script>

    <footer>
        <?php
        require_once "footer.php";
        ?>
    </footer>
</body>

</html>

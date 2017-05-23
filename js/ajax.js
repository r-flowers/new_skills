$('document').ready(function () {
    function display_users() {
        $.ajax({
            url: 'users.json',
            type: 'get',
            dataType: 'JSON',
            cache: false,
            error: function (data) {
                console.log(data);
            },
            success: function (data) {
                $.each(data, function (index, value) {
                    console.log(Object.keys(value));
                    console.log(index);
                    console.log(value);
                    console.log(value.id);
                    console.log(value.name);
                    console.log(value.skill);
                    
                    var id = value.id;
                    var name = value.name;
                    var skill = value.skill;
                    
                    $('#profile').append('<div class="person" id="p' + id + '"></div>');
                    $('#p' + id).append('<h3>' + id + '</h3>');
                    $('#p' + id).append('<div class="profileImage"><img src="img/' + id + '.jpg"></div>');
                    $('#p' + id).append('<h4>name: ' + name + '</h4><p>skill: ' + skill + '<br></p>');
                });
            }
        });
    }
    
    display_users();
    
    $("form").submit(function (e) {
        $('.person').remove();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: "ajaxprocess.php",
            type: "POST",
            data: formData,
            success: function(){
                console.log('got here');
                display_users();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        e.preventDefault();
    });
});
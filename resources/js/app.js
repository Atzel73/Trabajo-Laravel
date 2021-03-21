require('./bootstrap');
$('#change-color').colorpicker().on('changeColor', function(e) {
    console.log( e.color.toString('rgba'));
    var background_color = e.color.toString('rgba');
    $('body')[0].style.backgroundColor = background_color;
    $.ajax({
    method: "POST",
    url: "save_change.php",
    data: { change_color:1, background: background_color}
    })
    .done(function(response) {
    // display change color message
    });
    });
    $( "#reset-color" ).click(function() {
        $('body')[0].style.backgroundColor = "";
        $.ajax({
        method: "POST",
        url: "save_change.php",
        data: {change_color:1, background: "#fff"}
        })
        .done(function(response) {
        });
        });
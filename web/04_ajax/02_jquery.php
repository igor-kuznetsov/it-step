<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JQuery AJAX Test</title>
</head>
<body>
<a href="includes/post.php" id="link">Send Request</a><br>
<div id="container"></div>

<script src="includes/jquery.min.js"></script>
<script type="text/javascript">
    (function($) {
        $.ajax({
            url: 'data.json',
            type: 'get',
            dataType: 'json', //optional
            success: function (data, status, xhr) {
                //console.log(xhr.responseText);
                console.log(data);
            },
            error: function (xhr, status) {
                //console.log(xhr.status + ': ' + xhr.statusText);
                console.log('Error: ' + status);
            }
        });

        $('#link').on('click', function (event) {
            event.preventDefault();
            var $this = $(this);
            $.ajax({
                url: $this.attr('href'),
                type: 'post',
                data: {
                    text: 'JQuery',
                    h: 15
                },
                dataType: 'html',
                success: function (data) {
                    $('#container').html(data);
                    console.log('OK');
                },
                error: function (xhr, status) {
                    console.log('Error: ' + status);
                }
            });
        });
    })(jQuery);
</script>
</body>
</html>
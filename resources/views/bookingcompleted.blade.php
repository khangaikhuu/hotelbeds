<!DOCTYPE html>

<html>
<head>
    <title>A React Date Picker Demo</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            React.render(React.createElement(window.AReactDatepicker, {selected: new Date()}), document.querySelector("#single-datepicker-container"));
        });
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


    <style type="text/css">
        body { font-size:16px; font-family:Arial; }
        input { margin-top:10px; padding:5px 8px; font-size:1em; }
    </style>
</head>
<body>
<h1>a-react-datepicker demo</h1>

<div id="single-datepicker-container"></div>
</body>
</html>
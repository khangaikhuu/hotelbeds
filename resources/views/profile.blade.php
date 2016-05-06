<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Hello React</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.0-rc.2/react-with-addons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.0-rc.2/react-dom.js"></script>
</head>
<body>
<script type="text/jsx">
    /** @jsx React.DOM */
    React.render(
        <h1>Hello, world!</h1>,
        document.getElementById('myDiv')
    );
</script>
<div id="myDiv">

</div>
</body>
</html>
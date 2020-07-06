<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <%
		dim status0, status1
        status0 = Request.Form("status0")
        status1 = Request.Form("status1")
        Response.Write(status0)
        Response.Write(status1)
	%>
</body>
</html>
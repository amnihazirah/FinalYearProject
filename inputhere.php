<html>

<head>
<title>Insert Data</title>
</head>

<body>
<form id="MyForm" method="post">
Name: <input type="text" name="name" /> <br/>
Age: <input type="text" name="age"/> <br />
DOB: <input type="date" name="date" /> <br />
Time: <input type="time" name="time" /> <br />
<button type="button" id="sub">Save</button>
</form>


<h2 id="result"></h2>

<script type="text/javascript" src="jquery-3.3.1.js" ></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#sub').click(function (e) {
		e.preventDefault();
        $.ajax({
            method: "post",
            url: "insertdata.php",
            data: $('#MyForm').serialize(),
            dataType: "text",
            success: function (response) {
                $('#result').text(response);
			}
        })
	
    })
	clearInput();
});

function clearInput() {
	$("#MyForm :input").each( function() {
		$(this).val('');
	});
}
</script>
</body>
</html>
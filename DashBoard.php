<html>
<head>
    <title>DashBoard</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js">
            </script>
    <style>
        body {
            font: 13px verdana;
            font-weight: normal;
        }
    </style>
    <h1 align="center"> RDS DASHBOARD </h1>
</head>
<body bgcolor="cyan">
  Select Survey:
  <select>
  <option value="Select">Select</option>}
  <option value="survey1">Survey 1</option>
  <option value="survey2">Survey 2</option>
</select> 
<br>
<br>
<br>
    CLICK "ADD" to <i>add</i> seed 
    <input id="addSeed" type="button" value="Add: " />
<br />
<br />
<div id="TextBoxContainer">
    <!--Textboxes will be added here -->
</div>
<br />
<input id="sndEmail" type="button" value="Send Email" />
<input id="btnGet" type="button" value="Get Values" />
<br/>
</br>
<br/>
</br>
<font color="RED"> /*Please enter the seeds<br> id and hit "authenticate",<br> who has finished survey in <br>order to enable the seed recieve <br>three separate emails to send <br>it to recruited peers*/<br> </font>
<input id="authSeed" type="text" value="" />
<br><br>
<input id="authSeed" type="button" value="Authenticate" />
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script type="text/javascript">
$(function () {
    $("#addSeed").bind("click", function () {
        var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("#btnGet").bind("click", function () {
        var values = "";
        $("input[name=DynamicTextBox]").each(function () {
            values += $(this).val() + "\n";
        });
        alert(values);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<input name = "DynamicTextBox" type="text" value = "' + value + '" />&nbsp;' +
            '<input type="button" value="Remove" class="remove" />'
}
</script>

</html>
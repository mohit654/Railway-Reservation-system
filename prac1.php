<html>
<head>
<script type="text/javascript">
  $("#dropdown").on('change', function () {
    $("table").each(function() { // hide all tables 
        $(this).hide();
    });
    var tableId = $(":selected", this).val(); // get linked table id
    $("table#"+tableId+"").toggle(); // toggle linked table
});
     </script>
    <style>
        table
{
display:none;
}
        </style>
</head>

<body>
    <table id='table1'>
    <tr>
        <td>data1</td>
    </tr>
</table>
<table id='table2'>
    <tr>
        <td>data2</td>
    </tr>
</table>
<table id='table3'>
    <tr>
        <td>data3</td>
    </tr>
</table>
<select id='dropdown'>
    <option value='table1'>Show table 1</option>
    <option value='table2'>Show table 2</option>
    <option value='table3'>Show table 3</option>
</select>
</body>
</html>
          

<html>
<head></head>
<body>
<table id="table">
    <tr>
        <td>1 Ferrari F138</td>
        <td>1 000€</td>
        <td>1 200€</td>
        <td>Model monopostu stajne Scuderia Ferrari pre sezónu 2013</td>
        <td>1</td>
        <td>F138</td>
        <td>Klik pre detaily</td>
    </tr>
    <tr>
        <td>2 Ferrari F138</td>
        <td>1 000€</td>
        <td>1 200€</td>
        <td>Model monopostu stajne Scuderia Ferrari pre sezónu 2013</td>
        <td>1</td>
        <td>F138</td>
        <td>Klik pre detaily</td>
    </tr>
    <tr>
        <td>3 Ferrari F138</td>
        <td>1 000€</td>
        <td>1 200€</td>
        <td>Model monopostu stajne Scuderia Ferrari pre sezónu 2013</td>
        <td>1</td>
        <td>F138</td>
        <td>Klik pre detaily</td>
    </tr>
</table>
<input type="button" name="OK" class="ok" value="OK"/>
</body>
<style>
td {border: 1px #DDD solid; padding: 5px; cursor: pointer;}

.selected {
    background-color: brown;
    color: #FFF;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$("#table tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var value=$(this).find('td:first').html();
   alert(value);    
});

$('.ok').on('click', function(e){
    alert($("#table tr.selected td:first").html());
});
</script>
</html>
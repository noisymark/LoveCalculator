<?php
require_once 'components/calculate.php';
require_once 'components/count.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $prvoime=strtoupper($_POST['prvoime']);
    $drugoime=strtoupper($_POST['drugoime']);
    $firstname=Calculate($prvoime);
    $secondname=Calculate($drugoime);
    echo '-' . $firstname . '-';
    echo '<br>';
    echo '-' . $secondname . '-';
    $final = Counterr($firstname,$secondname);
    echo '<pre>';
    print_r($final);
    echo '</pre>';
    

} else{
    $drugoime='';
    $prvoime='';
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/header.php'?>
<body>
<div id="uvodnitext" class="row text-white text-center">
    <h4>Welcome to the Love Calculator</h4>
</div>   

<div class="container">
    <div class="row text-center">
        <div class="col-sm-4 col-md-4 col-xl-4"></div>
        <div class="col-sm-4 col-md-4 col-xl-4">
            <div id="form" class="container">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <label for="prvoime">Enter first name: </label>
                <input type="text" name="prvoime" id="prvoime">
                <br><br>
                <label for="drugoime">Enter second name: </label>
                <input type="text" name="drugoime" id="drugoime">
                <br><br><br>
                <input id="submit" type="submit" value="Calculate">
            </form>
            <?php if($unos!==0) : ?>
                <br>
                <h4 id="result">MATCH: 49%</h4>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-xl-4"></div>
    </div>
</div>


<?php include_once 'components/footer.php'?>
</body>
<?php include_once 'components/scripts.php'?>
</html>
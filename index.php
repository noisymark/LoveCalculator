<?php
require_once 'components/count.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $firstname = $_POST['prvoime'];
    $secondname = $_POST['drugoime'];
    // Pretvaranje slova u brojeve
    $final = Counterr($firstname,$secondname);
    // Zbrajanje prvog i zadnjeg
    $rezultat = Zbroji($final);
    $rezultat = $rezultat . ' %';
} else{
    $firstname='';
    $secondname='';
    $prvoime='';
    $drugoime='';
    $rezultat='';
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
                <br>
                <input type="text" name="prvoime" id="prvoime" value="<?=$firstname?>">
                <br><br>
                <label for="drugoime">Enter second name: </label>
                <br>
                <input type="text" name="drugoime" id="drugoime" value="<?=$secondname?>">
                <br><br><br>
                <input id="submit" type="submit" value="Calculate">
            </form>
                <br>
                <h4 tabindex="0" id="result"><?php if(isset($rezultat)){echo $rezultat;} ?></h4>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-xl-4"></div>
    </div>
</div>


<?php include_once 'components/footer.php'?>
</body>
<?php include_once 'components/scripts.php'?>
</html>
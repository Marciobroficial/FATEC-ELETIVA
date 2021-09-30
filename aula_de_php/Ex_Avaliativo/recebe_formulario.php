<?php
    include("menu.php");
    echo $_POST["ano"];
?>
<p>
<?php
        if($_POST["ano"] >= 18)
            echo("A idade informada é de maior idade.");
        else
            echo("A idade informada é de menor idade.");

?>
</p>
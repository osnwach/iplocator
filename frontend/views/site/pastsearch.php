<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Past Searches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>View All Past Searches below :</p>

    <?php
    echo  "<br> <br>";
    echo "All our past Searches ! ";
    echo "<br>";
   // $date = new DateTime("now", new DateTimeZone($model1->timezone) );
	//echo $date->format('Y-m-d H:i:s');
    $date = "";
    $allneighbours = '';

    $sno = 0;
    ?>

     <table class="table table-hover table-bordered">
     <thead>
     <tr>
     <th>Sno </th>  <th>Ip Address </th> <th>Country </th> <th>Date Searched </th>
     </tr>
     </thead>

     <tbody>
     <?php
     foreach($model as $searchedip)
     {
     	$sno = $sno + 1;
        echo "<tr>";
        echo "<td>".$sno."</td><td>";
     ?>

        <a href = '<?= Url::toRoute(['site/ipdetails','ipaddress'=>$searchedip->ipaddress])?>' >

     <?php
        echo $searchedip['ipaddress']."</a></td><td>".$searchedip->country."</td><td><span class = 'btn btn-primary btn-xs'>".$searchedip->recdate."</span></td>";
     
        

        echo "</tr>";
     }

     ?>

     </tbody>
     


     </table>

     <br>

     <table class="table table-hover table-bordered ">
     <tr>
     <td style="text-align: center; vertical-align: middle;"><a href = "<?= Url::toRoute(['site/index'])?>">Back to Search Page </a> </td>  
     </tr>

     </table>

   
</div>

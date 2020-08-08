<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'ipdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>View the details of your searched IP below :</p>

    <?php
    echo  "<br> <br>";
    echo "THE ip COUNTRY is : ".$model1['country'];
    echo "<br>";
    $date = new DateTime("now", new DateTimeZone($model1->timezone) );
	//echo $date->format('Y-m-d H:i:s');

     $allneighbours = '';
	 foreach ($model2 as $myneighbour)
	 {
	 	$allneighbours = $allneighbours.$myneighbour->neighbour.', ';
	 }

	 	$allneighbours = rtrim($allneighbours, ", ");

    ?>

     <table class="table table-bordered">

     <tr>
     <td><span style = 'font-weight:bold'>Ip address :</span> </td>  <td><?php echo $model1->ipaddress ?></td>
     </tr>
     <tr>
     <td><span style = 'font-weight:bold'>Continent : </span></td>  <td><?php echo $model1->continent ?> </td>
     </tr>
     <tr>
     <td><span style = 'font-weight:bold'>Country : </span></td>  <td><?php echo $model1->country ?> </td>
     </tr>
     <tr>
     <td><span style = 'font-weight:bold'>Flag : </span></td>  <td><img src = "<?php echo $model1->flagimage ?>" width = '50px' height = '50px'> </td>
     </tr>

     <tr>
     <td><span style = 'font-weight:bold'>Neighboring Countries : </span></td>  <td> <?php echo $allneighbours ?></td>
     </tr>

     <tr>
     <td><span style = 'font-weight:bold'>City : </span></td>  <td><?php echo $model1->city ?> </td>
     </tr>
     <tr>
     <td><span style = 'font-weight:bold'>Relative to Equator : </span></td>  <td><?php echo $model1->equator_relative ?> </td>
     </tr>
     <tr>
     <td><span style = 'font-weight:bold'>Date from Timezone : </span></td>  <td><?php echo $date->format('Y-m-d H:i:s'); ?></td>
     </tr>


     </table>

     <br>

     <table class="table table-bordered">
     <tr>
     <td style="text-align: center; vertical-align: middle;"><a href = "<?= Url::toRoute(['site/index'])?>">Back to Search Page </a> </td>  <td style="text-align: center; vertical-align: middle;"><a href = "<?= Url::toRoute(['site/pastsearch'])?>">View Past Searches ! </a> </td>
     </tr>

     </table>

   
</div>

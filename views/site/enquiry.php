
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Training Enquiry</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Training Enquiry</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

//use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;


$this->title = 'Online Registration';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container"> 

	<div class="row" >
		<div class="col-md-6" style=" margin-top:5px;margin-bottom:5px; " >
<h1>Online Registration</h1>

<?= $this->render('_form', ['model' => $model]); ?>


   </div>
    
     	</div>

     	
</div>
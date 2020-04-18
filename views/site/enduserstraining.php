<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Technical';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-technical">
    <!--<h1><?= Html::encode($this->title) ?></h1> -->

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  
  <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>End-Users Training </h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">End-Users-Training</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                          <div class="subsection-landing">
        
            <!-- page content -->
            
<figure class="mu-latest-course-img">
                        <!--  <a href="#"><img src="assets/img/end-users.png" alt="end-user-image"></a>
                          <!-- <img src="<?php //echo Url::to('@web/assets/img/end-users.png') ?>" alt="img" /> -->
                           
                           <?= Html::img('@web/assets/img/end-users.fw.png', ['alt'=>'end-user-image', 'class'=>'thing']);?>
                         <!-- <figcaption class="mu-latest-course-imgcaption">
                            <a href="#">Drawing</a>
                            <span><i class="fa fa-clock-o"></i>90Days</span>
                          </figcaption> -->
                        </figure>



                          <figcaption class="mu-blog-caption">
                            <h3>Apply for Our End-User and Desktop training courses now!</h3>
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                          <a href="#">By Admin</a>
                          <a href="#">2019</a>
                          <!--<span><i class="fa fa-comments-o"></i>87</span>-->
                        </div>
                        <div class="mu-blog-description">
                          <p>Whether you are expanding your current skill set, embarking on a new career, or working toward a big promotion, TryIT Training! has the solution for training courses. Our cost-effective learning packages and flexible training course schedules make it easy and affordable to reach your goal. Choose from beginner training classes to advanced topics in a wide range of End-User applications such as Microsoft, Web-Design & Graphics, and more.</p>
                          <blockquote>
                            <p>This Training Curriculum will help you to know more about hosting business and its activities. Thanks to our experience trainers for in-depth Curriculum!</p>                            
                          </blockquote>
                          
                         <h1>Training Outlines:</h1>

                          <ul>
                            <li>Microsoft Application Suite Training</li>
                             <li>Microsoft Office 365</li>
                            <li>Website Management and maintenance</li>
                            <li>Internet Fundamentals</li>
                            <li>Email Client Fundamentals</li>
                           <!-- <li>OneDrive</li>
                            <li>OneNote</li>
                           
                            <li>Window OS</li> -->
                          </ul>      
                         </div>
                         
                         <table class="table table-dark">
  <thead>
    <tr>
    
      <th scope="col">Course Details</th>
      <th scope="col">Schedule</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Classroom Training*
Duration : 5 Days
Fee : Online : $2,200 E (1-on-1)†, London : £3,000 (1-on-1)†, Dubai : $2,900 E, India : $2,100 E</td>
      <td>February
09-13 (Dubai)
March
08-12 (Dubai)
July
12-16 (Dubai)
</td>
     
    <tr>
      
      <td>Jacob</td>
      <td>Thornton</td>
    
    </tr>
    <tr>
     
      <td>Larry</td>
      <td>the Bird</td>
      
    </tr>
  </tbody>
</table>
                         <a href="/site/enquiry"><input class="btn btn-primary" style=" margin-left:10%;" type="submit" value="Register Now!" /></a>



                        <div class="mu-blog-social">
                          <ul class="mu-news-social-nav">
                            <li>SOCIAL SHARE :</li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                          </ul>
                        </div>
                        <!-- End blog social share -->
                      </article>

                    </div>                                   
                  </div>
                </div>
               
                
                
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Web Design</a></li>
                      <li><a href="">Web Development</a></li>
                      <li><a href="">Technical Training</a></li>
                      <li><a href="">BootCamp</a></li>
                      <li><a href="">Internet Fundamentals</a></li>
                     
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular Training</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <!--<img class="media-object" src="assets/img/courses/1.jpg" alt="img"> -->
                           <?= Html::img('@web/assets/img/courses/1.jpg', ['alt'=>'end-user-image', 'class'=>'thing']);?>

                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Internet Fundamentals</a></h4>                      
                          <span class="popular-course-price">₦20,000.00</span>
                          <h6>Two Weeks</h6>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                           
                             <?= Html::img('@web/assets/img/courses/2.jpg', ['alt'=>'end-user-image', 'class'=>'thing']);?>
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Web Design</a></h4>                      
                          <span class="popular-course-price">₦25,000.00</span>
                          <h6>Two Weeks</h6>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                           
                             <?= Html::img('@web/assets/img/courses/3.jpg', ['alt'=>'end-user-image', 'class'=>'thing']);?>
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Linux OS</a></h4>                      
                          <span class="popular-course-price">₦19,000.00</span>
                          <h6>Two Weeks</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>



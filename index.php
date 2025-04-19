<?php
session_start();

if (isset($_GET['menu'])) {

    $menu = $_GET['menu'];
} else {
    $menu = 'Dashboard';
}

if (empty($_SESSION)) {
    include_once './login.php';
    include_once './include/login.php';
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        include_once 'include/head.php';
        ?>
        <link rel="shortcut icon" href="./dist/img/downlod.jfif">
        <link rel="icon" href="./dist/img/download.jfif" type="image/x-icon">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <?php
            include_once 'include/navbar.php';
            include_once 'include/sidebar.php';
            ?>
<div class="content-wrapper">
              <div class="content-header">
            <div class="container-header">
			<div class="container-fluid">
            <h1 class="m-0">Gold Ornaments</h1>
			      <!--...-->
                </div>
               
                <section class="content">
                   <div class="card">
                      <div class="card-header">Priceless Things-Gold and Love</div>
                       <div class="card-body">
                          <div class="container-fluid p-2">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                      <div class="bg-info">
									    <div class="inner">
										  <h3>Necklace</p>
                                       </div>
                                       <div class="icon">
                                         <!--Replace with your image -->
                                         <img src="./dist/img/necklace.jpg" style="width:250px ;height:250px ;"alt="necklace Image">
                          <h4>How Strange and Changeful Life is</h4>
						  <p>A necklace is an article of jewellery that is worn around the neck. Necklaces may have been one of the earliest types of adornment worn by humans.[1] They often serve ceremonial, religious, magical, or funerary purposes and are also used as symbols of wealth and status, given that they are commonly made of precious metals and stones.

The main component of a necklace is the band, chain, or cord that wraps around the neck. These are most often rendered in precious metals such as gold, silver, and platinum. Necklaces often have additional attachments suspended or inset into the necklace itself. These attachments typically include pendants, lockets, amulets, crosses, and precious and semiprecious materials such as diamond, pearls, rubies, emeralds, garnets, and sapphires. They are made with many different type of materials and are used for many things and sometimes classified as clothing.</p>
                                   </div>
                                   <a href="users.php" class="small-box-footer" style="color:white"> More info
                                  </a>
                               </div>
                             </div> 
                             <!-- Add more cards here -->
                             <div class="col-lg-3 col-6">
                               <div class="bg-success">
                                  <div class="inner">
                                     <h3>Bangles</h3>
                                  </div>
                                  <div class="icon">
								    <!--Replace with your image -->
								    <img src="./dist/img/bangles.jpg" style="width:250px ;height:250px;" alt="bangles Image">
                               <h4> Gold Jewellery alwaysin Fashion</h4>
							   <p>Bangles are traditionally rigid bracelets which are usually made of metal, wood, glass or plastic. These ornaments are worn mostly by women in the Indian subcontinent, Southeastern Asia, the Arabian Peninsula, and Africa. It is common to see a bride wearing glass bangles at weddings in India, Bangladesh, Pakistan, Nepal, Sri Lanka and in other Asian countries. Bangles may also be worn by young girls, and bangles made of gold or silver are preferred for toddlers.[citation needed] Some men and women wear a single bangle on the arm or wrist called kada or kara.

Chooda is a kind of bangle that is worn by Hindu/Sikh Punjabi women on their wedding day. It is a set of white and red bangles with stonework.

According to tradition, a woman is not supposed to buy the bangles she will wear.

Firozabad, Uttar Pradesh is India's largest producer of bangles.According to tradition, a woman is not supposed to buy the bangles she will wear.



</p>
									


                                   </div>
                                   <a href="#" class="small-box-footer" style="color:white">More info</a>
                                 </div>
                                </div>
                                <div class="col-lg-3 col-6">
                        
                                        <div class="bg-warning">
                                            <div class="inner">
                                              <h3>Ear Rings</h3>
                                           </div>
                                           <div class="icon">
                                             <!--Replace with your image -->
											 <img src="./dist/img/ear.jpg" style="width:250px ;height:250px;"alt="Ear Ring Image">
											 <h4>A Timeless Classic</h4>
										<p>An earring is a piece of jewelry attached to the ear via a piercing in the earlobe[1] or another external part of the ear (except in the case of clip earrings, which clip onto the lobe), or, less often, by some other means. Earrings have been worn in diverse civilizations and historic periods, often carrying a cultural significance.

Locations for piercings other than the earlobe include the rook, tragus, and across the helix (see image in the infobox). The simple term "ear piercing" usually refers to an earlobe piercing, whereas piercings in the upper part of the external ear are often referred to as "cartilage piercings". Cartilage piercings are more complex to perform than earlobe piercings and take longer to heal.Locations for piercings other than the earlobe include the rook, tragus, and across the helix (see image in the infobox). The simple term "ear piercing" usuCartilage piercings are more complex to perform than earlobe piercings 

</p>
                                            </div>
                                            <a href="#" class="small-box-footer" style="color:white">More info</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6">
                                 
                                      <div class="bg-danger">
                                        <div class="inner">
										  <h3>Harams</h3>
											</div>
											<div class="icon">
                                              <!--Replace with your image -->
											  <img src="./dist/img/harams.jfif"style="width:250px ;height:250px;" alt="Harams Image">
											<h4>So Glamorous and TimeLess</h4>
											<p>Gold is a chemical element; it has symbol Au (from the Latin word aurum) and atomic number 79. In its pure form, it is a bright, slightly orange-yellow, dense, soft, malleable, and ductile metal. Chemically, gold is a transition metal, a group 11 element, and one of the noble metals. It is one of the least reactive chemical elements, being the second-lowest in the reactivity series. It is solid under standard conditions.

Gold often occurs in free elemental (native state), as nuggets or grains, in rocks, veins, and alluvial deposits. It occurs in a solid solution series with the native element silver (as in electrum), naturally alloyed with other metals like copper and palladium, and mineral inclusions such as within pyrite. Less commonly, it occurs in minerals as gold compounds, often with tellurium (gold tellurides).copper and palladium, and mineral inclusions such as within pyrite. Less commonly, it occurs in minerals as gold compounds.</p>
                                              </div>
                                              <a href="#" class="small-box-footer" style="color:white">More info</a>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
								   </div>
                                 </div>
                              </section>
                            </div>
        

      
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://vsm.edu.in">VSM Students</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> t01337
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
       <?php include_once './include/scripts.php'; ?>
    </body>

    </html>

<?php
}
?>
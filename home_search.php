<?php 
     require_once 'php/home_clicks.php';
     $place = $_GET["place"];
     $package = get_searched_place($place);
     foreach ($package as $i) {
         echo '
              <div class="pack">
                  <div class="img" style="background-image: url('.$i["img"].');"></div>
                      <div class="align-text">
                        <a href="ShowPlace.php?package_no='.$i["package_no"].'">'.$i["location"].'</a>
                      </div>
              </div>
         ';
     }
?>
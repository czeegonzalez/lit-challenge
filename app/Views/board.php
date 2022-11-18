<section class="results">
        <div class="px-3 py-2  mb-3">
            <div class="container">
              <div class="list-group">

                <?php foreach ($vacancies as $vacancy) { ?>
                
                <div class="list-group-item list-group-item-action px-3 py-4" aria-current="true">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <div>
                      <img src="<?php echo base_url('img/'.$vacancy->logo.'' )?>" alt="" class="logoCompany">
                      </div>  
                      <div class="ms-3">
                          <a href="vacancy/<?= $vacancy->ID ?>" class="vTitle"><?= $vacancy->title ?></a><br>
                          <a href="company/<?= $vacancy->company_ID ?>" class="vCompany">Company name</a><br>
                          <span>Posted <?php $origin = new DateTimeImmutable($vacancy->date);
                          $target = new DateTimeImmutable('2022-11-18');
                          $interval = $origin->diff($target);
                          echo $interval->format('%a days ago')?> </span>
                      </div>
                    </div>
                    <div>
                      <ul class="facilities"> 
                        <li><?= $vacancy->type ?></li>
                        <li><?php $i=0;
                        $locations = explode(";", $vacancy->location);
                        if (count ($locations)>1){
                          foreach ($locations as $location) {
                            if($location!=''){
                              print $location.",";
                              $i++;
                              if($i>1)
                              break;
                            }
                            
                          }
                        }
                        ?>
                        </li>
                        <li><?= $vacancy->seniority ?></li>
                      </ul>
                    </div>
                    <div>
                      <div class="d-flex flex-row-reverse badges">
                        <?php
                        $badgesOG = trim($vacancy->perks);
                        $badgesOG = str_replace(' ', '', $badgesOG);
                        $badges = explode(";", $badgesOG);
                        if (count ($badges)>1){
                          foreach ($badges as $badge) {
                            if($badge!='')
                            print "<div><img src='".base_url('img/'.$badge).".png' alt='' width='54' height='58'></div>";
                          }
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>

                <?php } ?>
              </div>
            </div>
        </div>    
    </section>
<?php 
foreach ($vacancyDetail as $vacancy) {
?>

<div class="px-3 py-2 breadcrumb mb-3">
      <div class="container ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../"><< Back to Jobs board</a></li>
            </ol>
        </nav>
      </div>
  </div>
    <article>
        <div class="px-3 py-2  mb-3">
            <div class="container">
                <div class="row">
                    <h2><?= $vacancy->title ?></h2>
                </div>
                <div class="row mb-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="<?php echo base_url('img/'.$vacancy->logo.'' )?>" alt="" width="60" height="60">
                            <div class="ms-3">
                              <a href="company/<?= $vacancy->company_ID ?>" class="vTitle"><?= $vacancy->name ?></a><br>
                              <a href="" class="vCompany"><?= $vacancy->tagline ?></a><br>
                              <span>Posted <?php $origin = new DateTimeImmutable($vacancy->date);
                          $target = new DateTimeImmutable('2022-11-18');
                          $interval = $origin->diff($target);
                          echo $interval->format('%a days ago')?> </span>
                            </div>
                        </div>
                        
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
                <div class="row vDetails">
                    <div class="col-4">
                        <ul class="facilities">
                        <li><?= $vacancy->type ?></li>
                        <li><?= $vacancy->location ?></li>
                        <li><?= $vacancy->seniority ?></li>
                        </ul>
                        <div>
                            <?php if ($vacancy->contingency==='Yes'){?>
                                <div class="warning d-flex">
                                    <i class="bi bi-exclamation-triangle"></i>
                                    <p>This may be a contingent job offer. For more information on Contingency Jobs, please read this article: <span>“Contingency Jobs: Pros and Cons. All you Need to Know if They Suit Your Professional Goals.”</span> </p>
                                </div>
                            <?php } ?>
                            <button>Apply</button>
                        </div>
                    </div>
                    <div class="col">
                        <h3>About the job</h3>
                        <p><?= $vacancy->about ?></p>
                    </div>
                </div>
                <div class="row cDetails">
                    <div class="col">
                        <div>
                            <h4>About The Company</h4>
                            <p><?= $vacancy->description ?></p>
                            <a href="<?= $vacancy->URL ?>" target="_blank"><button>See Company profile</button></a>
                        </div>
                    </div>
                    <div class="col text-end">
                        <img src="<?php echo base_url('img/'.$vacancy->image.'' )?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </article>
<?php
}
?>
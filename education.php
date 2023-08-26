
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>
            <?php  foreach ($dataEducation as $row) {?>
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                        <div class="resume-content mr-auto">
                          <h3 class="mb-0"><?=$row['head']?></h3>
                          <div class="subheading mb-3"><?=$row['name']?></div>
                          <div><?=$row['text']?></div>
                         
                        </div>
                        <div class="resume-date text-md-right">
                          <span class="text-primary"><?=$row['date']?></span>
                        </div>
                      </div>
            <?php } ?>
          

        </div>
      </section>
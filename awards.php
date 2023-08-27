
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Awards &amp; Certifications</h2>
          <ul class="fa-ul mb-0">
            <?php foreach ($dataAwards as $row) {?>
              <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?=$row['text']?></li>
            <li>
          <?php  } ?>
          </ul>
        </div>
      </section>
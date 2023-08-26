<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <?php foreach ($dataAbout as $row) {?>
            <h1 class="mb-0">
            <span class="text-primary"><?=$row['name']?></span>
          </h1>
          <div class="subheading mb-5"><?=$row['street']?>, <?=$row['phone']?> .
            <a href="mailto:name@email.com"><?=$row['email']?></a>
          </div>
          <p class="mb-5"><?=$row['text']?></p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
         <?php }?>
         
        </div>
      </section>
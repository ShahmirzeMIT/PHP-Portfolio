<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
<div class="my-auto">
 <h2 class="mb-5">Interests</h2>    
<?php foreach ($dataInterest as $row) { ?>
 <p><?=$row['firstText']?></p>
 <p class="mb-0"><?=$row['secondText']?></p>

<?php } ?>
</div>
</section>
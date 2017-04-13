<?php function makeManyBoxes($range=1, $break=false, $multi=false) { ?>
  <?php foreach(range(1,$range) as $r) { ?>
  <div class="fb-box">
    <?php $m = $r % 6 ?: 6; ?>
    <?php if ($r % 4 == 1) { ?><big><?php } ?>
    <?php foreach(range(1,$m) as $i) { 
      echo $r; 
      echo $break ? "<br>" : " ";
    } 
    ?>
    <?php if ($r % 4 == 1) { ?></big><?php } ?>
  </div>
  <?php } ?>
<?php } ?>
<?php include("includes/_head.php") ?>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h2>Flex <em>container</em> properties</h2>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h3>flex-direction: <em>what is the major axis?</em></h3>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>flex-direction: row <em>(default)</em></h4>
    <div class="fb-1">
      <?php makeManyBoxes(6, false) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>flex-direction: row-reverse</h4>
    <div class="fb-2">
      <?php include("includes/6boxes.php"); ?>
    </div>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>flex-direction: column</h4>
    <div class="fb-3">
      <?php include("includes/6boxes.php"); ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>flex-direction: column-reverse</h4>
    <div class="fb-4">
      <?php include("includes/6boxes.php"); ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h3>justify-content: <em>how to distribute elements along major axis?</em></h3>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>justify-content: flex-start <em>(Default)</em></h4>
    <div class="fb-5">
      <?php include("includes/6boxes.php"); ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>justify-content: flex-end</h4>
    <div class="fb-6">
      <?php include("includes/6boxes.php"); ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>justify-content: center</h4>
    <div class="fb-7">
      <?php include("includes/6boxes.php"); ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>justify-content: space-between</h4>
    <div class="fb-8">
      <?php include("includes/6boxes.php"); ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>justify-content: space-around</h4>
    <div class="fb-9">
      <?php include("includes/6boxes.php"); ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h3>align-items: <em>how to align elements along minor axis?</em></h3>
  </div>
</section>
<?php function makeBoxes($range=1, $big=false) { ?>
  <div class="fb-box">
    <?php if($big) { ?><big><?php } ?>
    <?php foreach(range(1,$range) as $i) { ?>
    <?php echo $range ?><br>
    <?php } ?>
    <?php if($big) { ?></big><?php } ?>
  </div>
<?php } ?>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-items: flex-start </h4>
    <div class="fb-10">
      <?php makeManyBoxes(6, $break=true) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-items: flex-end</h4>
    <div class="fb-11">
      <?php makeManyBoxes(6, $break=true) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-items: center</h4>
    <div class="fb-12">
      <?php makeManyBoxes(6, $break=true) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-items: stretch <em>(default)</em></h4>
    <div class="fb-13">
      <?php makeManyBoxes(6, $break=true) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-items: baseline</h4>
    <div class="fb-14">
      <?php makeManyBoxes(6, $break=true) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h3>flex-wrap: <em>how to wrap long lines?</em></h3>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>flex-wrap: nowrap <em>(Default)</em></h4>
    <div class="fb-15">
      <?php makeManyBoxes(12) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>flex-wrap: wrap</h4>
    <div class="fb-16">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>flex-wrap: wrap-reverse</h4>
    <div class="fb-17">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h3>align-content: <em>how to distribute wrapped items along minor axis?</em></h3>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-content: flex-start <em>(default)</em></h4>
    <div class="fb-18">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-content: flex-end</h4>
    <div class="fb-19">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-content: center</h4>
    <div class="fb-20">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-content: stretch</h4>
    <div class="fb-21">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-content: space-between</h4>
    <div class="fb-22">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<section class="layout-row">
  <div class="layout-inner-wrapper">
    <h4>align-content: space-around</h4>
    <div class="fb-23">
      <?php makeManyBoxes(24) ?>
    </div>
  </div>
</section>
<?php include("includes/_foot.php") ?>

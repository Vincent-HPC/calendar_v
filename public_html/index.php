<?php include('header.php') ?>
<?php include('data.php') ?>

  <div id="calendar">
    <div id="header">
      <?= date('Y') ?>/<?= date('m') ?>
    </div>
    
    <div id="days" class="clearfix">
      <div class="day">Sun</div>
      <div class="day">Mon</div>
      <div class="day">Tue</div>
      <div class="day">Wed</div>
      <div class="day">Thu</div>
      <div class="day">Fri</div>
      <div class="day">Sat</div>
    </div>
    
    <div id="dates" class="clearfix">
      <?php foreach ($dates as $key => $date) : ?>
        <div class="date-block <?= (is_null($date))? 'empty' : ''?> ">
          <div class="date"><?= $date ?></div>
          <div class="events"></div>
        </div>


      <?php endforeach ?>
    </div>

  <div>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, obcaecati dolores. Nihil voluptatem velit consectetur hic voluptates quis iste magnam sunt aperiam eum rerum est, aut minus! Inventore, accusamus recusandae!
  </div>


  </div>

<?php include('footer.php') ?>

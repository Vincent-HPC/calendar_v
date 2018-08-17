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

  



  </div>

  <div id="info-panel" class="update">
    <div class="close">x</div>

    <form>
      <div class="title">
        <label>event</label><br>
        <input type="text" name="title">
      </div>

      <div class="error-msg open">
        <div class="alert alert-danger">
          error
        </div>
      </div>

      <div class="time-picker">
        <div class="selected-date">
          <span class="month">09</span>/<span class="date">30</span>

        </div>
        <div class="from">
          <label for="from">from</label><br>
          <input type="time" id="from" name="start_time">
        </div>
        <div class="to">
          <label for="to">to</label><br>
          <input type="time" id="to" name="end_time">
        </div>
      </div>

      <div class="description">
        <label>description</label><br>
        <textarea name="description" id="description"></textarea>
      </div>
    </form>

    <div class="button clearfix" >
      <button class="create">create</button>
      <button class="update">update</button>
      <button class="cancel">cancel</button>
      <button class="delete">delete</button>
    </div>
  </div>

<?php include('footer.php') ?>

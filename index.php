<?php
    // Flag checker app.
    require_once('app/flag-checker.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="app/style/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <title>TrinityCore Flags Checker</title>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-flags-app flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
            <h6 class="text-center"><a href="https://Github.com/PatricNox"  style="float:left;" class="badge badge-info">Created by Github.com/PatricNox</a></h6>
            </div>
            <div class="card-body">
              <h2 class="card-title text-center">TrinityCore Flags Checker Tool</h2>
              <form class="form-flags-app">
                <div class="form-label-group">
                  <input type="number" id="inputBitmaskNumber" name="flag_number" class="form-control" required autofocus autocomplete="off">
                  <label for="inputBitmaskNumber">Bitmask Value</label>
                </div>

                <label>Choose Flags type</label>
                <div class="form-label-group">
                  <select name="flag_type" id="chooseFlagsType"  class="form-control">
                      <option value="n" <?=wasOptionSubmitted('n')?>>NPC flags</option>
                      <option value="u" <?=wasOptionSubmitted('u')?>>Unit flags</option>
                      <option value="i" <?=wasOptionSubmitted('i')?>>Mechanic immune mask flags</option>
                      <option value="e" <?=wasOptionSubmitted('e')?>>Flags extra</option>
                      <option value="it" <?=wasOptionSubmitted('it')?>>Inhabit type flags</option>
                      <option value="tf" <?=wasOptionSubmitted('tf')?>>Type flags</option>
                  </select>
                </div>
                
                <hr>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit">Get flags</button>
                <hr class="my-4">
                <button onclick="location.href = 'https://www.paypal.me/patricnoxdev';" class="btn btn-lg btn-primary btn-block text-uppercase"><i class="fas fa-hand-holding-usd"></i> Donate to PatricNox</button>
                <button onclick="location.href = 'http://www.ac-web.org/forums/member.php?332159-PatricNox';"  class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fas fa-blog"></i> AC-Web</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php if ($flag_number): ?>
        <div class="card">
          <div class="card-header">
            Results
          </div>
          <div class="card-body">
              <blockquote class="blockquote mb-0">
                <ul>
                  <?php foreach($flags_list as $list_flags_item): ?>
                      <li><?=$list_flags_item?></li>
                  <?php endforeach; ?>
                </ul>
                <footer class="blockquote-footer">On bitmask value <cite title="User input"><?= $flag_number ?></cite></footer>
              </blockquote>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </body>
</html>

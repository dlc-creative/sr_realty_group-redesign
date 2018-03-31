<div class="interior-banner">
  <h2><?php echo basename($_SERVER['REQUEST_URI'], '.php'); ?></h2>
</div>
<div class="container">
  <div class="breadcrumbs">
    <span>Home > <?php echo ucwords(basename($_SERVER['REQUEST_URI'], '.php')); ?></span>
  </div>
  <?php
    $data = array(
      'residential' => array(
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
      ),
      'commercial' => array(
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
      ),
      'foreclosure' => array(
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
        'assets/img/SR_15.jpg',
      ),
    );
  ?>
  <?php switch(basename($_SERVER['REQUEST_URI'], '.php')) :
      case 'about':
        break;
      case 'contact':
        break;
      case 'residential':
      case 'commercial':
      case 'foreclosure': ?>
      <section class="gallery grid">
        <?php foreach($data[basename($_SERVER['REQUEST_URI'], '.php')] as $key => $val) :
          if ($key % 4 == 0) : ?>
        <div class="grid-4">
          <?php for ($i = 0; $i < 4; $i++) { ?>
          <div class="image-block"><img src="<?php echo $val; ?>" /></div>
        <?php } ?>
        </div>
      <?php endif; endforeach; ?>
      </section>
    </div>
    <?php break; ?>
  <?php endswitch; ?>

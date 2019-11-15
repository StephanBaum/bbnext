  <?php
    if (option('environment', 'development') === 'production') {
      echo Bnomei\Fingerprint::js('/assets/scripts/main.min.js', ['integrity' => true]);
    } else {
      echo js('assets/scripts/main.js');
    }
  ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.0/paper-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>

  </body>
</html>

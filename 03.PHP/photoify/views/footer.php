<?php if (isset($_SESSION['logedin'])): ?>
    <script src="/assets/scripts/main.js"></script>
<?php endif ?>

    <?php

        unset($_SESSION['page']);
        unset($_SESSION['errors']);
        unset($_SESSION['values']);
        unset($_SESSION['banner']);
    ?>

</body>
</html>

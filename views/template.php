
<?php include 'componentes/head.php'; ?>
<div class="d-flex" style="min-height:100vh">
    <?php include 'componentes/sidebar.php'; ?>
    <div class="flex-grow-1 d-flex flex-column">
        <?php include 'componentes/nav.php'; ?>
        <main class="flex-grow-1 p-4 bg-light">
            <?php include $view; ?>
        </main>
    </div>
</div>
<?php include 'componentes/scripts.php'; ?>
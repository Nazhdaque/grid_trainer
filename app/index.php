<?php
    require_once($_SERVER['DOCUMENT_ROOT']).'/app/parts/header.php';
?>

<div class="trainer">

    <div class="grid grid_0">
        <?php for ($btn = 1; $btn <= 1; $btn++): ?>
            <div class="container btn" data-btn="<?= $btn ?>">
                <div class="item"><?= $btn ?></div>
            </div>
        <?php endfor; ?>
    </div>
    
    <?php for ($num = 1; $num <= 1; $num++): ?>
        <div class="flex" id="num_<?= $num ?>">
            <div class="grid container btn">
                <div class="item"><?= $num ?></div>
            </div>
        </div>
        
        <div class="grid grid_<?= $num ?>">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <div class="grid container">
                    <div class="item"><?= $i ?></div>
                </div>
            <?php endfor; ?>
        </div>
    <?php endfor; ?>
    
</div>

<?php
    require_once($_SERVER['DOCUMENT_ROOT']).'/app/parts/footer.php';
?>

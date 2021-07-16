<?php
    require_once($_SERVER['DOCUMENT_ROOT']).'/app/parts/header.php';
?>

<div class="grid grid_0">
    <?php for ($btn = 1; $btn <= 23; $btn++): ?>
        <div class="container btn" data-btn="<?= $btn ?>">
            <div class="item"><?= $btn ?></div>
        </div>
    <?php endfor; ?>
</div>


<!-- ================== // 1 // ================== -->
<div class="flex" id="num_1">
    <div class="container btn">
        <div class="item">1</div>
    </div>
</div>

<div class="grid container">
        
        <div class="grid grid_1"><span>grid-template-columns: 300px 300px 300px ★ grid-template-rows: 200px 150px ★ grid-auto-rows: 100px</span>
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="container"><span>300px × 200px</span></div>
            <?php endfor; ?>

            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="container"><span>300px × 150px</span></div>
            <?php endfor; ?>

            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="container"><span>300px × 100px</span></div>
            <?php endfor; ?>
        </div>

</div>


<!-- ================== // 2 // ================== -->
<div class="flex" id="num_2">
    <div class="container btn">
        <div class="item">2</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_2"><span>grid-template-columns: 1fr 1fr 1fr</span>
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="container"><span>1fr</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 3 // ================== -->
<div class="flex" id="num_3">
    <div class="container btn">
        <div class="item">3</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_3"><span>grid-template-columns: 1fr 1fr 2fr</span>
        <div class="container"><span>1fr</span></div>
        <div class="container"><span>1fr</span></div>
        <div class="container"><span>2fr</span></div>
    </div>

</div>



<!-- ================== // 4 // ================== -->
<div class="flex" id="num_4">
    <div class="container btn">
        <div class="item">4</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_4"><span>grid-template-columns: 1fr 3fr 1fr</span>
        <div class="container"><span>1fr</span></div>
        <div class="container"><span>3fr</span></div>
        <div class="container"><span>1fr</span></div>
    </div>

</div>



<!-- ================== // 5 // ================== -->
<div class="flex" id="num_5">
    <div class="container btn">
        <div class="item">5</div>
    </div>
</div>

<div class="grid container">
        
    <div class="grid grid_5"><span>grid-template-columns: 3fr 1fr 300px</span>
        <div class="container"><span>3fr</span></div>
        <div class="container"><span>1fr</span></div>
        <div class="container"><span>300px</span></div>
    </div>

</div>



<!-- ================== // 6 // ================== -->
<div class="flex" id="num_6">
    <div class="container btn">
        <div class="item">6</div>
    </div>
</div>

<div class="grid container">
        
    <div class="grid grid_6"><span>grid-template-columns: repeat(3, 1fr)</span>
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="container"><span>1fr</span></div>
        <?php endfor; ?>
    </div>
        
</div>



<!-- ================== // 7 // ================== -->
<div class="flex" id="num_7">
    <div class="container btn">
        <div class="item">7</div>
    </div>
</div>

<div class="grid container">
        
    <div class="grid grid_7"><span>grid-template-columns: repeat(2, 1fr 2fr)</span>
        <div class="container"><span>2fr</span></div>
        <div class="container"><span>1fr</span></div>
        <div class="container"><span>2fr</span></div>
        <div class="container"><span>1fr</span></div>
    </div>

</div>



<!-- ================== // 8 // ================== -->
<div class="flex" id="num_8">
    <div class="container btn">
        <div class="item">8</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_8"><span>grid-template-columns: 400px repeat(2, 1fr 2fr)</span>
        <div class="container"><span>400px</span></div>
        <div class="container"><span>1fr</span></div>
        <div class="container"><span>2fr</span></div>
        <div class="container"><span>1fr</span></div>
        <div class="container"><span>2fr</span></div>
    </div>

</div>



<!-- ================== // 9 // ================== -->
<div class="flex" id="num_9">
    <div class="container btn">
        <div class="item">9</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_9"><span>grid-template-columns: minmax(200px, 500px) 1fr 1fr</span>
        <div class="container"><span>min: 200px, max: 500px</span></div>
        <?php for ($i = 1; $i <= 2; $i++): ?>
            <div class="container"><span>1fr</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 10 // ================== -->
<div class="flex" id="num_10">
    <div class="container btn">
        <div class="item">10</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_10"><span>grid-template-columns: minmax(100px, 300px) 2fr 1fr ★ grid-auto-rows: minmax(200px, auto)</span>
        <div class="container"><span><b>width</b>: <br> min: 100px <br> max: 300px <br><br> <b>height</b>: <br> min: 200px <br> max: depends on content</span></div>
        <div class="container"><span><b>width</b>: 2fr <br> <b>height</b>: same as #1</span></div>
        <div class="container"><span><b>width</b>: 1fr <br> <b>height</b>: same as #1</span></div>
    </div>
        
</div>


<!-- ================== // 11 // ================== -->
<div class="flex" id="num_11">
    <div class="container btn">
        <div class="item">11</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_11"><span><b>grid-auto-flow</b>: column ★ grid-template-rows: 150px 1fr 1fr</span>      
        <div class="container"><span>row heigth: 150px</span></div>
        <div class="container"><span>row heigth: 1fr</span></div>
        <div class="container"><span>row heigth: 1fr</span></div>

        <div class="container"><span>row heigth: 150px</span></div>
        <div class="container"><span>row heigth: 1fr</span></div>
        <div class="container"><span>row heigth: 1fr</span></div>

        <div class="container"><span>row heigth: 150px</span></div>
        <div class="container"><span>row heigth: 1fr</span></div>
        <div class="container"><span>row heigth: 1fr</span></div>
    </div>
        
</div>



<!-- ================== // 12 // ================== -->
<div class="flex" id="num_12">
    <div class="container btn">
        <div class="item">12</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_12"><span>grid-template-columns: repeat(<b>auto-fill</b>, 300px)</span>
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="container"><span>300px</span></div>
        <?php endfor; ?>
    </div>
        
</div>



<!-- ================== // 13 // ================== -->
<div class="flex" id="num_13">
    <div class="container btn">
        <div class="item">13</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_13"><span>grid-template-columns: repeat(<b>auto-fill</b>, minmax(300px, 1fr))</span>
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="container"><span>min: 300px <br> max: 1fr</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 14 // ================== -->
<div class="flex" id="num_14">
    <div class="container btn">
        <div class="item">14</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_14"><span>grid-template-columns: repeat(<b>auto-fill</b>, minmax(90px, 1fr))</span>
        <?php for ($i = 1; $i <= 9; $i++): ?>
            <div class="container"><span>min: 90px <br> max: 1fr</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 15 // ================== -->
<div class="flex" id="num_15">
    <div class="container btn">
        <div class="item">15</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_15"><span>grid-template-columns: repeat(<b>auto-fit</b>, minmax(90px, 1fr))</span>
        <?php for ($i = 1; $i <= 9; $i++): ?>
            <div class="container"><span>min: 90px <br> max: 1fr</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 16 // ================== -->
<div class="flex" id="num_16">
    <div class="container btn">
        <div class="item">16</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_16"><span>grid-template-columns: repeat(4, 1fr) ★ grid-template-rows: repeat(2, 150px) ★ #1: grid-column: 1 / 3</span>
        <div class="container">
            <span>grid-column-start: 1 + grid-column-end: 3 = <b>grid-column: 1 / 3</b></span>
        </div>
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="container"><span>1fr × 150px</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 17 // ================== -->
<div class="flex" id="num_17">
    <div class="container btn">
        <div class="item">17</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_17"><span>grid-template-columns: repeat(4, 1fr) ★ grid-template-rows: repeat(2, 150px) ★ #1: grid-column: 1 / -1</span>
        <div class="container"><span>grid-column-start: 1 + grid-column-end: -1 = <b>grid-column: 1 / -1</b></span></div>
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="container"><span>1fr × 150px</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 18 // ================== -->
<div class="flex" id="num_18">
    <div class="container btn">
        <div class="item">18</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_18"><span>grid-template-columns: repeat(4, 1fr) + grid-template-rows: repeat(3, 150px) = <b>grid-template</b>: repeat(3, 150px) / repeat(4, 1fr)</span>
        <div class="container"><span>grid-column: 1 / -1</span></div>
        <div class="container"><span>grid-column: 1 <br> grid-row: 2</span></div>
        <div class="container"><span>grid-column: 2 / 4 <br> grid-row: 2</span></div>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="container"><span>1fr × 150px</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 19 // ================== -->
<div class="flex" id="num_19">
    <div class="container btn">
        <div class="item">19</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_19"><span>grid-template: repeat(3, 150px) / repeat(4, 1fr)</span>
        <div class="container"><span>grid-column: 1 <br> grid-row: 2</span></div>
        <div class="container"><span>grid-column: 1 <br> grid-row: 1</span></div>
        <div class="container"><span>grid-column: 2 / 4 <br> grid-row: 1</span></div>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="container"><span>1fr × 150px</span></div>
        <?php endfor; ?>
    </div>

</div>



<!-- ================== // 20 // ================== -->
<div class="flex" id="num_20">
    <div class="container btn">
        <div class="item">20</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_20"><span>grid-template-columns: 1fr 2fr 1fr ★ grid-template-rows: repeat(3, minmax(150px, auto))</span>
        <div class="container"><span>grid-column: 1 / 3 <br> grid-row: 1 / 3</span></div>
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="container"><span>1fr × 150px</span></div>
        <?php endfor; ?>
        <div class="container"><span>2fr × 150px</span></div>
        <div class="container"><span>1fr × 150px</span></div>
    </div>

</div>




<!-- ================== // 21 // ================== -->
<div class="flex" id="num_21">
    <div class="container btn">
        <div class="item">21</div>
    </div>
</div>

<div class="grid grid_21">
    <header class="container grid">
        <img class="container"alt="img">
        <nav class="container"></nav>
    </header>
    <main class="container grid">
        <article class="container grid">
            <img class="container" alt="img">
            <p class="container"></p>
            <p class="container"></p>
        </article>
        <section class="container grid">
            <p class="container"></p>
            <p class="container"></p>
        </section>
    </main>
    <aside class="container grid">
        <article class="container grid">
            <p class="container"></p>
            <p class="container"></p>
            <p class="container"></p>
        </article>
        <section class="container grid"></section>
    </aside>
    <footer class="container grid">
        <section class="container"></section>
        <section class="container"></section>
        <section class="container"></section>
    </footer>
</div>



<!-- ================== // 22 // ================== -->
<div class="flex" id="num_22">
    <div class="container btn">
        <div class="item">22</div>
    </div>
</div>

<div class="grid container">

    <div class="grid grid_22"><span>grid-template-columns: repeat(4, 1fr)</span>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="container"><span>1fr</span></div>
        <?php endfor; ?>
        <div class="container"><span>grid-column-end: span 3</span></div>
    </div>

</div>
<?php
    require_once($_SERVER['DOCUMENT_ROOT']).'/app/parts/footer.php';
?>
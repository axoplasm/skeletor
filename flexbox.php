<?php 
function makeManyBoxes($range=1, $break=false, $multi=true) { 
    foreach(range(1,$range) as $r) { 
        echo'<div class="fb-box fbb-' . $r . '">';
        if ($multi) {
            $m = $r % 6 ?: 6;
            if ($r % 4 == 1) { 
                echo'<big>';
            }
            foreach(range(1,$m) as $i) { 
                echo $r; 
                echo $break ? "<br>" : " ";
            } 
            if ($r % 4 == 1) { 
                echo '</big>';
            } 
        } else {
            echo $r; 
        }
        echo '</div>';
    } 
} 
?>
<?php $title = 'flexbox' ?>
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
            <?php makeManyBoxes(6, false, false) ?>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>flex-direction: row-reverse</h4>
        <div class="fb-2">
            <?php makeManyBoxes(6, false, false) ?>
        </div>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>flex-direction: column</h4>
        <div class="fb-3">
            <?php makeManyBoxes(6, false, false) ?>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>flex-direction: column-reverse</h4>
        <div class="fb-4">
            <?php makeManyBoxes(6, false, false) ?>
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
            <?php makeManyBoxes(6, false, false) ?>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>justify-content: flex-end</h4>
        <div class="fb-6">
            <?php makeManyBoxes(6, false, false) ?>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>justify-content: center</h4>
        <div class="fb-7">
            <?php makeManyBoxes(6, false, false) ?>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>justify-content: space-between</h4>
        <div class="fb-8">
            <?php makeManyBoxes(6, false, false) ?>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>justify-content: space-around</h4>
        <div class="fb-9">
            <?php makeManyBoxes(6, false, false) ?>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h3>align-items: <em>how to align elements along minor axis?</em></h3>
    </div>
</section>
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

<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h2>Flex <em>child</em> properties</h2>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h3>order: <em>arbitrarily order elements</em></h3>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>order: -1 <em>(what is default?)</em></h4>
        <p>unordered children appear in DOM order as value <b>0</b></p> 
            <div class="fb">
                <div class="fb-box fbb-1a">1</div>
                <div class="fb-box fbb-1b">2</div>
                <div class="fb-box fbb-1c">3</div>
                <div class="fb-box fbb-1d">4</div>
                <div class="fb-box fbb-1e">5</div>
                <div class="fb-box fbb-1f">6</div>        
            </div>
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h3>flex-grow: <em>flex item grows proportionally</em></h3>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>flex-grow: 1 <em>(Default: 0)</em></h4>
        <p>Any item with flex-grow will fill remaining space. Default items or flex-grow: 0 will try to be as small as possible.</p> 
        <div class="fb">
            <div class="fb-box fbb-2a">1</div>
            <div class="fb-box fbb-2b">2</div>
            <div class="fb-box fbb-2c">3</div>
            <div class="fb-box fbb-2d">4</div>
            <div class="fb-box fbb-2e">5</div>
            <div class="fb-box fbb-2f">6</div>        
        </div>
        <h4>(all items below have flex-grow: 1)</h4>
        <div class="fb fb-grow">
            <div class="fb-box fbb-2g">1</div>
            <div class="fb-box fbb-2h">2</div>
            <div class="fb-box fbb-2i">3</div>
            <div class="fb-box fbb-2j">4</div>
            <div class="fb-box fbb-2k">5</div>
            <div class="fb-box fbb-2l">6</div>        
        </div>
        <h4>(item 3 has flex-grow: 3)</h4>
        <div class="fb fb-grow">
            <div class="fb-box fbb-2m">1</div>
            <div class="fb-box fbb-2n">2</div>
            <div class="fb-box fbb-2o">3</div>
            <div class="fb-box fbb-2p">4</div>
            <div class="fb-box fbb-2q">5</div>
            <div class="fb-box fbb-2r">6</div>        
        </div>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h3>flex-shrink: <em>flex item shrinks proportionally</em></h3>
    </div>
</section>
<section class="layout-row">
    <div class="layout-inner-wrapper">
        <h4>flex-shrink: 1 <em>(Default: 0)</em></h4>
        <p></p> 
        <h4>(all items below have flex-basis: 20%, item 3 has flex-shrink: 3)</h4>
        <div class="fb fb-shrink">
            <div class="fb-box fbb-3g">1</div>
            <div class="fb-box fbb-3h">2</div>
            <div class="fb-box fbb-3i">3</div>
            <div class="fb-box fbb-3j">4</div>
            <div class="fb-box fbb-3k">5</div>
        </div>
    </div>
</section>

<?php include("includes/_foot.php") ?>

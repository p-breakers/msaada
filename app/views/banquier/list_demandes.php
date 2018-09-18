<?php load::view("template::head") ?>
<?php load::view("template::navbar") ?>
    <div class="inner_content">
    <!-- /pages_agile_info_w3l -->

    <div class="w3l-table-info agile_info_shadow" style="margin-top: 15px">
        <h2 class="w3_inner_tittle">Liste des demandes</h2>
        <table id="table-two-axis" class="two-axis">
            <thead>
            <tr>
                <?php
                foreach ($tables as $table) {
                    echo "<th>$table</th>";
                }
                ?>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($demandes as $demande) {
                echo "<tr>";
                foreach ($demande as $item) {
                    $item = ucwords($item);
                    echo "<td>$item</td>";
                }
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php load::view("template::foot") ?>
<?php load::view("template::head") ?>
<?php load::view("template::navbar") ?>
    <div class="inner_content">
    <!-- /pages_agile_info_w3l -->

    <div class="w3l-table-info agile_info_shadow" style="margin-top: 15px">
        <h2 class="w3_inner_tittle">Liste des demandes</h2>
        <table id="table-two-axis" class="two-axis" style="cursor: pointer">
            <thead>
            <tr>
                <th>N°</th>
                <?php
                $a = array_shift($tables);
                foreach ($tables as $table) {
                    echo "<th>$table</th>";
                }
                ?>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            foreach ($demandes as $demande) {
                $i++;
                echo "<tr id=\"" . $demande['code_demande'] . "\">";
                echo "<td>$i</td>";
                $a = array_shift($demande);
                foreach ($demande as $item) {
                    $item = ucwords($item);
                    echo "<td>$item</td>";
                }
                echo "</tr>\n";
            }
            ?>
            </tbody>
        </table>
    </div>
    <script type="application/javascript">
        $("tbody tr").click(function (e) {
            window.location.replace("http://localhost/analyst/demande_id.html?id=" + e.currentTarget.id);
        });
    </script>
<?php load::view("template::foot") ?>
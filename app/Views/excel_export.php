<?php
date_default_timezone_set("Asia/Jakarta");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Showcase_Rating " . date("Y-m-d H:i:s") . ".xls");

?>
<html>

<body>
    <h2>Rating Export</h2>
    <h3>Exported at: <?php echo date("Y-m-d H:i:s") ?></h3>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Jurusan</th>
                <th>Pertanyaan 1</th>
                <th>Pertanyaan 2</th>
                <th>Tanggal</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($rating); $i++) : ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $rating[$i]['name'] ?></td>
                    <td><?php echo $rating[$i]['rating1'] ?></td>
                    <td><?php echo $rating[$i]['rating2'] ?></td>
                    <td><?php echo $rating[$i]["date"] ?></td>
                    <td><?php echo $rating[$i]["time"] ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>

</html>
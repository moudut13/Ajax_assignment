<?php

    include_once "../autoload.php";
    $sql = "SELECT * FROM users_info";
    $data = $config->query($sql);
    $n = 1;
    while ($row = $data->fetch_object()):?>
        <tr>
            <th scope="row"><?php echo $n;$n++;?></th>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->username;?></td>
        </tr>
       <?php endwhile;
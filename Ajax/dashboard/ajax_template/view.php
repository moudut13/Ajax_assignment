<?php
include_once "../../autoload.php";
$sql = "SELECT * FROM students_info";
$data = $config->query($sql);
$n = 1;
while ($row = $data->fetch_object()):?>
    <tr>
        <th scope="row"><?php echo $n;$n++;?></th>
        <td><?php echo $row->name?></td>
        <td><?php echo $row->username?></td>
        <td><?php echo $row->address?></td>
        <td><img style="width: 80px;" src="assets/img/photo/<?php echo $row->photo?>"></td>.
        <td>
            <a view-id="<?php echo $row->id;?>" class="btn btn-success" id="edit-btn">Edit</a>
            <a view-id="<?php echo $row->id;?>" id="s_view-btn" class="btn btn-primary">View</a>
            <a delete_id="<?php echo $row->id;?>" id="delete-btn" class="btn btn-danger">Delete</a>
        </td>
    </tr>
<?php
endwhile;

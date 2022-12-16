<?php
function add_danh_muc($tenloai, $image)
{
    $sql = "INSERT INTO `groupproduct`(`name`,`image`) VALUES ('
    $tenloai','$image')";
    pdo_execute($sql);
}
function get_full_categories()
{
    $sql = "SELECT * FROM groupproduct";
    return pdo_query_all($sql);
}

function get_full_categoriess()
{
    $sql = "SELECT * FROM groupproduct";
    return pdo_query_all($sql);
}

function loadall_danh_muc()
{
    $sql = "SELECT * FROM groupproduct";
    $show_dm = pdo_query_all($sql);
    return $show_dm;
}
function delete_danh_muc($id)
{
    $sql = "DELETE FROM `groupproduct` WHERE id=$id";
    pdo_execute($sql);
}
function loadone_danh_muc($id)
{
    $sql = "SELECT * FROM groupproduct WHERE id = $id";
    $edit_dm = pdo_query_one($sql);
    return $edit_dm;
}
function update_danh_muc($id, $name, $image)
{
    if ($image != "") {
        $sql = "UPDATE `groupproduct` SET name='" . $name . "',image='" . $image . "' WHERE id=" . $id;
    } else {
        $sql = "UPDATE `groupproduct` SET name='" . $name . "' WHERE id=" . $id;
    }

    pdo_execute($sql);
}

<?php
function add_danh_muc($tenloai)
{
    $sql = "INSERT INTO `categories`(`name`) VALUES ('
    $tenloai')";
    pdo_execute($sql);
}
function get_full_categories()
{
    $sql = "SELECT * FROM categories";
    return pdo_query_all($sql);
}

function get_full_categoriess()
{
    $sql = "SELECT * FROM categories";
    return pdo_query_all($sql);
}

function loadall_danh_muc()
{
    $sql = "SELECT * FROM categories";
    $show_dm = pdo_query_all($sql);
    return $show_dm;
}
function delete_danh_muc($id)
{
    $sql = "DELETE FROM `categories` WHERE id=$id";
    pdo_execute($sql);
}
function loadone_danh_muc($id)
{
    $sql = "SELECT * FROM categories WHERE id = $id";
    $edit_dm = pdo_query_one($sql);
    return $edit_dm;
}
function update_danh_muc($id, $name)
{
    $sql = "UPDATE `categories` SET name='" . $name . "' WHERE id=" . $id;
    pdo_execute($sql);
}

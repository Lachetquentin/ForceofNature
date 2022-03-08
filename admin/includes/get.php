<?php

// CATEGORIES //

/**
 * Get all categories from the database
 */
function getCategories() {
    // use global $db object in function
    global $db;
    $sql = "SELECT * FROM category";
    $result = mysqli_query($db, $sql);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $categories;
}

/**
 * Get all categories where id is equals to category_id from the database
 * @param [int] $category_id
 */
function getCategoryById($category_id) {
    global $db;
    $sql = "SELECT * FROM category WHERE id_category='$category_id' LIMIT 1";
    $result = mysqli_query($db, $sql);
    $category = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $category;
}

// COMMENTS //

/**
 * Get all products pending comments from the database
 */
function getProductsPendingComments() {
    global $db;
    $sql = "SELECT comments_products.*, user.email, products.name FROM comments_products, user, products WHERE comments_products.id_user = user.id_user AND comments_products.id_product = products.id_product AND published = 0 ORDER BY comments_products.id_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Get all services pending comments from the database
 */
function getServicesPendingComments() {
    global $db;
    $sql = "SELECT comments_services.*, user.email, services.name FROM comments_services, user, services WHERE comments_services.id_user = user.id_user AND comments_services.id_service = services.id_service AND published = 0 ORDER BY comments_services.id_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Get all products published comments from the database
 */
function getProductsPublishedComments() {
    global $db;
    $sql = "SELECT comments_products.*, user.email, products.name FROM comments_products, user, products WHERE comments_product.id_user = user.id_user AND comments_products.id_product = products.id_product AND published = 1 ORDER BY comments_products.id_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Get all services published comments from the database
 */
function getServicesPublishedComments() {
    global $db;
    $sql = "SELECT comments_services.*, user.email, services.name FROM comments_services, user, services WHERE comments_services.id_user = user.id_user AND comments_services.id_service = services.id_service AND published = 1 ORDER BY comments_services.id_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Get recents products published comments
 */
function getRecentProductsPublishedComments() {
    global $db;
    $sql = "SELECT comments_products.*, user.email, products.name FROM comments_products, user, products WHERE comments_products.id_user = user.id_user AND comments_products.id_product = products.id_product AND published = 1 ORDER BY comments_products.date_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Get recents services published comments
 */
function getRecentServicesPublishedComments() {
    global $db;
    $sql = "SELECT comments_services.*, user.email, services.name FROM comments_services, user, services WHERE comments_services.id_user = user.id_user AND comments_services.id_service = services.id_service AND published = 1 ORDER BY comments_services.date_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Get all comments from  products from an user or several users who have the same letters in their email.
 * @param [string] $user_email
 */
function getProductsCommentsByEmail($user_email) {
    global $db;
    $sql = "SELECT comments_products.*, user.email, products.name, products.id_product as productId FROM comments_products, user, products WHERE comments_products.id_user = user.id_user AND comments_products.id_product = products.id_product AND user.email LIKE '%$user_email%' ORDER BY comments_products.id_comment";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) { // if comments exists
        $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else { // If it doesnt exists
        $comments = "null";
    }

    return $comments;
}

/**
 * Get all comments from services from an user or or several users who have the same letters in their email.
 * @param [string] $user_email
 */
function getServicesCommentsByEmail($user_email) {
    global $db;
    $sql = "SELECT comments_services.*, user.email, services.name, services.id_service as serviceId FROM comments_services, user, services WHERE comments_services.id_user = user.id_user AND comments_services.id_service = services.id_service AND user.email LIKE '%$user_email%' ORDER BY comments_services.id_comment";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) { // if comments exists
        $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else { // If it doesnt exists
        $comments = "null";
    }

    return $comments;
}

/**
 * Get all published comments by their product ID
 * @param [int] $product_id
 */
function getPublishedCommentsByProductId($product_id) {
    global $db;
    $sql = "SELECT comments_products.*, user.email, products.name, products.id_product as productId FROM comments_products, user, products WHERE comments_products.id_user = user.id_user AND comments_products.id_product = products.id_product AND published = 1 AND products.id_product = '$product_id' ORDER BY comments_products.id_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Get all published comments by their service ID
 * @param [int] $service_id
 */
function getPublishedCommentsByServiceId($service_id) {
    global $db;
    $sql = "SELECT comments_services.*, user.email, services.name, services.id_service as serviceId FROM comments_services, user, services WHERE comments_services.id_user = user.id_user AND comments_services.id_service = services.id_service AND published = 1 AND services.id_service = '$service_id' ORDER BY comments_services.id_comment";
    $result = mysqli_query($db, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $comments;
}

/**
 * Count how many pending comments there is actually.
 */
function getNbPendingComments() {
    global $db;
    $sql = "SELECT COUNT(*) FROM comments_products, comments_services WHERE comments_products.published = 0 AND comments_services.published = 0 ";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

/**
 * Count how many published comments there is actually.
 */
function getNbPublishedComments() {
    global $db;
    $sql = "SELECT COUNT(*) FROM comments_products, comments_services WHERE published = 1 ";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

// Products //

/**
 * Get all products from the database limited to 10 per page with an offset to don't have the same result every page.
 */
function getProducts() {
    global $db;
    $sql = "SELECT products.*, category.name FROM products, category WHERE products.id_category = category.id_category ORDER BY id_product LIMIT " . calcpage . "," . parPage . " ";
    $result = mysqli_query($db, $sql);
    $product = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $product;
}

/**
 * Get product from the database where product_name is equals or close to the product_name's title limited to 10 per page with an offset to don't have the same result every page.
 * @param [string] $product_name
 */
function getProductsByName($product_name) {
    global $db;
    $sql = "SELECT products.*, category.name, category.id as categoryId FROM products, categorie WHERE products.id_category = category.id_category AND products.name LIKE '%$product_name%' LIMIT " . calcpage . "," . parPage . "";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) { // if product exists
        $product = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else { // if it doesnt exists
        $product = "null";
    }

    return $product;
}

/**
 * Get a product by its ID
 * @param [int] $product_id
 */
function getProductById($product_id) {
    global $db;
    $sql = "SELECT products.*, category.name, category.id as categoryId FROM products, category WHERE products.id_category = category.id_category AND products.id_product='$product_id' LIMIT 1 ";
    $result = mysqli_query($db, $sql);
    $product = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $product;
}

/**
 * Get the number of products actually created from the database
 */
function getNbProducts() {
    global $db;
    $sql = "SELECT COUNT(*) FROM products ";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

// SERVICES //

/**
 * Get all services from the database limited to 10 per page with an offset to don't have the same result every page.
 */
function getServices() {
    global $db;
    $sql = "SELECT services.*, category.name FROM services, category WHERE services.id_category = category.id_category ORDER BY id_service LIMIT " . calcpage . "," . parPage . " ";
    $result = mysqli_query($db, $sql);
    $services = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $services;
}

/**
 * Get services from the database where service_name is equals or close to the service name's title limited to 10 per page with an offset to don't have the same result every page.
 * @param [string] $service_name
 */
function getServicesByName($service_name) {
    global $db;
    $sql = "SELECT services.*, category.name, category.id as categoryId FROM services, categorie WHERE services.id_category = category.id_category AND services.name LIKE '%$service_name%' LIMIT " . calcpage . "," . parPage . "";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) { // if service exists
        $service = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else { // if it doesnt exists
        $service = "null";
    }

    return $service;
}

/**
 * Get a service by its ID
 * @param [int] $service_id
 */
function getServiceById($service_id) {
    global $db;
    $sql = "SELECT services.*, category.name, category.id as categoryId FROM services, category WHERE services.id_category = category.id_category AND services.id_product='$service_id' LIMIT 1 ";
    $result = mysqli_query($db, $sql);
    $service = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $service;
}

/**
 * Get the number of services from the database
 */
function getNbServices() {
    global $db;
    $sql = "SELECT COUNT(*) FROM services";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

// USER //

/**
 * Get all users actually registered on the site from the database
 */
function getUsers() {
    global $db;
    $sql = "SELECT user.* FROM user WHERE id_role='3' ORDER BY user.id_user";
    $result = mysqli_query($db, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $users;
}

/**
 * Get all admins & commercials actually registered on the site from the database
 */
function getAdmins() {
    global $db;
    $sql = "SELECT user.*, role.name as role FROM user, role WHERE user.id_role= role.id_role AND user.id_role = '1' OR user.id_role= role.id_role AND user.id_role = '2' ORDER BY user.id_user";
    $result = mysqli_query($db, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $users;
}

/**
 * Get an user from database with his email
 * @param [string] $user_email
 */
function getUserByEmail($user_email) {
    global $db;
    $sql = "SELECT * FROM user WHERE user.email LIKE '%$user_email%'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) { // if user exists

        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
    // if it doesnt exists
    else {
        $user = "null";
    }

    return $user;
}

/**
 * Get an user from database with his id
 * @param [int] $user_id
 */
function getUserById($user_id) {
    global $db;
    $sql = "SELECT * FROM user WHERE user.id_user='$user_id' LIMIT 1 ";
    $result = mysqli_query($db, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $user;
}

/**
 * Get all roles availables
 */
function getRoles() {
    global $db;
    $sql = "SELECT * FROM role";
    $result = mysqli_query($db, $sql);
    $roles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $roles;
}

/**
 * Get the number of users actually registered on the site from the database
 */
function getNbUsers() {
    global $db;
    $sql = "SELECT COUNT(*) FROM user WHERE user.id_role = 3";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

// ENTERPRISES //

/**
 * Get all enterprises actually registered on the site from the database
 */
function getEnterprises() {
    global $db;
    $sql = "SELECT user.* FROM user WHERE id_role='4' ORDER BY user.id_user";
    $result = mysqli_query($db, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $users;
}

/**
 * Get the number of enterprises actually registered on the site from the database
 */
function getNbEnterprises() {
    global $db;
    $sql = "SELECT COUNT(*) FROM user WHERE enterprise != 'null'";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

// ORDERING //

/**
 * Get all orders actually registered on the site from the database
 */
function getOrdering() {
    global $db;
    $sql = "SELECT * FROM ordering";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

/**
 * Get an ordering from database with id
 * @param [int] $ordering_id
 */
function getOrderingById($ordering_id) {
    global $db;
    $sql = "SELECT * FROM ordering WHERE ordering.id_order='$ordering_id' LIMIT 1 ";
    $result = mysqli_query($db, $sql);
    $order = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $order;
}

/**
 * Get the number of ordering from the database
 */
function getNbOrdering() {
    global $db;
    $sql = "SELECT COUNT(*) FROM ordering";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

// ESTIMATE //

/**
 * Get all estimates actually registered on the site from the database
 */
function getEstimates() {
    global $db;
    $sql = "SELECT * FROM ordering";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

/**
 * Get an estimate from database with id
 * @param [int] $estimate_id
 */
function getEstimateById($estimate_id) {
    global $db;
    $sql = "SELECT * FROM estimate WHERE estimate.id_estimate='$estimate_id' LIMIT 1 ";
    $result = mysqli_query($db, $sql);
    $estimate = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $estimate;
}

/**
 * Get the number of estimate from the database
 */
function getNbEstimate() {
    global $db;
    $sql = "SELECT COUNT(*) FROM estimate";
    $query = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($query);
    $count = $res['COUNT(*)'];

    return $count;
}

// PAGINATION //

// TODO Services and Products differents request

/**
 * Count the number of sheets available with these filter to calculate the total number of pages availables.
 * @param [string] $query
 * @param [string] $options
 */
function getTotalPagesSearch($query, $options) {

    global $db;

    if($options == "user"){
        $sql = "SELECT count(*) FROM sheet, categorie, user WHERE sheet.category_id = categorie.id AND sheet.user_id = user.id AND user.username LIKE '%$query%'";
        $query = mysqli_query($db, $sql);
        $res = mysqli_fetch_array($query);
        $totalPages = $res['count(*)'];
    }
    else{
        $sql = "SELECT count(*) FROM sheet, categorie, user WHERE sheet.category_id = categorie.id AND sheet.user_id = user.id AND sheet.sheet_title LIKE '%$query%'";
        $query = mysqli_query($db, $sql);
        $res = mysqli_fetch_array($query);
        $totalPages = $res['count(*)'];
    }

    return $totalPages;
}
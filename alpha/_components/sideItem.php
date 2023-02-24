<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
//created array of items to target in modal
$site_url = site_url();
while ($meal = mysqli_fetch_array($result)) {
    if($meal['category'] === "side"){
    echo " 

<div class='menu-item-container mb-3 d-flex'>
        <img class='menu-item-image' src='{$meal['imageUrl']}'>
        <div class='menu-item-content-container pt-3 px-2 pb-2 d-flex flex-wrap justify-content-end'>
            <div class='d-flex justify-content-between mb-2 w-100'>
                <h3>{$meal['name']}</h3>
                <h3 class='w-50 text-end'>$ {$meal['price']}</h3>
            </div>
            <p class='w-100'>{$meal['description']}</p>
            <div class='d-flex justify-content-end button-container'>
                <div  data-bs-toggle='modal' data-bs-target='#sideDishModal-{$meal['id']}' class='addButton'>
                    <p class='text-light display-6 align-self-center d-inline-block pt-1'>+</p>
                </div>
            </div> 
        </div>
    </div>
    ";
    include __DIR__ . '/sideModal.php';
}}
?>
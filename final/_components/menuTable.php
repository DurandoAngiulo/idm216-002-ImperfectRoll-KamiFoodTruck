<?php
if (!isset($result)) {
    echo '$meals variable is not defined. Please check the code.';
}
?>    
          <div class="">
            <table class="table table-bordered table-striped">
              <thead class="">
                <tr>
                  <th scope="col" class="">ID</th>
                  <th scope="col" class="">Name</th>
                  <th scope="col" style="width: 500px;" class="">Description</th>
                  <th scope="col"style="width: 800px;" class="">Ingredients</th>
                  <th scope="col" style="width: 500px;" class="">Image Url</th>
                    <!-- <span class="">Edit</span> -->
                  </th>
                </tr>
              </thead>
              <tbody class="">
                <?php
    $site_url = site_url();
 
    while ($meal = mysqli_fetch_array($result)) {
        echo "<tr>
           
                <th scope='row' class=''>{$meal['id']}</th>
                <td class=''>{$meal['name']}</td>
                <td class=''>{$meal['description']}</td>
                <td class=''>{$meal['ingredients']}</td>
                <td class='text-break'>
                <div class='d-flex justify-content-center'>
                <img  class= 'w-50' src='{$meal['imageUrl']}'>
                </div>
                </td>
              </tr>";
    }
?>
              </tbody>
            </table>
          </div>
<?php
if (!isset($result)) {
    echo '$meals variable is not defined. Please check the code.';
}
?>    
          <div class="table-responsive-xl">
            <table class="table">
              <thead class="">
                <tr>
                  <th scope="col" class="grey">ID</th>
                  <th scope="col" class="grey">Name</th>
                  <th scope="col" style="width: 500px;" class="grey">Description</th>
                  <th scope="col"style="width: 800px;" class="grey">Ingredients</th>
                  <th scope="col" style="width: 500px;" class="grey">Image Url</th>
                  <th scope="col" class="">
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
                <img  class= 'w-50' src='{$meal['imageUrl']}'>
                </td>
              </tr>";
    }
?>
              </tbody>
            </table>
          </div>
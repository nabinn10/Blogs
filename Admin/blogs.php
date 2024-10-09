<?php include 'header.php';
$query = "SELECT * from blogs";
include '../dbconnection.php';
$result = mysqli_query($conn, $query);
include '../closeconnection.php';
?>
<h2 class="text-3xl font-bold ">Blogs</h2>
<hr class="h-1 bg-blue-600">
<div class="text-right mt-5">
    <a href="createblog.php" class="bg-blue-600 px-5 py-2 roudedtext-white text-white">Add Blogs</a>
</div>
<table class="w-full mt-10 ">
    <tr>
        <th class="border p-2">Date</th>
        <th class="border p-2">Title</th>
        <th class="border p-2">Image</th>
        <th class="border p-2">Description</th>
        <th class="border p-2">Action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr class="text-center">
            <td class="border p-2">  <?php echo $row['blog_date'] ?> </td>
            <td class="border p-2">  <?php echo $row['title'] ?> </td>
            <td class="border p-2 align-center"><img src="../uploads/<?php echo $row['photopath'] ?>" alt="" class="w-20 h-20 mx-auto object-cover rounded"></td>
            <td class="border p-2 w-7/12">  <?php echo $row['description'] ?> </td>
            <td class="border p-2">
                <a href="editblog.php?id=<?php echo $row['id']; ?>" class="bg-blue-600 px-3 py-1 rounded text-white">Edit</a>
                <a href="actionblog.php?deleteid=<?php echo $row['id']?>" class="bg-red-600 px-3 py-1 rounded text-white" onclick="return confirm('Are you sure to delete')">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
    <!-- <tr>
        <td class="border p-2"></td>
        <td class="border p-2"></td>
        <td class="border p-2"></td>
        <td class="border p-2"></td>
        <td class="border p-2"></td>
    </tr> -->
</table>
<?php include 'footer.php' ?>
<?php include 'header.php' ?>

<h2 class="text-3xl font-bold ">Create Blogs</h2>
<hr class="h-1 bg-blue-600">
<form action="actionblog.php" method="post" enctype="multipart/form-data">
    <input type="date" class="p-5 rounded block my-4 border border-gray-400 w-full" name="date">
    <input type="text" class="p-5 rounded block my-4 border border-gray-400 w-full" name="title" placeholder="Title">
    <textarea class="p-5 rounded block my-4 border w-full border-gray-400" name="description" id="" placeholder="Enter Description"></textarea>
    <input type="file" class="p-5 rounded block my-4 border w-full border-gray-400" name="photopath" id="">
    <div class="flex justify-center mt-5 gap-5">

        <button type="submit" name="create" class="bg-blue-600 px-6 py-2 rounded text-white">Save</button>
        <a href="blogs.php" class="bg-red-600 px-6 py-2 rounded text-white">Cancel</a>
    </div>
</form>
<?php include 'footer.php' ?>
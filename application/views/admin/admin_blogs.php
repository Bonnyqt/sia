<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="icon" type="image/png" href="/sia/uploads/test.png">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LV Admin | Blogs</title>
   <style>
       table {
           width: 100%;
           border-collapse: collapse;
       }
       th, td {
           border: 1px solid #ccc;
           padding: 8px;
           text-align: left;
       }
       th {
           background-color: #f2f2f2;
       }
       .container {
           max-width: 1000px;
           margin: 0 auto;
           padding: 16px;
           box-sizing: border-box;
       }
       @media (max-width: 700px) {
           .container {
               padding: 8px;
           }
           table, thead, tbody, th, td, tr {
               display: block;
               width: 100%;
           }
           thead tr {
               display: none;
           }
           tr {
               margin-bottom: 15px;
               border-bottom: 2px solid #f2f2f2;
           }
           td {
               position: relative;
               padding-left: 50%;
               border: none;
               border-bottom: 1px solid #eee;
           }
           td:before {
               position: absolute;
               top: 8px;
               left: 8px;
               width: 45%;
               white-space: nowrap;
               font-weight: bold;
               content: attr(data-label);
           }
       }
       .save-btn,.delete-btn {
           background-color: #28a745;
           color: white;
           border: none;
           padding: 6px 12px;
           border-radius: 4px;
           cursor: pointer;
           font-size: 14px;
           transition: background-color 0.3s ease;
       }
       .save-btn:hover,.delete-btn:hover {
           background-color:rgb(59, 231, 88);
       }
       .save-btn:active,.delete-btn:active {
           background-color: #004085;
       }
       .save-btn:focus,.delete-btn:focus {
           outline: none;
           box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.4);
       }
   </style>
</head>
<body>
    <?php $this->load->view('admin/admin_header'); ?>

    <div class="container">
        <h2>All Blogs</h2>
        <table id="blogsTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Author</th>
                    <th>Media</th>
                    <th>Category</th>
                    <th>Anonimity</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($blogs)): ?>
                   
                    <?php foreach ($blogs as $blog): ?>
                        <tr data-blog-id="<?= $blog->id ?>">
                            <td><?= htmlspecialchars($blog->id) ?></td>
                            <td contenteditable="true"><?= htmlspecialchars($blog->title) ?></td>
                            <td
    contenteditable="true"
    title="<?= htmlspecialchars($blog->content) ?>"
    data-full-content="<?= htmlspecialchars($blog->content) ?>"
    onfocus="this.textContent = this.getAttribute('data-full-content');"
    onblur="if(this.textContent.length > 60) { this.textContent = this.textContent.substring(0, 60) + '…'; }"
>
    <?= strlen($blog->content) > 60 ? htmlspecialchars(mb_substr($blog->content, 0, 60)) . '…' : htmlspecialchars($blog->content) ?>
</td>
                            <td><?= htmlspecialchars($blog->username) ?></td>
                            <td>
    <?php if (!empty($blog->media)): ?>
        <?php if (preg_match('/\.(jpg|jpeg|png|gif|jfif|webp)$/i', $blog->media)): ?>
            <img src="/<?= htmlspecialchars($blog->media, ENT_QUOTES, 'UTF-8') ?>" alt="Media" style="max-width: 100px; max-height: 100px;">
        <?php elseif (preg_match('/\.(mp4|webm|ogg)$/i', $blog->media)): ?>
            <video controls style="max-width: 150px; max-height: 100px;">
                <source src="/<?= htmlspecialchars($blog->media, ENT_QUOTES, 'UTF-8') ?>">
                Your browser does not support the video tag.
            </video>
        <?php endif; ?>
    <?php else: ?>
        —
    <?php endif; ?>
</td>

                            <td contenteditable="true"><?= htmlspecialchars($blog->category) ?></td>
                            <td contenteditable="true"><?= htmlspecialchars($blog->isAnonymous) ?></td>
                            <td><?= htmlspecialchars($blog->created_at) ?></td>
                            <td style="display: flex; justify-content: center;">
    <button class="save-btn">Save</button>
    <button class="delete-btn" style="background:#dc3545;margin-left:5px;">Delete</button>
</td>
                        </tr>
                    <?php endforeach; ?>
          
                <?php else: ?>
                    <tr><td colspan="6">No blogs found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

 <script>
document.addEventListener("DOMContentLoaded", function() {
    const table = document.querySelector("table");

    table.addEventListener("click", function(event) {
        const row = event.target.closest("tr");
        const blogId = row.getAttribute("data-blog-id");

        // Save button
        if (event.target && event.target.classList.contains("save-btn")) {
            const updatedData = {
                title: row.cells[1].textContent.trim(),
                content: row.cells[2].textContent.trim(),
                category: row.cells[5].textContent.trim(),
                isAnonymous: row.cells[6].textContent.trim()
            };

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "<?= base_url('index.php/admin/update_blog') ?>", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert("Blog updated successfully!");
                } else {
                    alert("Failed to update blog.");
                }
            };
            xhr.send(JSON.stringify({ blog_id: blogId, data: updatedData }));
        }

        // Delete button
        if (event.target && event.target.classList.contains("delete-btn")) {
            if (confirm("Are you sure you want to delete this blog?")) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "<?= base_url('index.php/admin/delete_blog') ?>", true);
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        row.remove();
                        alert("Blog deleted successfully!");
                    } else {
                        alert("Failed to delete blog.");
                    }
                };
                xhr.send(JSON.stringify({ blog_id: blogId }));
            }
        }
    });
});


</script>

</body>
</html>

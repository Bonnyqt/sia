<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="icon" type="image/png" href="/sia/uploads/test.png">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LV Admin | Users</title>
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
       .save-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .save-btn:hover {
        background-color: #218838;
    }

    .save-btn:active {
        background-color: #1e7e34;
    }

    .save-btn:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(40, 167, 69, 0.4);
    }
   </style>
</head>
<body>
    <?php $this->load->view('admin/admin_header'); ?>

    <div class="container">
        <h2>All Users</h2>
        <table id="usersTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>First Log In</th>
                    <th>Admin</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr data-user-id="<?= $user->id ?>">
                            <td><?= htmlspecialchars($user->id) ?></td>
                            <td contenteditable="true"><?= htmlspecialchars($user->username) ?></td>
                            <td contenteditable="true"><?= htmlspecialchars($user->email) ?></td>
                            <td contenteditable="true"><?= htmlspecialchars($user->password) ?></td>
                            <td contenteditable="true"><?= htmlspecialchars($user->first_login) ?></td>
                            <td contenteditable="true"><?= htmlspecialchars($user->is_superuser) ?></td>
                            <td><?= htmlspecialchars($user->created_at) ?></td>
                            <td><button class="save-btn">Save</button></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="8">No users found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.getElementById("usersTable");

            // Handle save button click for each row
            table.addEventListener("click", function(event) {
                if (event.target && event.target.classList.contains("save-btn")) {
                    const row = event.target.closest("tr");
                    const userId = row.getAttribute("data-user-id");

                    // Collect updated data from the row
                    const updatedData = {
                        username: row.cells[1].textContent,
                        email: row.cells[2].textContent,
                        password: row.cells[3].textContent,
                        first_login: row.cells[4].textContent,
                        is_superuser: row.cells[5].textContent
                    };

          
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "<?= base_url('index.php/admin/update') ?>", true);
                    xhr.setRequestHeader("Content-Type", "application/json");
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            alert("User updated successfully!");
                        } else {
                            alert("Failed to update user.");
                        }
                    };
                    xhr.send(JSON.stringify({ user_id: userId, data: updatedData }));
                }
            });
        });
    </script>

</body>
</html>

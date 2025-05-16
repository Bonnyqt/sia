<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="icon" type="image/png" href="/sia/uploads/test.png">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LV Admin | Logs</title>
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
      
        <h2>User Logs</h2>
<table id="logsTable">
    <thead>
        <tr>
            <th>Log ID</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Action</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($logs)): ?>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= htmlspecialchars($log->id) ?></td>
                    <td><?= htmlspecialchars($log->user_id) ?></td>
                    <td><?= htmlspecialchars($log->username) ?></td>
                    <td><?= htmlspecialchars($log->action) ?></td>
                    <td><?= htmlspecialchars($log->created_at) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">No logs found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
<div class="mt-3">
    <?= $pagination_links ?>
</div>

    </div>

    

</body>
</html>

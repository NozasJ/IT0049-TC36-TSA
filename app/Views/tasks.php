<main>
    <h1>All Tasks</h1>
    <p><strong>Date:</strong> <?= date('F j, Y') ?></p>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Task Title</th>
                <th>Status</th>
                <th>Task Date</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Tasks as $task): ?>
                <tr>
                    <td><?= $task['id'] ?></td>
                    <td><?= $task['title'] ?></td>
                    <td><?= $task['status']?></td>
                    <td><?= $task['task_date']?></td>
                    <td><?= $task['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
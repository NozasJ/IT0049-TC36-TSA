<main>
    <h1>Today's Tasks</h1>
    <p><strong>Date:</strong> <?= date('F j, Y') ?></p>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Task Title</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Tasks as $task): ?>
                <tr>
                    <td><?= $task['id'] ?></td>
                    <td><?= $task['title'] ?></td>
                    <td><?= ucwords(str_replace('_', ' ', $task['status'])) ?></td>
                    <td><?= date('h:i A', strtotime($task['created_at'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
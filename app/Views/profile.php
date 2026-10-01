<div class="profileContainer">
    <div class="profileCard">
        <h2>Welcome back, <?= esc($user['full_name'] ?? 'User') ?>!</h2>
        <p class="subtitle">Here is your account information:</p>

        <div class="info-group">
            <label>Full Name:</label>
            <p><?= esc($user['full_name'] ?? 'N/A') ?></p>
        </div>

        <div class="info-group">
            <label>Email Address:</label>
            <p><?= esc($user['email'] ?? 'N/A') ?></p>
        </div>

        <div class="info-group">
            <label>Account Created:</label>
            <p><?= isset($user['created_at']) ? esc(date('F j, Y', strtotime($user['created_at']))) : 'N/A' ?></p>
        </div>
    </div>
</div>
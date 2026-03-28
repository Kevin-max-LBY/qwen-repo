<?php
/**
 * 联系页面 - 时空图神经网络
 */

$pageTitle = "联系 - 时空图神经网络";
$current_page = 'contact';

// 处理表单提交
$message_sent = false;
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // 验证
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error_message = '请填写所有必填字段。';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = '请输入有效的邮箱地址。';
    } elseif (strlen($message) < 10) {
        $error_message = '留言内容至少需要 10 个字符。';
    } else {
        // 模拟发送邮件（实际应用中需要配置邮件服务器）
        // mail($to, $subject, $message, $headers);
        
        // 保存消息到文件（演示用途）
        $log_entry = sprintf(
            "[%s] Name: %s, Email: %s, Subject: %s, Message: %s\n",
            date('Y-m-d H:i:s'),
            htmlspecialchars($name),
            htmlspecialchars($email),
            htmlspecialchars($subject),
            htmlspecialchars($message)
        );
        file_put_contents('contact_logs.txt', $log_entry, FILE_APPEND);
        
        $message_sent = true;
    }
}

include 'includes/header.php';
?>

<section class="hero hero-small">
    <div class="container">
        <h1>联系我们</h1>
        <p class="subtitle">有任何问题或建议？欢迎与我们联系！</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-wrapper">
            <!-- 联系信息 -->
            <div class="contact-info">
                <h2>联系方式</h2>
                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div>
                        <h3>电子邮件</h3>
                        <p>contact@st-gnn.example.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">💬</div>
                    <div>
                        <h3>社区讨论</h3>
                        <p>GitHub Discussions</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">🐦</div>
                    <div>
                        <h3>社交媒体</h3>
                        <p>@st_gnn_community</p>
                    </div>
                </div>
                
                <div class="faq-section">
                    <h3>常见问题</h3>
                    <div class="faq-item">
                        <h4>如何贡献代码？</h4>
                        <p>欢迎访问我们的 GitHub 仓库，提交 Pull Request。</p>
                    </div>
                    <div class="faq-item">
                        <h4>可以合作研究吗？</h4>
                        <p>欢迎学术界和工业界的合作，请通过邮件详谈。</p>
                    </div>
                    <div class="faq-item">
                        <h4>有培训课程吗？</h4>
                        <p>我们定期举办线上/线下培训，请关注最新动态。</p>
                    </div>
                </div>
            </div>
            
            <!-- 联系表单 -->
            <div class="contact-form-container">
                <h2>发送消息</h2>
                
                <?php if ($message_sent): ?>
                    <div class="success-message">
                        <strong>✓ 消息发送成功！</strong>
                        <p>我们会尽快回复您的邮件。</p>
                    </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="error-message">
                        <strong>✗ <?php echo htmlspecialchars($error_message); ?></strong>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="contact.php" class="contact-form">
                    <div class="form-group">
                        <label for="name">姓名 *</label>
                        <input type="text" id="name" name="name" required 
                               value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">邮箱 *</label>
                        <input type="email" id="email" name="email" required
                               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">主题 *</label>
                        <select id="subject" name="subject" required>
                            <option value="">请选择主题</option>
                            <option value="general" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'general') ? 'selected' : ''; ?>>一般咨询</option>
                            <option value="collaboration" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'collaboration') ? 'selected' : ''; ?>>合作洽谈</option>
                            <option value="bug" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'bug') ? 'selected' : ''; ?>>问题报告</option>
                            <option value="feature" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'feature') ? 'selected' : ''; ?>>功能建议</option>
                            <option value="other" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'other') ? 'selected' : ''; ?>>其他</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">留言内容 *</label>
                        <textarea id="message" name="message" rows="6" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">发送消息</button>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
.contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 3rem;
}

.contact-info,
.contact-form-container {
    background: var(--bg-white);
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-info h2,
.contact-form-container h2 {
    margin-bottom: 1.5rem;
    color: var(--primary-color);
}

.info-item {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid var(--border-color);
}

.info-item:last-of-type {
    border-bottom: none;
}

.info-icon {
    font-size: 2rem;
}

.info-item h3 {
    font-size: 1rem;
    margin-bottom: 0.25rem;
    color: var(--text-dark);
}

.info-item p {
    color: var(--text-light);
}

.faq-section {
    margin-top: 2rem;
}

.faq-section h3 {
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.faq-item {
    margin-bottom: 1rem;
}

.faq-item h4 {
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.faq-item p {
    color: var(--text-light);
    font-size: 0.9rem;
}

.success-message,
.error-message {
    padding: 1rem;
    border-radius: 5px;
    margin-bottom: 1.5rem;
}

.success-message {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.error-message {
    background: #fee2e2;
    color: #991b1b;
    border: 1px solid #fecaca;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: var(--text-dark);
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 0.75rem;
    border: 1px solid var(--border-color);
    border-radius: 5px;
    font-size: 1rem;
    font-family: inherit;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary-color);
}

.form-group textarea {
    resize: vertical;
}

.btn-block {
    width: 100%;
    text-align: center;
    border: none;
    cursor: pointer;
}

.btn-block:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .contact-wrapper {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>

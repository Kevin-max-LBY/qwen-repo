<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="index.php">ST-GNN</a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">首页</a></li>
                <li><a href="about.php" class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">关于</a></li>
                <li><a href="tutorials.php" class="<?php echo ($current_page == 'tutorials') ? 'active' : ''; ?>">教程</a></li>
                <li><a href="research.php" class="<?php echo ($current_page == 'research') ? 'active' : ''; ?>">研究</a></li>
                <li><a href="contact.php" class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>">联系</a></li>
            </ul>
            <button class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <main>

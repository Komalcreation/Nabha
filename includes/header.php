<?php require_once __DIR__ . '/functions.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo currentLang(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="container nav">
        <div class="logo">
            <h1>Komal Creations</h1>
            <p>& Training Center</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><?php echo t('Home', 'ਮੁੱਖ ਪੰਨਾ'); ?></a></li>
                <li><a href="courses.php"><?php echo t('Courses', 'ਕੋਰਸ'); ?></a></li>
                <li><a href="gallery.php"><?php echo t('Gallery', 'ਗੈਲਰੀ'); ?></a></li>
                <li><a href="contact.php"><?php echo t('Contact', 'ਸੰਪਰਕ'); ?></a></li>
            </ul>
        </nav>
        <div class="lang-links">
            <a class="lang-btn" href="?lang=en">English</a>
            <a class="lang-btn" href="?lang=pa">ਪੰਜਾਬੀ</a>
        </div>
    </div>
</header>
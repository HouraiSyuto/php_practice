<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
    <title>hello</title>
</head>
<body>
    <?php $hour = date('H'); // 現在の時を$hour変数に格納 ?>

    <?php if(5 <= $hour && $hour <10): //5時から10時までの間　?>
    <p>ohayou</p>
    <?php elseif(10 <= $hour && $hour <18): // 10時から18時までの間 ?>
    <p>konnnitiha</p>
    <?php else: // それ以外 ?>
    <p>konnbannwa</p>
    <?php endif; ?>

    <p><?php echo $hour; ?></p>
</body>
</html>
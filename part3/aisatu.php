<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
    <title>hello</title>
</head>
<body>
    <?php $hour = date('H'); // ���ߤλ���$hour�ѿ��˳�Ǽ ?>

    <?php if(5 <= $hour && $hour <10): //5������10���ޤǤδ֡�?>
    <p>ohayou</p>
    <?php elseif(10 <= $hour && $hour <18): // 10������18���ޤǤδ� ?>
    <p>konnnitiha</p>
    <?php else: // ����ʳ� ?>
    <p>konnbannwa</p>
    <?php endif; ?>

    <p><?php echo $hour; ?></p>
</body>
</html>
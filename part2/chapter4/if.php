●中括弧を用いる場合
<?php $display_message = false; ?>
<?php if ($display_message) { ?>
<p>
    このメッセージは $display_message が true の時にのみ表示されるメッセージです。
</p>
<?php } else { ?>
<p>
    このメッセージは $display_message が false の時にのみ表示されるメッセージです。
</p>
<?php } ?>
...


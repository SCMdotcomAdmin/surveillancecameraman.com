<?php exit; ?>
1659855453
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpBB_moderator_cache m) LEFT JOIN phpBB_users u ON (m.user_id = u.user_id) LEFT JOIN phpBB_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}
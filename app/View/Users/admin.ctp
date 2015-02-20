<!--  written by Taranjyot Singh Multani -->
<!-- Admin page for all the users -->
<h1><strong>Users of Pijon Box</strong></h1>
<table>
    <tr>
        <th>Sr. no</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
    </tr>

    <!-- Here is where we loop through our $users array, printing out users info -->
    <?php $sr_no=1;  ?>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $sr_no;?></td>
        <td><?php echo $user['User']['first_name']; ?></td>
        <td><?php echo $user['User']['last_name']; ?></td>
       
        <td><?php echo $user['User']['email']; ?></td>
    </tr>
    <?php  $sr_no++; endforeach; ?>
    <?php unset($user); ?>
</table>
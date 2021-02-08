
<?php $users = getUsers();?>

<div class="container">
    <div class="table">
        <table class="table">
            <tr>
                <th id="ID">ID uzytkownika</th>
                <th id="email">Email</th>
                <th id="login">Login</th>
                <th id="name">Imię</th>
                <th id="surname">Nazwisko</th>
                <th>Akcje</th>
            </tr>

            <?php foreach($users as $user):?>
                <tr>
                    <td><?= $user->ID;?></td>
                    <td><?php echo $user->email;?></td>
                    <td><?php echo $user->nick;?></td>
                    <td><?php echo $user->name;?></td>
                    <td><?php echo $user->surname;?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
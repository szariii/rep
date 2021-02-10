<?php get_header() ?>
<?php $users = getUsers();?>

<form method="POST">

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
                    <td><?= $user->email;?></td>
                    <td><?php echo $user->nick;?></td>
                    <td><?php echo $user->name;?></td>
                    <td><?php echo $user->surname;?></td>
                    <td>
                    <a href="/edit?id=<?php echo $user->ID;?>"><button type="button" class="btn btn-info" form="POST" id="edit">Edytuj</button></a>
                    <button type="button" class="btn btn-danger" id="del">Usuń</button></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
<?php get_footer() ?>
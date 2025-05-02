<?php
$title = "Events";
require "header.php";
require "dbconn.php";

// for students table
$sql = "SELECT * FROM events";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$admit = $querry->fetchAll(PDO::FETCH_OBJ);

// for parents table
$sql = "SELECT * FROM recent";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$parent = $querry->fetchAll(PDO::FETCH_OBJ);

?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="col-12 clas">
            <label for="">Upcoming Events</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Event Name</td>
                        <td>Event Date</td>
                        <td>End Date</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($admit as $samp) : ?>
                    <tr>
                        <td><?php echo $samp->id; ?></td>
                        <td><?php echo $samp->eventname; ?></td>
                        <td><?php echo $samp->eventdate; ?></td>
                        <td><?php echo $samp->enddate; ?></td>
                        <td><a href="update.php?id=<?=$samp->id;?>" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td>
                            <form action="delevent.php" method="POST">
                                <button type="submit" name="delete" value="<?= $samp->id; ?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        <!-- <td><a href="form.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td> -->
        <div class="col-12 clas">
            <label for="">Recent Events</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Event Name</td>
                        <td>Date</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($parent as $samp) : ?>
                    <tr>
                        <td><?php echo $samp->id; ?></td>
                        <td><?php echo $samp->eventname; ?></td>
                        <td><?php echo $samp->eventdate; ?></td>
                        <td><a href="update.php?id=<?=$samp->id;?>" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td>
                            <form action="delevent.php" method="POST">
                                <button type="submit" name="del_recent" value="<?= $samp->id; ?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>
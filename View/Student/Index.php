<h1 class="jumbotron bg-dark rounded-0 text-white">
    <?php echo $data['title']; ?>
</h1>

<div class="border-secondary offset-md-3 col-md-6">
    <table class="table table-striped table-secondary rounded-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Lulus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['data'] as $key => $value) { ?>
            <tr>
                <th scope="row"><?php echo $value['id']; ?></th>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['kelulusan'] ? "ya" : "tidak" ; } ?></td>
            </tr>
        </tbody>
        <form action="" method="get">
            <input type="submit" value="Semua" class="btn btn-secondary">
        </form>
        <form action="" method="get">
            <input type="hidden" name="filter" value="1">
            <input type="submit" value="Lulus" class="btn btn-success">
        </form>
        <form action="" method="get">
            <input type="hidden" name="filter" value="0">
            <input type="submit" value="Tidak Lulus" class="btn btn-danger">
        </form>
        <form action="Student/create" method="get">
            <input type="submit" value="Baru" class="btn btn-info">
        </form>
    </table>
</div>
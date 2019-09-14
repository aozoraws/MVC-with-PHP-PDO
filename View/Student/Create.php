<h1 class="jumbotron bg-dark rounded-0 text-white">
    <?php echo $data['title']; ?>
</h1>

<div class="container">
    <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
    <div class="card border-secondary offset-md-4 col-md-4">
        <div class="card-body">
            <form action="store" method="post">
                <div class="form-group">
                    <label for="name">Nama Student</label>
                    <input type="text" name="name" class="form-control border-secondary">
                </div>
                <div class="form-group">
                    <label for="name">Kelulusan</label>
                    <select name="kelulusan"  class="form-control border-secondary">
                        <option value="1">Lulus</option>
                        <option value="0">Tidak Lulus</option>
                    </select>
                </div>
                <a href="/Student" class="btn btn-warning"> Batal </a>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>

</div>